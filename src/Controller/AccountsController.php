<?php
// src/Controller/AccountsController.php

namespace App\Controller;

class AccountsController extends AppController
{
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Paginator');
        $this->loadComponent('Flash'); // Include the FlashComponent
    }
    public function index()
    {
        $accounts = $this->Accounts->find('all');
        $this->set(compact('accounts'));
    }
    public function add()
    {
        $account = $this->Accounts->newEntity();
        if ($this->request->is('post')) {
            $account = $this->Accounts->patchEntity($account, $this->request->getData());

            if ($this->Accounts->save($account)) {
                $this->Flash->success(__('Your account has been created.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your account.'));
        }
        $this->set('account', $account);
    }
    public function edit(){
        $user = $this->Auth->user();
        $account = $this->Accounts->findById($user['account_id'])->firstOrFail();
        if ($this->request->is(['post', 'put'])) {
            $this->Accounts->patchEntity($account, $this->request->getData());
            if(isset($this->request->data['logo']['tmp_name'])){
                $file = $this->request->data['logo'];
                $cloudinaryOptions = array();
                $cloudinaryAPIRequest = \Cloudinary\Uploader::upload($file["tmp_name"], $cloudinaryOptions);
                
                $account['logo'] = $cloudinaryAPIRequest['secure_url']; 
            }
            if ($this->Accounts->save($account)) {
                $this->Flash->success(__('Your agency profile has been updated.'));
                //return $this->redirect(['controller'=>'Pages', 'action' => 'display', 'dashboard']);
            }
            else $this->Flash->error(__('Unable to update your agency profile.'));
        }
        $this->set('pageName', 'Edit Agency Profile');
        $this->set('account', $account);
        
    }
}