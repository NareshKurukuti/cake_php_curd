<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Mailer\Email;

class ProviderUsersController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadComponent('Flash'); // Include the FlashComponent
        // Auth component allow visitors to access add action to register  and access logout action 
//        $this->Auth->allow(['logout']);
    }

    public function index($loginId) {
        if ($this->request->session()->read('Auth.User.id') == $loginId) {
            $this->set('provider_user', $this->ProviderUsers->find('all', array('conditions' => array('provider_id' => $loginId),
                        'order' => array('id' => 'Desc'))));
        } else {
            return $this->Flash->error(__('404 Error'));
        }
    }

    public function add() {
        $provider = $this->ProviderUsers->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['provider_id'] = $this->request->session()->read('Auth.User.id');
            $this->ProviderUsers->patchEntity($provider, $this->request->data);
//            $this->request->data['city'] = implode(',', $this->request->data['city']);
            if ($this->ProviderUsers->save($provider)) {
                $this->Flash->success(__('User has been Added Successfully.'));
                return $this->redirect(['controller' => 'ProviderUsers', 'action' => 'index', $this->request->session()->read('Auth.User.id')]);
            }
            $this->Flash->error(__('Unable to register your account.'));
        }
        $this->set('provider_user', $provider);
    }

    public function edit($id) {
        $provider_user = $this->ProviderUsers->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->request->data['provider_id'] = $this->request->session()->read('Auth.User.id');
            $this->request->data['city'] = implode(',', $this->request->data['city']);
            $this->ProviderUsers->patchEntity($provider_user, $this->request->data);
            if ($this->ProviderUsers->save($provider_user)) {
                $this->Flash->success(__('User data has been updated.'));
                return $this->redirect(['controller' => 'ProviderUsers', 'action' => 'index', $this->request->session()->read('Auth.User.id')]);
            }
            $this->Flash->error(__('Unable to update user.'));
        }
        $this->set('provider_user', $provider_user);
    }

    public function delete($id) {
        $this->request->allowMethod(['put', 'post', 'delete']);
        $provider_user = $this->ProviderUsers->get($id);
        if ($this->ProviderUsers->delete($provider_user)) {
            $this->Flash->success(__('The user has been deleted Successfully'));
            return $this->redirect(['controller' => 'ProviderUsers', 'action' => 'index', $this->request->session()->read('Auth.User.id')]);
        }
    }

    public function usersCount() {
        $totalProviderUsers = sizeof($this->ProviderUsers->find('all', array('conditions' => array('provider_id' => $this->request->session()->read('Auth.User.id')),
                    'order' => array('id' => 'Desc'))));
        return $totalProviderUsers;
    }
    
    public function days() {
        
    }
    public function datesfilter() {
        
    }
    public function fileupload() {
        
    }
    
    public  function mandatory() {
        
    }
    
    public function selectbox() {
        
    }
}