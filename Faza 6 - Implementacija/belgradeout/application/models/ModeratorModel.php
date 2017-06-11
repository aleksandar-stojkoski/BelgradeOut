<?php
// @author Aleksandar Stojkoski 14/0266

class ModeratorModel extends CI_Model{
    
    public function dohvati_zahteve_za_dog(){
        $this->load->database();

        $this->db->flush_cache();
        $this->db->start_cache();   
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

    public function dohvati_dogadjaje(){
        $this->load->database();

        $this->db->flush_cache();
        $this->db->start_cache();
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
        $this->db->where('zahtevzadogadjaj.idDogadjaj',$id_dogadjaja);
        $query=$this->db->get('zahtevzadogadjaj'); 
        if ($query->num_rows()==1) 
            $status = 0; //nije odobren
        else 
            $status = 1; //odobren
        $this->db->flush_cache();
        return $status;
    }
   
    public function prihvati_zahtev_za_dogadjaj($idDogadjaj){
        $this->load->database();

        $this->db->start_cache();
        $this->db->where('IdDogadjaj',$idDogadjaj); 
        $query=$this->db->get('zahtevzadogadjaj');
        
        $this->db->flush_cache();
        $this->db->start_cache();
        $row=$query->row();
        $idAutor = $row->IdAutor;
        $this->db->where('IdDogadjaj',$idDogadjaj);
        $this->db->delete('zahtevzadogadjaj');
        $data = array(
            'IdDogadjaj' => $idDogadjaj,
            'IdAutor' => $idAutor     
        );
                
        $this->db->insert('odobrenjedogadjaja', $data);
    }
    
    public function odbij_zahtev_za_dogadjaj($idDogadjaj){
        $this->load->database();

        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->where('IdDogadjaj',$idDogadjaj); 
        $this->db->delete('zahtevzadogadjaj');

        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->where('IdDogadjaj',$idDogadjaj);
        $this->db->delete('dogadjaj');
        
    }

    public function dohvati_podatke($id){
        $this->load->database();

        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->where('idKorisnika',$id);
        $query=$this->db->get('korisnik');
        $row=$query->row();

        $podaci=array();

        $podaci['imeprezime'] = $row->ImePrezime;
        $podaci['email'] = $row->email;
        $podaci['username'] = $row->UserName;
        $podaci['lozinka'] = $row->Lozinka;
        $podaci['slika'] = $row->Slika;
        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->where('idModeratora',$id);
        $query=$this->db->get('moderator');
        $row=$query->row();

        $podaci['jmbg'] = $row->JMBG;
        $podaci['adresa'] = $row->Adresa;
        $podaci['telefon'] = $row->Telefon;
        $podaci['pol'] = $row->Pol;
        $podaci['cv'] = $row->CV;
        $podaci['motpismo'] = $row->MotPismo;

        return $podaci;
    }
}

?>