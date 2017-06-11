<?php
// @author Aleksandar Stojkoski 14/0266

class ModeratorController extends CI_Controller{

	public function __construct() {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->database();
    }

    public function index(){
        $this->load->model('ModeratorModel');
        $id=$this->session->userdata('id');

        $data=$this->ModeratorModel->dohvati_podatke($id);
        //da se dohvate podaci o moderatoru
        
        $zahtevidog=$this->ModeratorModel->dohvati_zahteve_za_dog();
        $data['zahtevidog']=$zahtevidog;	//svi zahtevi za dogadjaje
        $data['brojzahtevadog']=count($zahtevidog);	//broj zahteva za dogadjaje

        $dogadjaji=$this->ModeratorModel->dohvati_dogadjaje();
        $data['dogadjaji']=$dogadjaji;	//svi odobreni dogadjaji
        $data['brojdogadjaja']=count($dogadjaji);	//broj odobrenih dogadjaja



        $this->load->view('templates/header');
        $this->load->view('moderator',$data);
        $this->load->view('templates/footer');
    }
}