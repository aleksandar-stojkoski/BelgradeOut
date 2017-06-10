<?php

class AdminController extends CI_Controller{
    
	public function __construct() {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->database();
    }

    public function index(){

    	$this->load->model('AdminModel');

        $zahtevidog=$this->AdminModel->dohvati_zahteve_za_dog();
        $data['zahtevidog']=$zahtevidog;	//svi zahtevi za dogadjaje
        $data['brojzahtevadog']=count($zahtevidog);	//broj zahteva za dogadjaje

        $zahtevimod=$this->AdminModel->dohvati_zahteve_za_mod();
        $data['zahtevimod']=$zahtevimod;	//svi zahtevi za moderatore
        $data['brojzahtevamod']=count($zahtevimod);	//broj zahteva za moderatore

        
        $korisnici=$this->AdminModel->dohvati_korisnike();
        $data['korisnici']=$korisnici;	//svi korisnici
        $data['brojkorisnika']=count($korisnici);	//broj korisnika


        $dogadjaji=$this->AdminModel->dohvati_dogadjaje();
        $data['dogadjaji']=$dogadjaji;	//svi odobreni dogadjaji
        $data['brojdogadjaja']=count($dogadjaji);	//broj odobrenih dogadjaja


        $this->load->view('templates/header');
        $this->load->view('admin',$data);
        $this->load->view('templates/footer');
    }


}