<?php

class KorisnikAdminController extends CI_Controller{
    public function index($id){
    	$id_korisnika=$this->uri->segment(3);
   
    	$this->load->model('KorisnikAdminModel');
    	$data=$this->KorisnikAdminModel->dohvati_podatke_o_korisniku($id_korisnika);
    	$data['id_korisnika']=$id_korisnika;

        $this->load->view('templates/header');
        $this->load->view('korisnik_admin', $data);
        $this->load->view('templates/footer');
    }

    public function obrisi_korisnika($id){
    	$id_korisnika=$id;
    	$this->load->model('KorisnikAdminModel');

    	$this->KorisnikAdminModel->obrisi_korisnika($id_korisnika);
    	redirect('AdminController');
    }
}