<?php

class ZahtevModeratorController extends CI_Controller{
    
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('zahtev_moderator');
        $this->load->view('templates/footer');
    }

    public function otvori_zahtev_za_dogadjaj($id){
        $idDogadjaj=$this->uri->segment(3);
        
        $this->load->model('DogadjajAutorModel');
        $data=$this->DogadjajAutorModel->dohvatiPodatkeODogadjaju($idDogadjaj);
        $data['iddogadjaja']=$idDogadjaj;
        
        $this->load->view('templates/header');
        $this->load->view('zahtev_moderator', $data);
        $this->load->view('templates/footer');
    }

    public function prihvati_zahtev_za_dogadjaj($id){
        $idDogadjaj=$this->uri->segment(3);
        $this->load->model('ModeratorModel');
        $data=$this->ModeratorModel->prihvati_zahtev_za_dogadjaj($idDogadjaj);
        redirect('IndexController');
        
    }
    
    public function odbij_zahtev_za_dogadjaj($id){
        $idDogadjaj=$this->uri->segment(3);
        $this->load->model('ModeratorModel');
        $data=$this->ModeratorModel->odbij_zahtev_za_dogadjaj($idDogadjaj);
        redirect('IndexController');
    }
}