<?php
// izrada koda: Milica Tanasković 0360/2014

class KreiranjeDogadjajaModel extends CI_Model{
    
    public function UbaciDogadjajUBazu($idAutor, $naziv, $tip, $zanr, $nazivIzvodjaca, $datum, $trajanje, $slika){
        
        
        $this->load->database();
        
         $path=$slika['full_path']; //apsolutna putanja slike        
         $slika = file_get_contents($path);  //vadi binarni sadrzaj slike ali nesto nece, ucita samo 1B u bazu
         unlink($path); 
         
       $this->db->start_cache();
        $this->db->where('IdAutor',$idAutor);
        $query=$this->db->get('objekat'); //nisu potrebne nikakve dalje provere jer cim sigurno postoji objekat ciji je vlasnik autor
        $row=$query->row();
        $idObjekta=$row->IdObjekta;
       $this->db->flush_cache();
        
         $data = array(
                 'IdObjekta' => $idObjekta,
                 'Datum' => $datum,
                 'Naziv' => $naziv,
                 'tipDogadjaja' => $tip,
                 'Muzicki_zanr' => $zanr,
                 'trajanje' => $trajanje,
                 'Slika' => $slika,
                 'NazivIzvodjaca' => $nazivIzvodjaca
                );
            
            
            $this->db->insert('dogadjaj', $data);
            
            $idDogadjaj=$this->db->insert_id();
            $data2 = array(
                'IdDogadjaj' =>$idDogadjaj,
                'IdAutor' => $idAutor
            );
               $this->db->insert('zahtevzadogadjaj', $data2);
                    
               return true;
        
        
    }
    
    
}