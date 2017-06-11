<?php

/**
 * Description of MojPriofilRegistrovaniKorisnikController
 *
 * @author Strahinja Milovanovic 14/0463
 */

class MojProfilRegistrovaniKorisnikController extends CI_Controller{
    public function index(){
        $this->load->library(array('session'));
        $this->load->database();
        $this->load->model('MojProfilRegistrovaniKorisnikModel');
        
        $id= $this->session->id;
        $rez= $this->MojProfilRegistrovaniKorisnikModel->DohvatiKorisnikaIzBaze($id);
        
        $data['KorisnickoIme'] = $rez['KorisnickoIme'];
        $data['ImePrezime'] = $rez['ImePrezime'];
        $data['EmailAdresa'] = $rez['Email'];
        $data['MailLista'] = $rez['MailLista'];
        $data['Slika'] = $rez['Slika'];
        $data['prijava'] = $rez['Zeli'];
        
        $data['liste']= $this->MojProfilRegistrovaniKorisnikModel->DohvatiListeOmiljenihParametara($id);

        
        $this->load->view('templates/header');
        $this->load->view('moj_profil_registrovani_korisnik', $data);
        $this->load->view('templates/footer');
    }
    
    public function MejlLista(){
        $this->load->model('MojProfilRegistrovaniKorisnikModel');
        
        $this->MojProfilRegistrovaniKorisnikModel->PrijaviSeZaObavestenja();
        redirect('MojProfilRegistrovaniKorisnikController');
        
    }
    
    public function ObrisiListu(){
        $naziv= $this->uri->segment(3);
        
        $this->load->model('MojProfilRegistrovaniKorisnikModel');
        $this->MojProfilRegistrovaniKorisnikModel->ObrisiListuOmiljenihParametara($naziv);
        redirect('MojProfilRegistrovaniKorisnikController');
    }
    
    public function DodajListu(){
        $this->load->model('MojProfilRegistrovaniKorisnikModel');
        $this->MojProfilRegistrovaniKorisnikModel->DodajListuOmiljenihParametara();
        redirect('MojProfilRegistrovaniKorisnikController');
    }
}