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
        if ($this->flag==1){
        	redirect('AdminController');
        }
        else if ($this->flag==2){
        	redirect('ModeratorController');
        }
        else if ($this->flag==3){
        	redirect('IndexAutorController');
        }
        else if ($this->flag==4){
        	redirect('IndexRegistrovaniKorisnikController');
        }
        else {
            $this->load->model('IndexModel');
        
            $res = $this->IndexModel->DohvatiDogadjajeIzBaze();
            $data['dogadjaji']= $res;

            $this->load->view('templates/header');
            $this->load->view('index', $data);
            $this->load->view('templates/footer');
        }
        

        // 1 - administrator
        // 2 - moderator
        // 3 - autor
        // 4 - registrovani korisnik
    }
}