<?php
/**
 * Description of PrijavaZaModeratoraModel
 *
 * @author Strahinja Milovanovic 14/0463
 */
class ObjekatRegistrovaniKorisnikController extends CI_Controller{
    public function index(){
        $idObjekat =  $this->uri->segment(3);
        
        $this->load->database();
        $this->load->model('ObjekatRegistrovaniKorisnikModel');
        
        $res = $this->ObjekatRegistrovaniKorisnikModel->DohvatiObjekatIzBaze($idObjekat);
        
        $data= $res;
        
        $res= $this->ObjekatRegistrovaniKorisnikModel->DohvatiProsecnuOcenu($idObjekat);
        $data['Ocena']= $res['Ocena'];
        $data['BrGlasova']= $res['BrGlasova'];
        
        $res = $this->ObjekatRegistrovaniKorisnikModel->DohvatiDogadjajeIzBaze($idObjekat);
        $data['dogadjaji']= $res;
        
        $res = $this->ObjekatRegistrovaniKorisnikModel->DohvatiKomentareIzBaze($idObjekat);
        $data['komentari']= $res;
        
        $this->load->view('templates/header');
        $this->load->view('objekat_registrovani_korisnik', $data);
        $this->load->view('templates/footer');
    }
}