<?php
// izrada koda: Milica Tanasković 0360/2014
class RegistracijaAutorModel extends CI_Model{
    
        public function unesiUBazu($name, $picture, $username, $pass, $email, $phone, $nobjekat, $adr, $time, $tip, $kap, $opis){
            $this->load->database();
            //ubacivanje u tabelu korisnik
            
            
           
             
             
             $path=$picture['full_path']; //apsolutna putanja slike        
             $picture = file_get_contents($path);  //vadi binarni sadrzaj slike ali nesto nece, ucita samo 1B u bazu
             unlink($path); 
                
              $data = array(
                 'ImePrezime' => $name,
                 'email' => $email,
                 'UserName' => $username,
                 'Lozinka' => $pass,
                 'Slika' => $picture
                   
                );
            
            
            $this->db->insert('korisnik', $data);
            

            
                  $id=$this->db->insert_id();
                  
          //povezivanje sa tabelom autro  
            $data2 = array(
                'idAutor' => $id,
                'telefon' => $phone
            );
            
            $this->db->insert('autor', $data2);
            
            //ubacivanje u tavelu objekat
            
            
            $data3 = array(
                 'IdAutor' => $id,
                 'Naziv' => $nobjekat,
                 'Adresa' => $adr,
                 'TipObjekta' => $tip,
                'kapacitet' => $kap,
                'radnoVreme' => $time,
                'Slika' => $picture ,
                'opis' => $opis
                   
                );
                    $this->db->insert('Objekat', $data3);
                    
                 
                    
                   
                    
                $query1= $this->db->get('korisnik');

                if ($query1->num_rows()==1){
                    return true;
                }
                else 
                    return false;
            }
        
}