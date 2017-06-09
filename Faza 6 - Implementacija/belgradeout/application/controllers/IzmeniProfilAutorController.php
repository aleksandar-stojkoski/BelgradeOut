<?php
// izrada koda: Milica Tanasković 0360/2014

class IzmeniProfilAutorController extends CI_Controller{
    
      public function __construct() {
        parent::__construct();
          $this->load->helper(array('url','form'));
          $this->load->library(array('session','form_validation','email'));
    }
    
    public function index(){
        
           $id =  $this->session->userdata('id');
        $this->load->model('MojProfilAutorModel');
        $data=$this->MojProfilAutorModel->dohvatiPodatke($id);
        
        $data['greska'] = '';
        $this->load->view('templates/header');
        $this->load->view('izmeni_profil_autor',$data);
        $this->load->view('templates/footer');
    }
    
      public function IzmeniProfillozinka(){  //morala ovako da bih mola da prikazem tekst greske
        
           $id =  $this->session->userdata('id');
        $this->load->model('MojProfilAutorModel');
        $data=$this->MojProfilAutorModel->dohvatiPodatke($id);
        
        $data['greska'] = "potvrda lozinke nije dobra, pokusajte ponovo";
        $this->load->view('templates/header');
        $this->load->view('izmeni_profil_autor',$data);
        $this->load->view('templates/footer');
    }
    
    
      public function IzmeniProfilUserName(){  //isto kao za lozinku
        
           $id =  $this->session->userdata('id');
        $this->load->model('MojProfilAutorModel');
        $data=$this->MojProfilAutorModel->dohvatiPodatke($id);
        
        $data['greska'] = "username vec postoji";
        $this->load->view('templates/header');
        $this->load->view('izmeni_profil_autor',$data);
        $this->load->view('templates/footer');
    }
    
    public function izmenaProfila(){
                       // $data['greska'];
                         $id =  $this->session->userdata('id');
                         $stariUserName = $this->session->userdata('username'); //ukoliko je korisnik promenio username moramo da proverimo a li je novi username slobodan
                         $username=$this->input->post('username');
                      if(strcmp($stariUserName,$username) != 0){                 
                        $this->form_validation->set_rules('username','Username','is_unique[korisnik.UserName]');
                              if ($this->form_validation->run()==false){
                               
                                 redirect('IzmeniProfilAutorController/IzmeniProfilUserName');
                             }  
                        
                        } 
                     $pass=$this->input->post('pass');
                     $confpass = $this->input->post("confpass");
            
                                  if($pass == $confpass){   // da li se potvrda lozinke podudara sa lozinkom
     
                                         $name=$this->input->post('name');
                                         $zeliVesti = false;
                                         $email=$this->input->post('email');
                                         $phone = $this->input->post('phone');
                                         $nobjekat =  $this->input->post('nobjekat');
                                         $adr =  $this->input->post('adr');
                                         $time =  $this->input->post('time');
                                         $tip =  $this->input->post('tip');
                                         $kap =  $this->input->post('kap');
                                        $opis = $this->input->post('opis');
                                         $picture= $this->input->post('picture');
                                         //   echo "$name, $username. $pass, $email";
                                        
                                         $this->load->model('IzmeniProfilAutorModel');
                                         $result =  $this->IzmeniProfilAutorModel->izmenaProfila($id,$name, $picture, $username, $pass, $email, $phone, $nobjekat, $adr, $time, $tip, $kap, $opis);
                                             if($result == true)
                                       
                                                     redirect('MojProfilAutorController');
                                         else{                 // ako je username zauzet
                                          $data['greska'] = "username je zauzet, pokusajte nesto drugo";
                                             $this->load->view('templates/header');
                                             $this->load->view('izmeni_profil_autor', $data);
                                             $this->load->view('templates/footer');
                                      }
                                  }
                              else {                                        // ako se potvrda ne podudara, vracamo gresku
               
                                     redirect('IzmeniProfilAutorController/IzmeniProfillozinka');
                                  }
                      
    
                 }
       
      
        
    
}
