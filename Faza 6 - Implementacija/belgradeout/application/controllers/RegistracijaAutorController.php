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
                     //<!-- SLIKA UPLOAD -->
                
                $config['upload_path']    = './img/';
                $config['allowed_types']  = 'gif|jpg|png';
                $config['max_size']       = 10000;
                $config['max_width']      = 2000;
                $config['max_height']     = 2000;

                $this->load->library('upload', $config);

                $this->upload->do_upload('picture');
                  
          
                  //<!-- SLIKA UPLOAD END -->
                
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
                                        //$picture= $this->input->post('picture');

                                        $picture=$this->upload->data();

                                         //   echo "$name, $username. $pass, $email";
                                        
               /*     if ($_FILES['picture']['size'] > 0) {   //ovako bi trebalo da se uploaduje slika
                    $config['upload_path'] = './img/';
                 //   $config['allowed_types'] = 'gif|jpg|png';
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('picture')) {
                       $data['greska']= "slika nije dobro ";
                       $this->load->view('templates/header');
                       $this->load->view('registracija_autor', $data);
                       $this->load->view('templates/footer');
                      
                   } else {
                        $picture = $this->upload->data();
                    }
                }  */

                $this->load->model('RegistracijaAutorModel');
                                         $result =  $this->RegistracijaAutorModel->unesiUBazu($name, $picture, $username, $pass, $email, $phone, $nobjekat, $adr, $time, $tip, $kap, $opis);
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