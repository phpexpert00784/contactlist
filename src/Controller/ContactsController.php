<?php
// src/Controller/PostsController.php

namespace App\Controller;
use Cake\Mailer\Email;

class ContactsController extends AppController
{
    public function index()
    {
        $user = $this->Auth->user();
        $contacts = $this->Contacts->find('all')
            ->where(['account_id'=>$user['account_id'], 'user_id'=>$user['id']]);
        $this->set('contacts', $contacts);
        $this->set('user', $user);
        $this->set('pageName', 'Contact List');
		
		$contacts = $this->Contacts->newEntity();
		$this->set(compact('contacts'));
		
    }
    
    public function add()
    {
        $user = $this->Auth->user();
        $contact = $this->Contacts->newEntity();
        if ($this->request->is('post')) {
            $contact = $this->Contacts->patchEntity($contact, $this->request->getData());

            // Hardcoding the user_id is temporary, and will be removed later
            // when we build authentication out.
            $contact->user_id = $user['id'];
            $contact->account_id = $user['account_id'];

            if ($this->Contacts->save($contact)) {
                $this->Flash->success(__('Your contact has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your contact.'));
        }
        $this->set('contact', $contact);
        $this->set('pageName', 'Add A Contact');
    }
	
	public function sendemail(){
		if ($this->request->is('post')) {
			extract($this->request->getData());
			
			$user = $this->Auth->user();
			$email = new Email('default');
			$email->from([$from_email => 'My Site'])
			->to($to_email)
			->subject($subject)
			->viewVars(['name' => $user['firstname']." ".$user['lastname'],'email' => $user['email'],'phone' => $user['phone']])
			->template('default', 'contact')
			->emailFormat('html')
			->send($message);
			$this->Flash->success(__('Email Sent successfully.'));
		}else{
			$this->Flash->error(__('Unable to Send email.'));
		}
		return $this->redirect(['action' => 'index']);
	}
	
	public function contactlist(){
		$search_term=$this->request->query('term');
		$contact_emails = $this->Contacts->find()->where(['email LIKE' => '%'.$search_term.'%'])->toArray();
		
		$email_to_arr=array();
		if($contact_emails){
			foreach($contact_emails as $ce){
				$data['id']=$ce->id;
				$data['value']=$ce->email;
				array_push($email_to_arr,$data);
			}
		}
		echo json_encode($email_to_arr);die;
		
	}
}