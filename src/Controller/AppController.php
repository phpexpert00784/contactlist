<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function beforeFilter (Event $event){
        $this->Auth->allow(['index', 'view', 'display']);
        $user = $this->Auth->user();
        
        if($user){
            $agent = $this->Agents->findById($user['id'])->first();
            unset($agent->password);
            $agency = $this->Accounts->findById($user['account_id'])->first();
            $this->set('userInfo', $agent);
            $this->set('agencyInfo', $agency);
        }
        
    }
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
       
        $this->loadModel('Accounts');
        $this->loadModel('Agents');
        
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ],
                    'userModel' => 'Agents'
                ]
            ],
            'loginRedirect' => [
                                'controller'=>'Pages',
                                'action'=>'display',
                                'dashboard'],
            'logoutRedirect' => [
                                'controller'=>'Agents',
                                'action'=>'login'],
            'loginAction' => [
                'controller' => 'Agents',
                'action' => 'login'
            ],
             // If unauthorized, return them to page they were just on
            'unauthorizedRedirect' => $this->referer()
        ]);

        // Allow the display action so our PagesController
        // continues to work. Also enable the read only actions.
        $this->Auth->allow(['display', 'password', 'reset', 'logout']);

        \Cloudinary::config(array(
                                  "cloud_name" => "insure-tech",
                                  "api_key" => "241956373175259",
                                  "api_secret" => "nMbQkjijc4YFvmFThRTJ2l3ekXk"));
        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        
    }
    
    public function isAuthorized($user)
    {
        if (in_array($user['role'], ['Admin', 'User'])) { // Don't give any access to "Disabled" user accounts
            return true;
        }
        return false;
    }
}
