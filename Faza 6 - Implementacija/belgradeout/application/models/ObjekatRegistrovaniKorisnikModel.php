<?php
/**
 * Description of ObjekatRegistrovaniKorisnikModel
 *
 * @author Strahinja Milovanovic 14/0463
 */
class ObjekatRegistrovaniKorisnikModel extends CI_Model{
    public function DohvatiObjekatIzBaze($id){
        $this->load->database();
        
        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->where('IdObjekta',$id);
        
        $query= $this->db->get('objekat');
        $row= $query->row();
        
        $Adresa= $row->Adresa;
        $Naziv= $row->Naziv;
        $Kapacitet= $row->Kapacitet;
        $TipObjekta= $row->TipObjekta;
        $RadnoVreme= $row->radnoVreme;
        $Opis= $row->opis;
        $Slika= $row->Slika;
        
        $data = array(
                 'Adresa' => $Adresa,
                 'Naziv' => $Naziv,
                 'Kapacitet' => $Kapacitet,
                 'TipObjekta' => $TipObjekta,
                 'RadnoVreme' => $RadnoVreme,
                 'Opis' => $Opis,
                 'Slika' => $Slika
                );
        
        return $data;
    }
    
    public function DohvatiProsecnuOcenu($id){
        $this->load->database();
        
        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->where('IdObjekta',$id);
        
        $query= $this->db->get('ocena');
        $row= $query->row();
        
        if ($row != null){
            $Ocena= $row->Ocena;
            $BrGlasova= $row->BrGlasova;
            $Ocena /= $BrGlasova;
            
            $data = array(
                     'Ocena' => $Ocena,
                     'BrGlasova' => $BrGlasova,
                    );

            return $data;   
        } else{
            $data = array(
                'IdObjekta' => $id,
                'BrGlasova' => 0,
                'Ocena' => 0
            );
            $this->db->flush_cache();
            $this->db->start_cache();
            
            $this->db->insert('ocena', $data);
            
            return $data;
        }
    }
    
    public function DohvatiDogadjajeIzBaze($id){
        $this->load->database();
        
        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->where('IdObjekta', $id);
        
        $query= $this->db->get('dogadjaj');
        
        $res= array();
        $i=0;
        foreach ($query->result() as $row){
           $res[$i]=$row; 
             $i++;
        }
        return $res;
    }
    
    public function DohvatiKomentareIzBaze($id){
        $this->load->database();
        
        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->where('IdObjekta', $id);
        
        $query= $this->db->get('komentar');
        
        $res= array();
        $i=0;
        foreach ($query->result() as $row){
           $res[$i]=$row; 
           
           $this->db->flush_cache();
           $this->db->start_cache();
           $this->db->where('IdKorisnika', $row->IdKorisnika);
        
           $query= $this->db->get('korisnik');  
           $res[$i]->KorisnickoIme= $query->row()->UserName;
           
           $i++;   
        }
        
        
        return $res;
    }
    
    public function DodajKomentar($Komentar, $id, $idObjekat){
        $this->load->database();
        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->where('IdObjekta', $idObjekat);
        $this->db->where('IdKorisnika', $id);
        
        $query= $this->db->get('komentar');
        
        if($query->row() == null){
            $data= array(
                'IdObjekta' => $idObjekat,
                'Tekst' => $Komentar,
                'IdKorisnika' => $id
            );  
            $this->db->insert('komentar', $data);
        } else {
            $data= array(
                'Tekst' => $Komentar
            );  
            $this->db->update('komentar', $data);
        }
  
    }
    
    public function DodajOcenu($Ocena, $IdObjekta, $id){
        $this->load->database();
        $this->db->flush_cache();
        $this->db->start_cache();
        
        $this->db->where('IdObjekta',$IdObjekta);
        $query= $this->db->get('ocena');
        
        $row= $query->row();
        $VotesNum= $row->BrGlasova;
        
        $PrOcena= $row->Ocena;
        $VotesNum++;
        $PrOcena += $Ocena;
        
        $data= array(
            'BrGlasova' => $VotesNum,
            'Ocena' => $PrOcena
        );
        
        $this->db->flush_cache();
        $this->db->start_cache();
        
        $this->db->where('IdObjekta', $IdObjekta);
        $this->db->update('ocena', $data);
    }
}
