<?php
// izrada koda: Milica Tanasković 0360/2014
class RegistracijaAutorController extends CI_Controller{
    
    
    public function __construct(){
            parent::__construct();
            $this->load->helper(array('url','form'));
           $this->load->library(array('session','form_validation','email'));
        }
    
    public function index(){
          $data['greska']='';
        $this->load->view('templates/header');
        $this->load->view('registracija_autor', $data);
        $this->load->view('templates/footer');
    }





   public function register() {
            $this->form_validation->set_rules('username','Username','is_unique[korisnik.UserName]');
            
            if ($this->form_validation->run()==false){
               $data['greska']= "username vec postoji";
                     $this->load->view('templates/header');
                     $this->load->view('registracija_autor', $data);
                     $this->load->view('templates/footer');
            } 
            
            else {
                
                     $pass=$this->input->post('pass');
                     $confpass = $this->input->post("confpass");
            
                                  if($pass == $confpass){
                                         $name=$this->input->post('name');
                                         $username=$this->input->post('username');
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
                                        
                                         $this->load->model('RegistracijaAutorModel');
                                         $result =  $this->RegistracijaAutorModel->unesiUBazu($name, $picture, $username, $pass, $email, $phone, $nobjekat, $adr, $time, $tip, $kap, $opis);
                                             if($result == true)
                                        //  $this->load->view('index');
                                                     redirect('IndexController');
                                      }
                              else {
               
                                 $data['greska']= "potvrda lozinke nije dobra, pokusajte ponovo";
                                       $this->load->view('templates/header');
                                       $this->load->view('registracija_autor', $data);
                                       $this->load->view('templates/footer');
                                  }
           }
       }
      
}