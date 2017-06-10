<?php

class KorisnikAdminModel extends CI_Model{
    
    public function obrisi_korisnika($idKorisnika){
      $this->load->database();
      
      $this->db->flush_cache();
      $this->db->start_cache(); 
      //mora da se obrise i iz tabele registrovani korisnik ili moderator ili autor
      $this->db->where('IdKorisnika',$idKorisnika);
      $query=$this->db->get('korisnik');
      if ($query->num_rows()==1){ 
      //ako ima uopste korinika sa tim id-em
          $this->load->model('AdminModel');
          $tip=$this->AdminModel->tip_korisnika($idKorisnika);
          if($tip == 1){
            redirect('AdminController');
          }
          else if($tip == 2){
            $this->db->where('IdModeratora', $idKorisnika);   
            $this->db->delete('moderator');
          }
          else if($tip == 3){
            $this->db->where('IdAutor', $idKorisnika);   
            $this->db->delete('autor');
          }
          else if($tip == 4){
            $this->db->where('IdKorisnika', $idKorisnika);   
            $this->db->delete('regkorisnik');
          }
          //brisemo iz tabele korisnika svakako
          $this->db->where('IdKorisnika', $idKorisnika);   
          $this->db->delete('korisnik');
      }
    }
}