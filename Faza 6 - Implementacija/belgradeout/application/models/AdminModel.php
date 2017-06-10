<?php

class AdminModel extends CI_Model{
    
    public function dohvati_zahteve_za_dog(){
        $this->load->database();
        $mylists=$this->db->get('zahtevzadogadjaj');
        $data=array();
        $i=0;
        
        if ($mylists->num_rows()>0){
            foreach ($mylists->result() as $a){
                $data[$i]=$a;
                $i++;
            }
        }
        return $data;
    }

    public function dohvati_zahteve_za_mod(){
        $this->load->database();
        $mylists=$this->db->get('postanimoderator');
        $data=array();
        $i=0;
        
        if ($mylists->num_rows()>0){
            foreach ($mylists->result() as $a){
                $data[$i]=$a;
                $i++;
            }
        }
        return $data;
    }

    public function dohvati_dogadjaje(){
        $this->load->database();
        $mylists=$this->db->get('dogadjaj');
        $data=array();
        $i=0;
        
        if ($mylists->num_rows()>0){
            foreach ($mylists->result() as $a){
                $data[$i]=$a;
                $i++;
            }
        }
        return $data;
    }

    public function dohvati_korisnike(){
        $this->load->database();
        $mylists=$this->db->get('korisnik');
        $data=array();
        $i=0;
        
        if ($mylists->num_rows()>0){
            foreach ($mylists->result() as $a){
                $data[$i]=$a;
                $i++;
            }
        }
        return $data;
    }


   
}

?>