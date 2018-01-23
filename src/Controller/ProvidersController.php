<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Mailer\AbstractTransport;
use Cake\Mailer\MailerAwareTrait;
use Cake\Mailer\Email;
use Cake\Network;
use Cake\Utility\Text;
use Cake\Utility\Security;
use Cake\Routing\Router;

class ProvidersController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadComponent('Flash'); // Include the FlashComponent
        $this->loadComponent('Security');
        // Auth component allow visitors to access add action to register  and access logout action 
//        $this->Auth->allow(['logout']);
    }

    public function index() {
        $this->set('provider', $this->Providers->find('all'));
    }

    public function login() {
        if ($this->request->is('post')) {
            $provider = $this->Auth->identify();
            if ($provider) {
                $this->Auth->setUser($provider);
                return $this->redirect(['controller' => 'Providers', 'action' => 'dashboard']);
            }
            $this->Flash->error(__('Invalid username or password, try again.'));
        }
    }

    public function logout() {
        $this->Flash->success('You successfully have loged out');
        return $this->redirect($this->Auth->logout());
    }

    public function registration() {
        $provider = $this->Providers->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['username'] = $this->request->data['email'];
            $this->Providers->patchEntity($provider, $this->request->data);
            if ($this->Providers->save($provider)) {
//                $email = new Email('default');
//                $email->from(['k.naresh226@gmail.com' => 'Provider'])
//                    ->to('k.naresh226@gmail.com')
//                    ->subject('Registration')
//                    ->send('Hi Naresh Your Registered Succesfully');
                $this->Flash->success(__('Your account has been registered please check your email.'));
                return $this->redirect(['controller' => 'Providers', 'action' => 'login']);
            }
            $this->Flash->error(__('Unable to register your account.'));
        }
        $this->set('provider', $provider);
    }

    public function editProfile($id) {

        $provider = $this->Providers->get($id);
//        echo "<pre>";
//            print_r($this->request->data);
//            exit;

        if ($this->request->is(['post', 'put'])) {

            //print_r($this->request->data); exit; 
            $this->Providers->patchEntity($provider, $this->request->data);
            if ($this->Providers->save($provider)) {
                $this->Flash->success(__('Your profile data has been updated.'));
                return $this->redirect(['controller' => 'Providers', 'action' => 'dashboard']);
            }
            $this->Flash->error(__('Unable to update your profile.'));
        }
        $this->set('provider', $provider);
    }

    public function changePassword($id) {
        $provider = $this->Providers->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Providers->patchEntity($provider, [
                'old_password' => $this->request->data['old_password'],
                'password' => $this->request->data['password1'],
                'password1' => $this->request->data['password1'],
                'password2' => $this->request->data['password2']
                    ], ['validate' => 'password']
            );
            if ($this->Providers->save($provider)) {
                $this->Flash->success(__('Your password has been changed, please login now.'));
                return $this->redirect(['controller' => 'Providers', 'action' => 'logout']);
            }
            $this->Flash->error(__('Unable to change your password.'));
        }
        $this->set('provider', $provider);
    }

    public function forgotPassword() {
        if ($this->request->is('post')) {
            if (!empty($this->request->data)) {
                $email = $this->request->data['email'];
                $provider = $this->Providers->findByEmail($email)->first();
                if (!empty($provider)) {
                    $password = sha1(Text::uuid());
//                    $password = $provider->password;
                    $password_token = Security::hash($password, 'sha256', true);
                    $hashval = sha1($provider->fullname . rand(0, 100));
                    $provider->password_reset_token = $password_token;
                    $provider->hashval = $hashval;
                    $reset_token_link = Router::url(['controller' => 'Providers', 'action' => 'resetPassword'], TRUE) . '/' . $password_token . '#' . $hashval;
                    $emaildata = [$provider->email, $reset_token_link];
                    $this->getMailer('SendEmail')->send('forgotPassword', [$emaildata]);
                    $this->Providers->save($provider);
                    $this->Flash->success('Please click on password reset link, sent in your email address to reset password.');
                } else {
                    $this->Flash->error('Sorry! Email address is not available here.');
                }
            } else {
                $this->Flash->error('Please enter email');
            }
        }
    }

    public function sendEmail($data) {
        $email = new Email('default');
        $email->from('test@gmail.com', 'Users')
                ->to('k.naresh226@gmail.com')
                ->subject(sprintf('Welcome %s', $data->fullname))
                ->template('default', 'default')
                ->set(['data' => $data->fullname]);
    }

    public function resetPassword($token = null) {
        if (!empty($token)) {
            $provider = $this->Providers->findByPasswordResetToken($token)->first();
            if ($provider) {
                if (!empty($this->request->data)) {
                    $provider = $this->Providers->patchEntity($provider, [
                        'password' => $this->request->data['new_password'],
                        'new_password' => $this->request->data['new_password'],
                        'confirm_password' => $this->request->data['confirm_password']
                            ], ['validate' => 'password']
                    );

                    $hashval_new = sha1($provider->fullname . rand(O, 100));
                    $provider->password_reset_token = $hashval_new;

                    if ($this->Providers->save($provider)) {
                        $this->Flash->success('Your password has been changed successfully');
                        $emaildata = ['fullname' => $provider->fullname, 'email' => $provider->email];
                        $this->getMailer('SendEmail')->send('changePasswordEmail', [$emaildata]); //Send Email functionality
                        $this->redirect(['controller' => 'Providers', 'action' => 'login']);
                    } else {
                        $this->Flash->error('Error changing password. Please try again!');
                    }
                }
            } else {
                $this->Flash->error('Sorry your password token has been expired.');
            }
        } else {
            $this->Flash->error('Error loading password reset.');
        }
        $this->set(compact('provider'));
        $this->set('_serialize', ['provider']);
    }

    public function dashboard() {
       
    }

}
