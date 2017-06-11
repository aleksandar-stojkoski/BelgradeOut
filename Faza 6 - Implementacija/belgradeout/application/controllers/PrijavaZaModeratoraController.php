<?php
/**
 * Description of PrijavaZaModeratoraModel
 *
 * @author Strahinja Milovanovic 14/0463
 */
class PrijavaZaModeratoraController extends CI_Controller{
    
    public function index(){
        $data['greska']='';
        
        $this->load->view('templates/header');
        $this->load->view('prijava_za_moderatora', $data);
        $this->load->view('templates/footer');
    }
    
    public function PrijaviSeZaModeratora() {
        $this->load->model('PrijavaZaModeratoraModel');
        $this->load->library(array('session'));
        $id= $this->session->id;
        $passRow= $this->PrijavaZaModeratoraModel->getPass($id);
        $realPass= $passRow->Lozinka;
        
        $pass=$this->input->post('pass');
        $confpass = $this->input->post("confpass");

        if(($pass == $confpass) && ($pass == $realPass)){
            $DatumRodjenja = $this->input->post('datumRodjenja');
            $JMBG =  $this->input->post('jmbg');
            $Adresa =  $this->input->post('adresa');
            $KontaktTelefon =  $this->input->post('telefon');
            $Pol =  $this->input->post('pol');
            $CV = $this->input->post('cv');
            $MotivacionoPismo = $this->input->post('pismo');
            
            $this->PrijavaZaModeratoraModel->unesiUBazu($DatumRodjenja, $JMBG, $Adresa, $KontaktTelefon, $Pol, $CV, $MotivacionoPismo, $id);
            redirect('MojProfilRegistrovaniKorisnikController');
        }
        else {           
            $data['greska']= "Lozinka je pogresno uneta!";
            $this->load->view('templates/header');
            $this->load->view('prijava_za_moderatora', $data);
            $this->load->view('templates/footer');
        }
    }
}