<?php
/**
 * Description of PrijavaZaModeratoraModel
 *
 * @author Strahinja Milovanovic 14/0463
 */
class IndexRegistrovaniKorisnikController extends CI_Controller{
    public function index(){
        $this->load->library(array('session'));
        $this->load->database();
        $this->load->model('IndexRegistrovaniKorisnikModel');
        
        $res = $this->IndexRegistrovaniKorisnikModel->DohvatiDogadjajeIzBaze();
        $data['dogadjaji']= $res;
        
        $this->load->view('templates/header');
        $this->load->view('index_registrovani_korisnik', $data);
        $this->load->view('templates/footer');
    }
    
    public function Search(){
        $this->load->model('IndexRegistrovaniKorisnikModel');
        $this->load->library(array('session'));
        $id= $this->session->id;

        $TipProstora = $this->input->post('prostor');
        $TipDogadjaja =  $this->input->post('tip');
        $Zanr =  $this->input->post('zanr');
        $trenutnaAdresa =  $this->input->post('Adresa');
        $maxUdaljenost =  $this->input->post('Udaljenost');
        $prosecnaOcena = $this->input->post('Ocena');
        
        $rez= $this->IndexRegistrovaniKorisnikModel->DohvatiRezultatePretrage($TipProstora, $TipDogadjaja, $Zanr, $trenutnaAdresa, $maxUdaljenost, $prosecnaOcena);
        $data['dogadjaji']= $rez;
        
        $this->load->view('templates/header');
        $this->load->view('index_registrovani_korisnik',$data);
        $this->load->view('templates/footer');
    }
}