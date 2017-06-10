<?php

class DogadjajAutorController extends CI_Controller{
    public function index($id){
      $idDogadjaj =  $this->uri->segment(3);
      $this->load->model('DogadjajAutorModel');
        $data=$this->DogadjajAutorModel->dohvatiPodatkeODogadjaju($idDogadjaj);
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
    
     public function IzmeniDogadjaj(){
        
     
      //  echo "$idDogadjaj";
        
        $idAutor =  $this->session->userdata('id');
         $idDogadjaj =  $this->input->post('idD');
         $datum = $this->input->post('datum');
         $trajanje = $this->input->post('trajanje');
         $naziv = $this->input->post('naziv');
         $tip = $this->input->post('tip');
         $zanr = $this->input->post('zanr');
         $izvodjac = $this->input->post('izvodjac');
         $opis = $this->input->post('opis');
         $slika = $this->input->post('slika');
         
         
         $this->load->model('DogadjajAutorModel');
         $res=$this->DogadjajAutorModel->IzmeniDogadjaj($idDogadjaj, $idAutor, $datum, $trajanje, $naziv, $tip, $zanr, $izvodjac, $opis, $slika);
     
       if($res == 1) //korisnik ne moze da izmeni dogadjaj
            redirect('IndexController');
         else redirect('MojProfilAutorController'); //korisnik je izmenio dogadjaj
    }
    
}