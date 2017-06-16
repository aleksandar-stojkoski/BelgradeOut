<?php
// izrada koda: Milica Tanasković 0360/2014

class KreiranjeDogadjajaController extends CI_Controller{
    
    
    
    public function index(){
        
        $this->load->view('templates/header');
        $this->load->view('kreiranje_dogadjaja');
        $this->load->view('templates/footer');
    }
    
    
    public function kreirajDogadjaj(){
             $idAutor =  $this->session->userdata('id');
            // echo "$idAutor";
                $config['upload_path']    = './img/';
                $config['allowed_types']  = 'gif|jpg|png';
                $config['max_size']       = 10000;
                $config['max_width']      = 2000;
                $config['max_height']     = 2000;

                $this->load->library('upload', $config);

                $this->upload->do_upload('slika');
                  
                $naziv=$this->input->post('naziv');
                $tip=$this->input->post('tip');
                $zanr=$this->input->post('zanr');
                $nazivIzvodjaca=$this->input->post('nazivIzvodjaca');
                $datum=$this->input->post('datum');
                $trajanje=$this->input->post('trajanje');
              //  $slika=$this->input->post('slika');
                 $slika=$this->upload->data();
                $this->load->model('KreiranjeDogadjajaModel');
                $result =  $this->KreiranjeDogadjajaModel->UbaciDogadjajUBazu($idAutor, $naziv, $tip, $zanr, $nazivIzvodjaca, $datum, $trajanje, $slika);
                redirect('MojProfilAutorController');
    }
}