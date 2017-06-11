<?php
/**
 * Description of DogadjajGostRegistrovaniKorisnikModel
 *
 * @author Strahinja Milovanovic 14/0463
 */
class DogadjajGostRegistrovaniKorisnikModel extends CI_Model{
    public function DohvatiDogadjajIzBaze($id){
        $this->load->database();
        
        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->where('IdDogadjaj',$id);
        
        $query= $this->db->get('dogadjaj');
        $row= $query->row();
        
        $Datum= $row->Datum;
        $Naziv= $row->Naziv;
        $TipDogadjaja= $row->TipDogadjaja;
        $Zanr= $row->Muzicki_Zanr;
        $Trajanje= $row->trajanje;
        $Opis= $row->Opis;
        $Slika= $row->Slika;
        $Izvodjac= $row->NazivIzvodjaca;
        $Objekat= $row->IdObjekta;
        
        $data = array(
                 'Objekat' => $Objekat,
                 'Datum' => $Datum,
                 'Naziv' => $Naziv,
                 'TipDogadjaja' => $TipDogadjaja,
                 'Zanr' => $Zanr,
                 'Trajanje' => $Trajanje,
                 'Opis' => $Opis,
                 'Slika' => $Slika,
                 'Izvodjac' => $Izvodjac
                );
        
        return $data;
    }
    
    public function DohvatiObjekatIzBaze($id){
        $this->load->database();
        
        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->where('IdObjekta',$id);
        
        $query= $this->db->get('objekat');
        $row= $query->row(); 
        
        return $row;
    }
}
