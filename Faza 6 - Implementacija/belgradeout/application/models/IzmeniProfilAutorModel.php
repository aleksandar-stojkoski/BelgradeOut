<?php

// izrada koda: Milica Tanasković 0360/2014

class IzmeniProfilAutorModel extends CI_Model{
    
        public function izmenaProfila($id,$name, $picture, $username, $pass, $email, $phone, $nobjekat, $adr, $time, $tip, $kap, $opis){
            $this->load->database();
            
             $data = array(
                 'ImePrezime' => $name,
                 'email' => $email,
                 'UserName' => $username,
                 'Lozinka' => $pass,
                //'Slika' => $picture
                   
                );
            
            
             
              $this->db->where('idKorisnika', $id);
            $this->db->update('korisnik', $data);
            
                
          
                  
          //povezivanje sa tabelom autor  
            $data2 = array(
               // 'idAutor' => $id,
                'telefon' => $phone
            );
            
             $this->db->where('idAutor', $id);
            $this->db->update('autor', $data2);
            
            //ubacivanje u tavelu objekat
            
            
            $data3 = array(
               //  'IdAutor' => $id,
                 'Naziv' => $nobjekat,
                 'Adresa' => $adr,
                 'TipObjekta' => $tip,
                'kapacitet' => $kap,
                'radnoVreme' => $time,
                'Slika' => $picture,
                'opis' => $opis
                   
                );
                     $this->db->where('idAutor', $id);
                    $this->db->update('Objekat', $data3);
                    
                    
                    
                $query1= $this->db->get('korisnik');

             return true;
        }
            
           
     }
     
       
