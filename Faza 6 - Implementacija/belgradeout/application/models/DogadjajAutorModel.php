<?php

class DogadjajAutorModel extends CI_Model{
    
        public function ObrisiDogadjaj($idDogadjaj, $idAutor){
            $this->load->database();
            
            
             $this->db->start_cache();    // dohvatamo idObjekta za autora koji zeli da izbrise dogadjaj da bismo mogli da utvrdimo da li je on taj koji je kreirao dogadjaj
             $this->db->where('IdAutor',$idAutor);
             $query=$this->db->get('objekat');
             $row=$query->row();
             $idObjekta = $row->IdObjekta;
             $this->db->flush_cache();
             
             
             
             $this->db->start_cache();    // proveravamo da li je autor kreirao dogadjaj ako je numOfRows == 1 jeste 
             $this->db->where('IdObjekta',$idObjekta);
             $this->db->where('IdDogadjaj',$idDogadjaj);
             $query=$this->db->get('dogadjaj');
              if ($query->num_rows()==1){ 
                 $this->db->flush_cache();
                                     // kada brisemo dogadjaj moramo da ga obrisemo i iz zahtevazadogadjaj ili iz odobrenihdogadjaja
                 
               //  $this->db->start_cache();
                 $this->db->where('IdDogadjaj',$idDogadjaj);
                 $query=$this->db->get('ZahtevZaDogadjaj');
                      if ($query->num_rows()==1){  //brisemo iz zahteva
                           $this->db->where('idDogadjaj', $idDogadjaj);   
                           $this->db->delete('zahtevzadogadjaj');
                          
                          
                      } else{               //brisemo iz odobrenih
                          
                            $this->db->where('idDogadjaj', $idDogadjaj);   
                           $this->db->delete('OdobrenjeDogadjaja');
        
                      }   // svakako brisemo i iz tabele dogadjaji
                        
                       $this->db->where('idDogadjaj', $idDogadjaj);   
                       $this->db->delete('Dogadjaj');
                      return 0;
              }else { //autor ne moze da izbrise dogadjaj
                  return 1;
              }
             
             
        
        }
    }