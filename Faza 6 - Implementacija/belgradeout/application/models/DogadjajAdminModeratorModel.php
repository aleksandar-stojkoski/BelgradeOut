<?php

class DogadjajAdminModeratorModel extends CI_Model{
    
    public function obrisi_dogadjaj($idDogadjaja){
      $this->load->database();
      
      $this->db->flush_cache();
      $this->db->start_cache(); 
      //mora da se obrise i iz tabele zahteva za dogadjaj ili odobreni dogadjaji
      $this->db->where('IdDogadjaj',$idDogadjaja);
      $query=$this->db->get('zahtevzadogadjaj');
      if ($query->num_rows()==1){  
          //brisemo iz tabele zahtevi za dogadjaj
          $this->db->where('idDogadjaj', $idDogadjaja);   
          $this->db->delete('zahtevzadogadjaj');
      } 
      else { //brisemo iz tabele odobreni dogadjaji   
          $this->db->where('IdDogadjaj', $idDogadjaja);   
          $this->db->delete('odobrenjedogadjaja');
      }
      //brisemo iz tabele dogadjaji jer
      $this->db->where('IdDogadjaj', $idDogadjaja);   
      $this->db->delete('dogadjaj');
    }
}