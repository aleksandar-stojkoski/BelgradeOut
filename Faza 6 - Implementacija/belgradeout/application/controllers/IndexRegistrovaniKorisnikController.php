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
        
        $id= $this->session->id;
        $TipDogadjaja= $this->input->post('dogadjaj');
        $TipObjekta= $this->input->post('prostor');
        $Zanr= $this->input->post('zanr');
        $Adresa= $this->input->post('Adresa');
        $Udaljenost= $this->input->post('Udaljenost');
        $Ocena= $this->input->post('Ocena');
        $data= array();
        
        if($this->session->FlagPretrage != 1){
        
        if (($TipDogadjaja == null) &&
            ($TipObjekta == null) &&
            ($Zanr == null) &&
            ($Adresa == null) &&
            ($Udaljenost == null) &&
            ($Ocena == null)){
            
            $res = $this->IndexRegistrovaniKorisnikModel->DohvatiDogadjajeIzBaze();
            $data['dogadjaji']= $res;
        } else{
            $res = $this->IndexRegistrovaniKorisnikModel->DohvatiRezultatePretrage($TipObjekta, $TipDogadjaja, $Zanr, $Adresa, $Udaljenost, $Ocena);
            $data['dogadjaji']= $res;
        }
        } else{
            $this->load->model('MojProfilRegistrovaniKorisnikModel');
            $Liste= $this->MojProfilRegistrovaniKorisnikModel->DohvatiListeOmiljenihParametara($id);
            $br= count($Liste);

            for($i = 0; $i < $br; $i++){
                if ($Liste[$i]->NazivListe == $this->session->NazivListePretrage){
                    $TipProstora= $Liste[$i]->TipProstora;
                    $TipDogadjaja= $Liste[$i]->TipDogadjaja;
                    $Zanr= $Liste[$i]->Zanr;
                    $trenutnaAdresa= $Liste[$i]->trenutnaAdresa;
                    $maxUdaljenost= $Liste[$i]->maxUdaljenost;
                    $prosecnaOcena= $Liste[$i]->prosecnaOcena;
                    $rez= $this->IndexRegistrovaniKorisnikModel->DohvatiRezultatePretrage($TipProstora, $TipDogadjaja, $Zanr, $trenutnaAdresa, $maxUdaljenost, $prosecnaOcena);
                    $data['dogadjaji']= $rez;
                    break;
                }
            }
        }
        $newRes= $this->IndexRegistrovaniKorisnikModel->DohvatiListeOmiljenihParametara($id);
        $data['liste']= $newRes;
        $this->session->set_userdata('FlagPretrage',0);
        $this->load->view('templates/header');
        $this->load->view('index_registrovani_korisnik',$data);
        $this->load->view('templates/footer');

    }
    
    public function CustomSearch(){
        $NazivListe= $this->uri->segment(3);
        $this->session->set_userdata('FlagPretrage',1);
        $this->session->set_userdata('NazivListePretrage',$NazivListe);
        redirect('IndexRegistrovaniKorisnikController');
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