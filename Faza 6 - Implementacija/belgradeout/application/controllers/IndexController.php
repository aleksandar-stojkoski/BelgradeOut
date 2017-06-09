<?php

class IndexController extends CI_Controller{
	private $flag=0;

	public function __construct() {
        parent::__construct();
        $this->load->library(array('session'));
        if($this->session->has_userdata('valid_login')){
	        $valid_login=$this->session->userdata('valid_login');
	        if ($valid_login==""){
	        	$this->flag=0;
	        }
	        else {
	        	$this->flag=$this->session->userdata('tip');
	        }
    	}
    }

    public function index() {
        $this->load->view('templates/header');
        if ($this->flag==1){
        	$this->load->view('admin');
        }
        else if ($this->flag==2){
        	$this->load->view('moderator');
        }
        else if ($this->flag==3){
        	$this->load->view('index_autor');
        }
        else if ($this->flag==4){
        	$this->load->view('index_registrovani_korisnik');
        }
        else {
        	$this->load->view('index');	
        }
        $this->load->view('templates/footer');

        // 1 - administrator
        // 2 - moderator
        // 3 - autor
        // 4 - registrovani korisnik
    }
}