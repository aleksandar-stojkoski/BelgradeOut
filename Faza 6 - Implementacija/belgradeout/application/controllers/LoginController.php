<?php

class LoginController extends CI_Controller{

	public function __construct() {
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library(array('session','form_validation','email'));
        $this->load->database();
    }

    private $tipkorisnika=0;
    private $korisnickoime="";
    private $lozinka="";
    private $idkorisnika=0;

    public function index() {
    	// $data['podaci']='';	//podaci koji se salju pocetnom view-u ako treba
        //prototip: set_rules('ime_iz_forme','ime_za_ispis','pravila')
        
        $this->form_validation->set_rules('username','KorisnickoIme','trim|required');
        $this->form_validation->set_rules('pass','Lozinka','trim|required'); 
        $this->form_validation->set_rules('pass','Lozinka','callback_login_provera');

        $this->load->view('templates/header');
        //odmah ucitam header jer je on isti za sve view-ove
        if ($this->form_validation->run()==FALSE){
            //neuspesno prijavljivanje
            $this->load->view('index');        
        }
        else{
            //uspesno prijavljivanje - zapocinjem sesiju
            $this->session->set_userdata('username', $this->korisnickoime);
            $this->session->set_userdata('id',$this->idkorisnika);
            $this->session->set_userdata('tip',$this->tipkorisnika);

            if ($this->tipkorisnika==1){
                $this->load->view('admin');    
            }
            else if($this->tipkorisnika==2){
                 $this->load->view('moderator');
            }
            else if($this->tipkorisnika==3){
                 $this->load->view('index_autor');
            }
            else{
                 $this->load->view('index_registrovani_korisnik');
            }
        }
        //na kraju se u svakom slucaju ucita footer jer je i on isti za sve view-ove
        $this->load->view('templates/footer');
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