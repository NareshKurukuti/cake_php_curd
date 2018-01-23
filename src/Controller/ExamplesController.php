<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Mailer\Email;

class ExamplesController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadComponent('Flash'); // Include the FlashComponent
        // Auth component allow visitors to access add action to register  and access logout action 
//        $this->Auth->allow(['logout']);
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
    
    public function totalleaves() {
        
    }
}