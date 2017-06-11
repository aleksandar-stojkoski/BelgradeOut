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
          $this->db->flush_cache();
          $this->load->model('AdminModel');
          $tip=$this->AdminModel->tip_korisnika($idKorisnika);
          if($tip == 1){
            redirect('AdminController');
          }
          else if($tip == 2){
            $this->db->flush_cache();
            $this->db->start_cache();
            $this->db->where('IdModeratora', $idKorisnika);   
            $this->db->delete('moderator');
          }
          else if($tip == 3){
            $this->db->flush_cache();
            $this->db->start_cache();
            $this->db->where('IdAutor', $idKorisnika);   
            $this->db->delete('autor');
            $this->db->flush_cache();
            $this->db->start_cache();
            $this->db->where('IdAutor', $idKorisnika);   
            $this->db->delete('objekat');
          }
          else if($tip == 4){
            $this->db->flush_cache();
            $this->db->start_cache();
            $this->db->where('IdKorisnika', $idKorisnika);   
            $this->db->delete('regkorisnik');
          }
          //brisemo iz tabele korisnika svakako
          $this->db->flush_cache();
          $this->db->start_cache();
          $this->db->where('IdKorisnika', $idKorisnika);   
          $this->db->delete('korisnik');
      }
    }

    public function dohvati_podatke_o_korisniku($idKorisnika){
      $this->load->database();
      $data = array();

      $this->db->flush_cache();
      $this->db->start_cache();
      $this->db->where('korisnik.idKorisnika',$idKorisnika);
      $query=$this->db->get('korisnik');
      $row=$query->row();

      $array['imeprezime']=$row->ImePrezime;
      $array['email']=$row->email;
      $array['username']=$row->UserName;
      $array['lozinka']=$row->Lozinka;
      // $array['slika']=$row->Slika;

      $this->db->flush_cache();

      $this->load->model('AdminModel');
      $tip=$this->AdminModel->tip_korisnika($idKorisnika);
      $array['tip']=$tip;

      if($tip == 2){
          $this->db->flush_cache();
          $this->db->start_cache();
          $this->db->where('IdModeratora',$idKorisnika);
          $query=$this->db->get('moderator');
          $row=$query->row();

          $array['jmbg']=$row->JMBG;
          $array['adresa']=$row->Adresa;
          $array['telefon']=$row->Telefon;
          $array['pol']=$row->Pol;
          $array['cv']=$row->CV;
          $array['motpismo']=$row->MotPismo;

          $this->db->flush_cache();
      }
      else if($tip == 3){
          $this->db->flush_cache();
          $this->db->start_cache();
          $this->db->where('IdAutor',$idKorisnika);
          $query=$this->db->get('autor');
          $row=$query->row();

          $array['telefon']=$row->Telefon;

          $this->db->flush_cache();
      }
      else if($tip == 4){
          $this->db->flush_cache();
          $this->db->start_cache();
          $this->db->where('regkorisnik.IdKorisnika',$idKorisnika);
          $query=$this->db->get('regkorisnik');
          $row=$query->row();

          $array['zelivesti']=$row->ZeliVesti;

          $this->db->flush_cache();
      }
      
      return $array;

    }
}