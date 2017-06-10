<?php

class IzmenaDogadjajaController extends CI_Controller{
    public function index($id){
        
          $idDogadjaj =  $this->uri->segment(3);
          $this->load->model('DogadjajAutorModel');
         $data=$this->DogadjajAutorModel->dohvatiPodatkeODogadjaju($idDogadjaj);
         $data['idDogadjaj'] = $idDogadjaj;
         
        $this->load->view('templates/header');
        $this->load->view('izmena_dogadjaja', $data);
        $this->load->view('templates/footer');
    }
}