<?php
// izrada koda: Milica Tanasković 0360/2014

class MojProfilAutorController extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
        $this->load->library(array('session'));
    }
    
    public function index(){
        
      //  $data['username'] = $this->session->userdata('username');
        $id =  $this->session->userdata('id');
        $this->load->model('MojProfilAutorModel');
        $data=$this->MojProfilAutorModel->dohvatiPodatke($id);
        
        $this->load->model('MojProfilAutorModel');  
        $res=$this->MojProfilAutorModel->dohvatiPodatkeDogadjaj($id);
        $data['br'] = count($res);
        $data['dogadjaji'] = $res;
        
        $this->load->model('MojProfilAutorModel'); 
        $res1 = $this->MojProfilAutorModel->dohvatiKomentareZaProfilAutora($id);
        $data['brKom'] = count($res1);
        $data['komentari'] = $res1;
        $this->load->view('templates/header');
        $this->load->view('moj_profil_autor',$data);
        $this->load->view('templates/footer');
    }
    
    
    /*
    
    function DohvatiPodatke(){
        
        $id =  $this->session->userdata('id');
        $this->load->model('MojProfilAutorModel');
        $rez=$this->MojProfilAutorModel->dohvatiPodatke($id);
       
    }  */
}