<?php

// izrada koda: Milica Tanasković 0360/2014
class RegistracijaKorisnikModel extends CI_Model{
    
        public function unesiUBazu($name, $picture, $username, $pass, $email, $zeliVesti){
            $this->load->database();
            
              $data = array(
                 'ImePrezime' => $name,
                 'email' => $email,
                 'UserName' => $username,
                 'Lozinka' => $pass,
                'Slika' => $picture
                   
                );
            
            
            $this->db->insert('korisnik', $data);
            

            
                  $id=$this->db->insert_id();

            
            $data2 = array(
                'idKorisnika' => $id,
                'ZeliVesti' => $zeliVesti
            );
            
            $this->db->insert('regkorisnik', $data2);
            
                $query1= $this->db->get('korisnik');

                if ($query1->num_rows()==1){
                    return true;
                }
                else 
                    return false;
            }
        
}