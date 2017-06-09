<?php
// izrada koda: Milica Tanasković 0360/2014

class MojProfilAutorModel extends CI_Model{
    
        public function dohvatiPodatke($id){
            $this->load->database();
            
            
             $this->db->start_cache();
        $this->db->where('idKorisnika',$id);
        $this->db->limit(1);
        
        $query=$this->db->get('korisnik');
         $data = array(
                 'ImePrezime' => '',
                 'email' => '',
                 'UserName' => '',
                 'Lozinka' => '',
                  'telefon' => '',
                   'Naziv' =>'' ,
                 'Adresa' => '',
                 'TipObjekta' =>'' ,
                'kapacitet' =>'' ,
                'radnoVreme' =>'' ,
                'Slika' => '',
                'opis' => ''
                );
        
        if ($query->num_rows()==1){ 
           
            $row=$query->row();
            
           $array['ImePrezime'] = $row->ImePrezime;
           $array['email'] = $row->email;
           $array['UserName'] = $row->UserName;
           $array['Lozinka'] = $row->Lozinka;
            $this->db->flush_cache();
        }
        
        
        
        $this->db->start_cache();
        $this->db->where('idAutor',$id);
        $this->db->limit(1);
        
        $query=$this->db->get('Autor');
        
         if ($query->num_rows()==1){ 
           
            $row=$query->row();
            
           $array['telefon'] = $row->Telefon;
         
            $this->db->flush_cache();
        }
        
        
        $this->db->start_cache();
        $this->db->where('idAutor',$id);
        $this->db->limit(1);
         $query=$this->db->get('Objekat');
         if ($query->num_rows()==1){ 
           
            $row=$query->row();
            
           $array['Naziv'] = $row->Naziv;
          $array[ 'Adresa'] = $row->Adresa;
           $array[ 'TipObjekta'] = $row->TipObjekta;
            $array['kapacitet'] = $row->Kapacitet;
             $array['radnoVreme'] = $row->radnoVreme;
              $array['Slika'] = $row->Slika;
               $array['opis'] = $row->opis;
            $this->db->flush_cache();
        }
        
        
        return $array;
    }

}