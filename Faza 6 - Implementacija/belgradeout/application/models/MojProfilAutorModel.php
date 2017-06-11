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
        
         $this->db->flush_cache();
        
        $this->db->start_cache();
        $this->db->where('idAutor',$id);
        $this->db->limit(1);
        
        $query=$this->db->get('Autor');
        
         if ($query->num_rows()==1){ 
           
            $row=$query->row();
            
           $array['telefon'] = $row->Telefon;
         
            $this->db->flush_cache();
        }
        
         $this->db->flush_cache();
         
        $this->db->start_cache();
        $this->db->where('idAutor',$id);
        $this->db->limit(1);
         $query=$this->db->get('Objekat');
            $this->db->flush_cache();
         if ($query->num_rows()==1){ 
           
           $row=$query->row();
           $array['idObjekta'] = $row->IdObjekta;
           $array['Naziv'] = $row->Naziv;
           $array[ 'Adresa'] = $row->Adresa;
           $array[ 'TipObjekta'] = $row->TipObjekta;
           $array['kapacitet'] = $row->Kapacitet;
           $array['radnoVreme'] = $row->radnoVreme;
           $array['Slika'] = $row->Slika;
           $array['opis'] = $row->opis;
          
           $this->db->flush_cache();
        }
        $this->db->flush_cache(); 
        
        $this->db->start_cache();
        $this->db->where('ocena.idObjekta',$array['idObjekta']);
        $this->db->limit(1);
         $query=$this->db->get('ocena');
         if($query->num_rows()== 1){
         $row=$query->row();
         $ukupno = $row->Ocena;
         $br = $row->BrGlasova;
         $array['ocena'] = $ukupno/$br; 
         
         } else $array['ocena'] = 0;
         
        return $array;
        
    }
    
    
    
    
    public function dohvatiPodatkeDogadjaj($id){
            $res = array();
            
            $this->load->database();
            $this->db->flush_cache();
         $this->db->start_cache();
         $this->db->where('objekat.IdAutor',$id);
         $query=$this->db->get('objekat');
         $this->db->flush_cache();
           if($query->num_rows()>0){
          $row=$query->row();
          $idObjekta = $row->IdObjekta;
           $this->db->flush_cache();
            $this->db->start_cache();
           $this->db->where('dogadjaj.IdObjekta',$idObjekta);
        $query1= $this->db->get('dogadjaj');
         
          
        $res= array();
        $i=0;
        foreach ($query1->result() as $row){
           $res[$i]=$row; 
             $i++;
           }  }
       return $res;
       
    }
    
    
    public function statusDogadjaja($idDogadjaj){
          $this->load->database();
           $this->db->start_cache();
         $this->db->where('idDogadjaj',$idDogadjaj);
         $query=$this->db->get('zahtevzadogadjaj'); //da li se nalazi medju zahtevima
                  if ($query->num_rows()==1)  //nije jos odobren status = 'pending';
                        $status = 0;
                  else $status = 1; //ako nije u zahtevima sigurno je odobren
                       $this->db->flush_cache();
               return $status;
        
    }
    
    
    public function dohvatiKomentareZaProfilAutora($idAutor){
         $podaci = array();
            
            $this->load->database();
            
         $this->db->start_cache();
         $this->db->where('idAutor',$idAutor);
         $query=$this->db->get('objekat');
          $row=$query->row();
          $idObjekta = $row->IdObjekta;
           $this->db->flush_cache();
           
             $this->db->where('idObjekta',$idObjekta);
            $query1= $this->db->get('komentar');
             $this->db->flush_cache();
          
        $res= array();
        $i=0;
        foreach ($query1->result() as $row){
           $res[$i]=$row;  
             $i++;
       }
       return $res;
    }
    
    public function usernameKomentara($idKorisnika){
        
            $this->load->database();
            
            $this->db->start_cache();
            $this->db->where('idKorisnika',$idKorisnika);
            $query=$this->db->get('korisnik');
            $row=$query->row();
            $username = $row->UserName;
            $this->db->flush_cache();
            return $username;
    }
    

 }