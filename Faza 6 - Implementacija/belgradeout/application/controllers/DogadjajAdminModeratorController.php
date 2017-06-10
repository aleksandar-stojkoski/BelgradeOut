<?php

class DogadjajAdminModeratorController extends CI_Controller{
    public function index($id){
    	$id_dogadjaja=$this->uri->segment(3);
   
    	$this->load->model('DogadjajAutorModel');
    	$data=$this->DogadjajAutorModel->dohvatiPodatkeODogadjaju($id_dogadjaja);
    	$data['iddogadjaja']=$id_dogadjaja;
        
        $this->load->view('templates/header');
        $this->load->view('dogadjaj_admin_moderator',$data);
        $this->load->view('templates/footer');
    }

    public function obrisi_dogadjaj($id){
    	$id_dogadjaja=$id;
    	$this->load->model('DogadjajAdminModeratorModel');

    	$this->DogadjajAdminModeratorModel->obrisi_dogadjaj($id_dogadjaja);
    	redirect('AdminController');
    }
}