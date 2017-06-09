<?php

    class LogoutController extends CI_Controller{
       
        public function __construct() {
            parent::__construct();
            $this->load->library('session');
        }
        
        public function index(){
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('id');
            $this->session->unset_userdata('tip');
            $this->session->unset_userdata('valid_login');
            
            redirect('IndexController');  
        }
        
    }

?>