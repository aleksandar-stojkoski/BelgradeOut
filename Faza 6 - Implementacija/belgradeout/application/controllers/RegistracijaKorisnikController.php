<?php
// izrada koda: Milica Tanasković 0360/2014
class RegistracijaKorisnikController extends CI_Controller{
    
    
     public function __construct(){
            parent::__construct();
            $this->load->helper(array('url','form'));
           $this->load->library(array('session','form_validation','email'));
        }
    
    
    public function index(){
        $data['greska']= '';
        $this->load->view('templates/header');
        $this->load->view('registracija_korisnik',$data);
        $this->load->view('templates/footer');
    }
    
    
    public function register() {
            $this->form_validation->set_rules('username','Username','is_unique[korisnik.UserName]');
            
            if ($this->form_validation->run()==false){
                $data['greska'] = "username vec postoji";
                  $this->load->view('templates/header');
                  $this->load->view('registracija_korisnik', $data);
                  $this->load->view('templates/footer');
            } 
            
            else {
                
                     $pass=$this->input->post('pass');
                     $confpass = $this->input->post("confpass");
            
                                  if($pass == $confpass){
                                         $name=$this->input->post('NameSurname');
                                         $username=$this->input->post('username');
                                         $zeliVesti = false;
                                         $email=$this->input->post('email');
                                         $picture= $this->input->post('picture');
                                         //   echo "$name, $username. $pass, $email";
                                         $zeliVesti = $this->input->post('check1');
                                              
                                         $this->load->model('RegistracijaKorisnikModel');
                                         $result =  $this->RegistracijaKorisnikModel->unesiUBazu($name, $picture, $username, $pass, $email, $zeliVesti);
                                          
                                    redirect('IndexController');
                                    
                                  }
                              else {
               
                                 $data['greska'] = "potvrda lozinke nije dobra, pokusajte ponovo";
                                   $this->load->view('templates/header');
                                      $this->load->view('registracija_korisnik', $data);
                                          $this->load->view('templates/footer');
                              
                                  }
           }
       }
    
}