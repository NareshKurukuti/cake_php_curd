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
class AppController extends Controller {

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize() {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authorize' => 'Controller',
            'authenticate' => [
                'Form' => [
                    // fields used in login form
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ],
                    'userModel' => 'Providers',
                ]
            ],
            // login Url
            'loginAction' => [
                'controller' => 'Providers',
                'action' => 'login'
            ],
            // where to be redirected after logout  
            'logoutRedirect' => [
                'controller' => 'Providers',
                'action' => 'login'//,
            //'home'
            ],
                // if unauthorized user go to an unallowed action he will be redirected to this url
                /* 'unauthorizedRedirect' => [
                  'controller' => 'Providers',
                  'action' => 'login'
                  ], */
//            'authError' => 'Did you really think you are allowed to see that?',
        ]);
//		// Allow the display action so our pages controller still works and  user can visit index and view actions.
        $this->Auth->allow(['login', 'registration', 'forgotPassword']);
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Http\Response|null|void
     */
    public function beforeRender(Event $event) {
        // Note: These defaults are just to get started quickly with development
        // and should not be used in production. You should instead set "_serialize"
        // in each action as required.
        if (!array_key_exists('_serialize', $this->viewVars) &&
                in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }

    public function isAuthorized($provider) {
//		$this->Flash->error('You aren\'t allowed');
//		return false;
        // Any registered user can access public functions
        if (!$this->request->getParam('prefix')) {
            return true;
        }

        // Only admins can access admin functions
        if ($this->request->getParam('prefix') === 'admin') {
            return (bool) ($provider['role'] === 'admin');
        }

        // Default deny
        return false;
    }

    public function beforeFilter(Event $event) {
        if (strpos($this->request->here, 'provider') == true) {
            if ($this->request->session()->read('Auth.User')) {
                $this->viewBuilder()->layout('provider_layout');
            } else {
                $this->viewBuilder()->layout('default');
            }
        } else if (strpos($this->request->here, 'examples') == true) {
            if ($this->request->session()->read('Auth.User')) {
                $this->viewBuilder()->layout('provider_layout');
            } else {
                $this->viewBuilder()->layout('default');
            }
        }
    }

}