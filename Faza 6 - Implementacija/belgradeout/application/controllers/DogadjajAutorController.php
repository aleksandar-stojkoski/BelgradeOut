<?php
// izrada koda: Milica Tanasković 0360/2014

class DogadjajAutorController extends CI_Controller{
    public function index($id){
      $idDogadjaj =  $this->uri->segment(3);
      $this->load->model('DogadjajAutorModel');
        $data=$this->DogadjajAutorModel->dohvatiPodatkeODogadjaju($idDogadjaj);
         $data['idDogadjaj'] = $idDogadjaj;
        $this->load->view('templates/header');
        $this->load->view('dogadjaj_autor', $data);
        $this->load->view('templates/footer');
    }
    
    
    
    public function ObrisiDogadjaj($id){
        
        $idDogadjaj = $id;
        $idAutor =  $this->session->userdata('id');
         $this->load->model('DogadjajAutorModel');
        $res=$this->DogadjajAutorModel->ObrisiDogadjaj($idDogadjaj, $idAutor);
        
        if($res == 1){ //korisnik ne moze da obrise dogadjaj
            redirect('IndexController');
        } else redirect('MojProfilAutorController'); //korisnik je obrisao dogadjaj
    }
    
     public function IzmeniDogadjaj(){
        
     
      //  echo "$idDogadjaj";
           $config['upload_path']    = './img/';
                $config['allowed_types']  = 'gif|jpg|png';
                $config['max_size']       = 10000;
                $config['max_width']      = 2000;
                $config['max_height']     = 2000;

                $this->load->library('upload', $config);

                $this->upload->do_upload('slika');
        $idAutor =  $this->session->userdata('id');
         $idDogadjaj =  $this->input->post('idD');
         $datum = $this->input->post('datum');
         $trajanje = $this->input->post('trajanje');
         $naziv = $this->input->post('naziv');
         $tip = $this->input->post('tip');
         $zanr = $this->input->post('zanr');
         $izvodjac = $this->input->post('izvodjac');
         $opis = $this->input->post('opis');
       //  $slika = $this->input->post('slika');
         
          $slika=$this->upload->data();
         $this->load->model('DogadjajAutorModel');
         $res=$this->DogadjajAutorModel->IzmeniDogadjaj($idDogadjaj, $idAutor, $datum, $trajanje, $naziv, $tip, $zanr, $izvodjac, $opis, $slika);
     
       if($res == 1) //korisnik ne moze da izmeni dogadjaj
            redirect('IndexController');
         else redirect('MojProfilAutorController'); //korisnik je izmenio dogadjaj
    }
    
}