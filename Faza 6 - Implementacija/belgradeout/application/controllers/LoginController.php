<?php

class LoginController extends CI_Controller{

	public function __construct() {
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library(array('session','form_validation','email'));
        $this->load->database();
        
        $valid_login=$this->session->userdata('valid_login');
        if ($valid_login==1) {
            redirect(IndexController);
        }
        
    }

    private $tipkorisnika=0;
    private $korisnickoime="";
    private $lozinka="";
    private $idkorisnika=0;

    public function index() {
    	$data['skok']=0;	//podaci koji se salju pocetnom view-u ako treba
        //prototip: set_rules('ime_iz_forme','ime_za_ispis','pravila')
        
        $this->form_validation->set_rules('username','KorisnickoIme','trim|required');
        $this->form_validation->set_rules('pass','Lozinka','trim|required'); 
        $this->form_validation->set_rules('pass','Lozinka','callback_login_provera');

        
        //odmah ucitam header jer je on isti za sve view-ove
        if ($this->form_validation->run()==FALSE){
            //neuspesno prijavljivanje
            $this->load->view('templates/header');
            $this->load->view('index');
            $this->load->view('templates/footer');        
        }
        else{
            //uspesno prijavljivanje - zapocinjem sesiju
            $this->session->set_userdata('username', $this->korisnickoime);
            $this->session->set_userdata('id',$this->idkorisnika);
            $this->session->set_userdata('tip',$this->tipkorisnika);
            $this->session->set_userdata('valid_login',1);

            if ($this->tipkorisnika==1){
                redirect('AdminController');    
            }
            else if($this->tipkorisnika==2){
                 redirect('ModeratorController');
            }
            else if($this->tipkorisnika==3){
                 redirect('IndexAutorController');
            }
            else{
                 redirect('IndexRegistrovaniKorisnikController');
            }
        }
        //na kraju se u svakom slucaju ucita footer jer je i on isti za sve view-ove
        
    }  

    public function login_provera() {
    	$this->korisnickoime=$this->input->post('username');
        $this->lozinka=$this->input->post('pass');
        $this->load->model('LoginModel');

        $rez=$this->LoginModel->provera_baze($this->korisnickoime, $this->lozinka);

        if ($rez['tip']==1 || $rez['tip']==2 || $rez['tip']==3 || $rez['tip']==4){
            $this->tipkorisnika=$rez['tip'];
            $this->idkorisnika=$rez['id'];
            return true;
        }
        else{
            $this->form_validation->set_message('login_provera','Neispravno korisničko ime ili lozinka, pokušajte ponovo.');
            return false;
        }
        // 1 - administrator
        // 2 - moderator
        // 3 - autor
        // 4 - registrovani korisnik
    }
}