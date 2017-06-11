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
        
        $TipDogadjaja= $this->input->post('tip');
        $TipObjekta= $this->input->post('objekat');
        $Zanr= $this->input->post('zanr');
        $Adresa= $this->input->post('Adresa');
        $Udaljenost= $this->input->post('Udaljenost');
        $Ocena= $this->input->post('Ocena');
        
        
        if (($TipDogadjaja == null) &&
            ($TipObjekta == null) &&
            ($Zanr == null) &&
            ($Adresa == null) &&
            ($Udaljenost == null) &&
            ($Ocena == null)){
            $res = $this->IndexRegistrovaniKorisnikModel->DohvatiDogadjajeIzBaze();
            $data['dogadjaji']= $res;
   
            $this->load->view('templates/header');
            $this->load->view('index_registrovani_korisnik', $data);
            $this->load->view('templates/footer');
        } else{
            $res = $this->IndexRegistrovaniKorisnikModel->DohvatiRezultatePretrage($TipObjekta, $TipDogadjaja, $Zanr, $Adresa, $Udaljenost, $Ocena);
            $data['dogadjaji']= $res;
   
            $this->load->view('templates/header');
            $this->load->view('index_registrovani_korisnik', $data);
            $this->load->view('templates/footer');
        }

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
        $this->load->view('index_registrovani_korisnik_search',$data);
        $this->load->view('templates/footer');
    }
}