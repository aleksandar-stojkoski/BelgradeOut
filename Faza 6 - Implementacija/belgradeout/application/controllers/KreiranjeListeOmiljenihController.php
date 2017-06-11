<?php
/**
 * Description of KreiranjeListeOmiljenihModel
 *
 * @author Strahinja Milovanovic 14/0463
 */
class KreiranjeListeOmiljenihController extends CI_Controller{
    public function index(){
        $this->load->library(array('session'));
        $this->load->database();
        $this->load->model('KreiranjeListeOmiljenihModel');
        $naziv= $this->uri->segment(3);
        
        $id= $this->session->id;
        $rez= $this->KreiranjeListeOmiljenihModel->DohvatiListeIzBaze($id);
        
        $data['liste']= $rez;
        $data['naziv']= $naziv;
        
        $this->load->view('templates/header');
        $this->load->view('kreiranje_liste_omiljenih', $data);
        $this->load->view('templates/footer');
    }
    
    public function Posalji(){
        $this->load->model('KreiranjeListeOmiljenihModel');
        $this->load->library(array('session'));
        $id= $this->session->id;

        $TipProstora = $this->input->post('prostor');
        $TipDogadjaja =  $this->input->post('dogadjaj');
        $Zanr =  $this->input->post('zanr');
        $trenutnaAdresa =  $this->input->post('Adresa');
        $maxUdaljenost =  $this->input->post('Udaljenost');
        $prosecnaOcena = $this->input->post('Ocena');
        $naziv = $this->input->post('Naziv');    
        $Staro = $this->input->post('Staro');
        
        $this->KreiranjeListeOmiljenihModel->unesiUBazu($TipProstora, $TipDogadjaja, $Zanr, $trenutnaAdresa, $maxUdaljenost, $prosecnaOcena, $naziv, $id, $Staro);
        redirect('MojProfilRegistrovaniKorisnikController');

    }
}