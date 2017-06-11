<?php

class AdminModel extends CI_Model{
    
    public function dohvati_zahteve_za_dog(){
        $this->load->database();
        $mylists=$this->db->get('zahtevzadogadjaj');
        $data=array();
        $i=0;
        
        if ($mylists->num_rows()>0){
            foreach ($mylists->result() as $a){
                $data[$i]=$a;
                $i++;
            }
        }
        return $data;
    }

    public function dohvati_zahteve_za_mod(){
        $this->load->database();
        $mylists=$this->db->get('postanimoderator');
        $data=array();
        $i=0;
        
        if ($mylists->num_rows()>0){
            foreach ($mylists->result() as $a){
                $data[$i]=$a;
                $i++;
            }
        }
        return $data;
    }

    public function dohvati_dogadjaje(){
        $this->load->database();
        $mylists=$this->db->get('dogadjaj');
        $data=array();
        $i=0;
        
        if ($mylists->num_rows()>0){
            foreach ($mylists->result() as $a){
                $data[$i]=$a;
                $i++;
            }
        }
        return $data;
    }

    public function status_dogadjaja($id_dogadjaja){
        $this->load->database();
        $this->db->start_cache();
        $this->db->where('idDogadjaj',$id_dogadjaja);
        $query=$this->db->get('zahtevzadogadjaj'); 
        if ($query->num_rows()==1) 
            $status = 0; //nije odobren
        else 
            $status = 1; //odobren
        $this->db->flush_cache();
        return $status;
    }

    public function dohvati_korisnike(){
        $this->load->database();
        $mylists=$this->db->get('korisnik');
        $data=array();
        $i=0;
        
        if ($mylists->num_rows()>0){
            foreach ($mylists->result() as $a){
                $data[$i]=$a;
                $i++;
            }
        }
        return $data;
    }

    public function tip_korisnika($id_korisnika){
        $this->load->database();
        
        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->where('IdAdmin',$id_korisnika);
        $query=$this->db->get('admin');
        if ($query->num_rows()==1){
            $tip=1;
            return $tip; 
            //1 znaci da je tip korisnika administrator
        }
        $this->db->flush_cache();

        $this->db->start_cache();
        $this->db->where('IdModeratora',$id_korisnika);
        $query=$this->db->get('moderator');
        if ($query->num_rows()==1){
            $tip=2;
            return $tip;
            //2 znaci da je tip korisnika moderator
        }
        $this->db->flush_cache();

        $this->db->start_cache();
        $this->db->where('IdAutor',$id_korisnika);
        $query=$this->db->get('autor');
        if ($query->num_rows()==1){
            $tip=3;
            return $tip;
            //3 znaci da je tip korisnika autor
        }               
        $this->db->flush_cache();
        
        $this->db->start_cache();
        $this->db->where('IdKorisnika',$id_korisnika);
        $query=$this->db->get('regkorisnik');
        if ($query->num_rows()==1){
            $tip=4;
            return $tip; 
            //4 znaci da je tip korisnika registrovani korisnik
        }
        $this->db->flush_cache();                

        return 0;
    }
        
    public function DohvatiPodatkeIzZahtevaPostaniMod($idkorisnika){
        $data= array();
        $this->db->start_cache();
         $this->load->database();
         $this->db->where('IdKorisnika',$idkorisnika);
         $query=$this->db->get('postanimoderator');
          $row=$query->row();
          $data['idKorisnika'] = $row->IdKorisnika;
          $data['JMBG'] = $row->JMBG;
          $data['adresa'] = $row->Adresa;
          $data['telefon'] = $row->Telefon;  
          $data['pol'] = $row->JMBG;
          $data['CV'] = $row->CV;
          $data['motpismo'] = $row->MotPismo;
          $this->db->flush_cache();   
          return $data;
        
    }
   
}

?>