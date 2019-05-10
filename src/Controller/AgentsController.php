<?php
// src/Controller/UsersController.php

namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;

class AgentsController extends AppController
{
    public function beforeFilter(Event $event){
        parent:: beforeFilter($event);
        $this->Auth->allow(['login', 'logout', 'add', 'complete']);
    }
    public function initialize()
    {
        parent::initialize();
        
    }
    public function index()
    {
        $agents = $this->Agents->find('all');
        $this->set(compact('agents'));
    }
    public function login()
    {
        $this->viewBuilder()->layout(false);
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user && $user['role'] != 'Disabled') {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Your username or password is incorrect.');
        }
        else echo 'not a post';
    }
    
    public function logout(){
        return $this->redirect($this->Auth->logout());    
    }
    
    public function add()
    {
        
        if ($this->request->is('post')) {
            //create the agent record
            $agent = $this->Agents->newEntity();
            $agent = $this->Agents->patchEntity($agent, $this->request->getData());
            $agent->role = 'admin';
            $agent->first_name = ucfirst($agent->first_name);
            $agent->last_name = ucfirst($agent->last_name);
            
            //create the agency record and tie to the agent
            $agency = $this->Accounts->newEntity();
            $accountInfo = ['email'=>$agent->email, 'primaryagent'=>$agent->id];
            $agency = $this->Accounts->patchEntity($agency, $accountInfo);
            
            if ($this->Agents->save($agent)) {
                $this->Flash->success(__('Your user account has been created.'));
                $this->Auth->setUser($agent);
                
                if($this->Accounts->save($agency)){
                    $accountInfo = ['primaryagent'=>$agent->id];
                    $agent->account_id = $agency->id;
                    $agency = $this->Accounts->patchEntity($agency, $accountInfo);
                    //$agent = $this->Agents->patchEntity($agent);
                    $this->Accounts->save($agency);
                    $this->Agents->save($agent);
                    
                    
                    $this->Flash->success(__('Your agency profile has been created.'));
                }
                else $this->Flash->error(__('Your agency profile could not be created.'));
                return $this->redirect(['action' => 'complete', $agent->id]);
            }
            else $this->Flash->error(__('Unable to add your user account.'));
            $this->set('agent', $agent);
        }
        
    }
    
    public function complete($id){
        $this->viewBuilder()->layout(false);
        $agent = $this->Agents->findById($id)->firstOrFail();
        if ($this->request->is(['post', 'put'])) {
            $this->Agents->patchEntity($agent, $this->request->getData());
            if(isset($this->request->data['headshot']['tmp_name'])){
                $file = $this->request->data['headshot'];
                $cloudinaryOptions = array("transformation"=>array(
                    array("aspect_ratio"=>"1:1", "width"=>300, "gravity"=>"faces", "radius"=>"max", "crop"=>"fill"),
                    array("quality"=>"auto", "fetch_format"=>"auto")
                    ));
                $cloudinaryAPIRequest = \Cloudinary\Uploader::upload($file["tmp_name"], $cloudinaryOptions);
                
                $agent['headshot'] = $cloudinaryAPIRequest['secure_url']; 
            }
            
            if ($this->Agents->save($agent)) {
                //$this->Flash->success(__('Your article has been updated.'));
                return $this->redirect(['controller'=>'Pages', 'action' => 'display', 'dashboard']);
            }
            else $this->Flash->error(__('Unable to update your profile.'));
        }
    
        $this->set('agent', $agent);
    }
    
    public function edit(){
        $user = $this->Auth->user();
        $agent = $this->Agents->findById($user['id'])->firstOrFail();
        if ($this->request->is(['post', 'put'])) {
            $this->Agents->patchEntity($agent, $this->request->getData());
            if(isset($this->request->data['headshot']['tmp_name'])){
                $file = $this->request->data['headshot'];
                $cloudinaryOptions = array("transformation"=>array(
                    array("aspect_ratio"=>"1:1", "width"=>300, "gravity"=>"faces", "radius"=>"max", "crop"=>"fill"),
                    array("quality"=>"auto", "fetch_format"=>"auto")
                    ));
                $cloudinaryAPIRequest = \Cloudinary\Uploader::upload($file["tmp_name"], $cloudinaryOptions);
                
                $agent['headshot'] = $cloudinaryAPIRequest['secure_url']; 
            }
            if ($this->Agents->save($agent)) {
                $this->Flash->success(__('Your agent profile has been updated.'));
                //return $this->redirect(['controller'=>'Pages', 'action' => 'display', 'dashboard']);
            }
            else $this->Flash->error(__('Unable to update your profile.'));
        }
        $this->set('pageName', 'Edit Agent Profile');
        $this->set('agent', $agent);
        
    }
    
    public function messages(){
        
    }
}