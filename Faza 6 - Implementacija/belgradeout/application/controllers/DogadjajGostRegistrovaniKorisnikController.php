<?php
/**
 * Description of PrijavaZaModeratoraModel
 *
 * @author Strahinja Milovanovic 14/0463
 */
class DogadjajGostRegistrovaniKorisnikController extends CI_Controller{
    public function index(){
        $idDogadjaj =  $this->uri->segment(3);
        
        $this->load->database();
        $this->load->model('DogadjajGostRegistrovaniKorisnikModel');
        
        $res = $this->DogadjajGostRegistrovaniKorisnikModel->DohvatiDogadjajIzBaze($idDogadjaj);
        
        $data= $res;
        $idObjekta= $res['Objekat'];
        
        $res= $this->DogadjajGostRegistrovaniKorisnikModel->DohvatiObjekatIzBaze($idObjekta);
        $data['NazivObjekta']= $res->Naziv;        
        
        $this->load->view('templates/header');
        $this->load->view('dogadjaj_gost_registrovani_korisnik', $data);
        $this->load->view('templates/footer');
    }
}