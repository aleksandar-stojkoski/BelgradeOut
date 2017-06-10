<?php

class DogadjajAutorController extends CI_Controller{
    public function index($id){
      $idDogadjaj =  $this->uri->segment(3);
    
      $data['idDogadjaj'] = $idDogadjaj;
        $this->load->view('templates/header');
        $this->load->view('dogadjaj_autor', $data);
        $this->load->view('templates/footer');
    }
    
    
    
    public function ObrisiDogadjaj($id){
        
        $idDogadjaj = $id;
        $idAutor =  $this->session->userdata('id');
         $this->load->model('DogadjajAutorModel');
        $res=$this->DogadjajAutorModel->ObrisiDogadjaj($idDogadjaj, $idAutor);
        
        if($res == 1){ //korisnik ne moze da obrise dogadjaj
            redirect('IndexController');
        } else redirect('MojProfilAutorController'); //korisnik je obrisao dogadjaj
    }
}