<?php

class ZahtevAdminController extends CI_Controller{
    public function index(){ 
        $this->load->view('templates/header');
        $this->load->view('zahtev_admin', $data);
        $this->load->view('templates/footer');
    }
    
    
    public function OtvoriZahtevDogadjaj($id){
         $idDogadjaj =  $this->uri->segment(3);
         $this->load->model('DogadjajAutorModel');
        $data=$this->DogadjajAutorModel->dohvatiPodatkeODogadjaju($idDogadjaj);
         $data['idDogadjaj'] = $idDogadjaj;
         $data['tip']=1;
         $this->load->view('templates/header');
        $this->load->view('zahtev_admin', $data);
        $this->load->view('templates/footer');
        
        
    }
    
    
    public function OtvoriZahtevPostaniModerator($id){
        $idKorisnika = $this->uri->segment(3);
        $this->load->model('AdminModel');
        $data=$this->AdminModel->DohvatiPodatkeIzZahtevaPostaniMod($idKorisnika);
        $data['tip'] = 0;
        $this->load->view('templates/header');
        $this->load->view('zahtev_admin', $data);
        $this->load->view('templates/footer');
    }
}