<?php
/**
 * Description of PrijavaZaModeratoraModel
 *
 * @author Strahinja Milovanovic 14/0463
 */
class ObjekatRegistrovaniKorisnikController extends CI_Controller{
    public function index(){
        $idObjekat =  $this->uri->segment(3);
        $this->load->model('ObjekatRegistrovaniKorisnikModel');
        $this->load->library(array('session'));
        
        $OcenaProvera= $this->uri->segment(4);
        if (($OcenaProvera == 1) || ($OcenaProvera == 2) || ($OcenaProvera == 3) || ($OcenaProvera == 4) || ($OcenaProvera == 5) ){
            $id = $this->session->id;
            
            $this->ObjekatRegistrovaniKorisnikModel->DodajOcenu($OcenaProvera, $idObjekat, $id);
            $red= 'ObjekatRegistrovaniKorisnikController/Index/';
            $red .= $idObjekat;
            $red .= "/";
        
            redirect($red);
        }
        
        
        $this->load->database();
        
        $res = $this->ObjekatRegistrovaniKorisnikModel->DohvatiObjekatIzBaze($idObjekat);
        
        $data= $res;
        
        $res= $this->ObjekatRegistrovaniKorisnikModel->DohvatiProsecnuOcenu($idObjekat);
        $data['Ocena']= $res['Ocena'];
        $data['BrGlasova']= $res['BrGlasova'];
        $data['IdObjekta']= $idObjekat;
        
        $res = $this->ObjekatRegistrovaniKorisnikModel->DohvatiDogadjajeIzBaze($idObjekat);
        $data['dogadjaji']= $res;
        
        $res = $this->ObjekatRegistrovaniKorisnikModel->DohvatiKomentareIzBaze($idObjekat);
        $data['komentari']= $res;
        
        $this->load->view('templates/header');
        $this->load->view('objekat_registrovani_korisnik', $data);
        $this->load->view('templates/footer');
    }
    
    public function DodajKomentar(){
        $this->load->library(array('session'));
        $this->load->model('ObjekatRegistrovaniKorisnikModel');
        $idObjekat =  $this->uri->segment(3);
        
        $Komentar = $this->input->post('komentar');
        $id= $this->session->id;
        
        $this->ObjekatRegistrovaniKorisnikModel->DodajKomentar($Komentar, $id, $idObjekat);
        $red= 'ObjekatRegistrovaniKorisnikController/Index/';
        $red .= $idObjekat;
        $red .= "/";
        
        redirect($red);
    }
    
    public function DodajOcenu(){
        $this->load->library(array('session'));
        $this->load->model('ObjekatRegistrovaniKorisnikModel');
        $idObjekat= $this->uri->segment(3);
        
        $Ocena= $this->input->post('Oceni');
        $id= $this->session->id;
        
        $this->ObjekatRegistrovaniKorisnikModel->DodajOcenu($Ocena, $idObjekat, $id);
        $red= 'ObjekatRegistrovaniKorisnikController/Index/';
        $red .= $idObjekat;
        
        redirect($red);
    }
}