<?php
/**
 * Description of MojPriofilRegistrovaniKorisnikModel
 *
 * @author Strahinja Milovanovic 14/0463
 */
class MojProfilRegistrovaniKorisnikModel extends CI_Model{
    public function DohvatiKorisnikaIzBaze($id){
        $this->load->database();
        
        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->where('IdKorisnika',$id);
        
        $query= $this->db->get('korisnik');
        $row= $query->row();
        
        $KorisnickoIme= $row->UserName;
        $ImePrezime= $row->ImePrezime;
        $Email= $row->email;
        $Slika= $row->Slika;
        
        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->where('IdKorisnika',$id);
        
        $newquery= $this->db->get('regkorisnik');
        $newrow= $newquery->row();
        
        $MailLista= $newrow->ZeliVesti;
        
        if ($MailLista == NULL){
            $MailLista = "Niste";
            $Zeli= "Prijavi se na listu za obavestenja";
        } else {
            $MailLista = "Jeste";
            $Zeli= "Odjavi se sa liste za obavestenja";
        }
        
        $data = array(
                 'KorisnickoIme' => $KorisnickoIme,
                 'ImePrezime' => $ImePrezime,
                 'Email' => $Email,
                 'Slika' => $Slika,
                 'MailLista' => $MailLista,
                 'Zeli' => $Zeli
                );
        
        return $data;
    }
    
    public function DohvatiListeOmiljenihParametara($id){
        $this->load->database();
        
        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->where('IdKorisnika',$id);
        
        $query= $this->db->get('omiljeniparametri');
         $res= array();
        $i=0;
        foreach ($query->result() as $row){
           $res[$i]=$row; 
             $i++;
        }
        return $res;
    }
    
    public function PrijaviSeZaObavestenja(){
        $this->load->library(array('session'));
        $this->load->database();
        
        $id= $this->session->id;
        
        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->where('IdKorisnika', $id);
        
        $query= $this->db->get('regkorisnik');
        $row= $query->row();
        $trenutno= $row->ZeliVesti;
        
        if ($trenutno == 0){
            $value= 1;
        } else {
            $value= NULL;
        }
        
        $data= array(
            'ZeliVesti' => $value
        );
        
        $this->db->update('regkorisnik', $data);
    }
    
    public function ObrisiListuOmiljenihParametara($naziv){
        $this->load->library(array('session'));
        $this->load->database();
        
        $id= $this->session->id;
        
        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->where('IdKorisnika', $id);
        $this->db->where('NazivListe', $naziv);
        
        $this->db->delete('omiljeniparametri');
        
        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->where('IdKorisnika',$id);
        
        $query= $this->db->get('omiljeniparametri');
        $res= array();
        $i=0;
        foreach ($query->result() as $row){
           $i++;
           if ($i < $naziv){
               $data= array(
                'NazivListe' => $i
               );
           } else {
               $data= array(
                'NazivListe' => $naziv
               ); 
               $naziv++;
           }
           $this->db->flush_cache();
           $this->db->start_cache();
           $this->db->where('IdKorisnika', $id);
           $this->db->where('NazivListe', $row->NazivListe);
           
           $this->db->update('omiljeniparametri', $data);
        }
    }
    
    public function DodajListuOmiljenihParametara(){
        $this->load->library(array('session'));
        $this->load->database();
        
        $id= $this->session->id;
        
        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->where('IdKorisnika',$id);
        
        $query= $this->db->get('omiljeniparametri');
        $res= array();
        $i=0;
        foreach ($query->result() as $row){
           $res[$i]=$row; 
             $i++;
        }
        $i++;
        if ($i <= 3){
            $this->db->flush_cache();
            $this->db->start_cache();
            
            $data= array(
                'IdKorisnika' => $id,
                'TipProstora' => null,
                'TipDogadjaja' => null,
                'Zanr' => null,
                'trenutnaAdresa' => null,
                'maxUdaljenost' => null,
                'prosecnaOcena' => null,
                'NazivListe' => "Lista" + $i
            );
            $this->db->insert('omiljeniparametri', $data);
        }
    }
}
