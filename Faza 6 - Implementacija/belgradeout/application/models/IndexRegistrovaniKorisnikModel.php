<?php
/**
 * Description of IndexRegistrovaniKorisnikModel
 *
 * @author Strahinja Milovanovic 14/0463
 */
class IndexRegistrovaniKorisnikModel extends CI_Model{
     public function DohvatiDogadjajeIzBaze(){
        $this->load->database();
        
        $this->db->flush_cache();
        $this->db->start_cache();
        
        $query= $this->db->get('dogadjaj');
        
        $res= array();
        $i=0;
        foreach ($query->result() as $row){
           $res[$i]=$row; 
             $i++;
        }
        return $res;
    }
    
    public function DohvatiRezultatePretrage($TipProstora, $TipDogadjaja, $Zanr, $trenutnaAdresa, $maxUdaljenost, $prosecnaOcena){
        $this->load->database();
        
        $this->db->flush_cache();
        $this->db->start_cache();
        
//        if ($TipProstora != "Svi") { $this->db->where('TipProstora', $TipProstora); }
        if ($TipDogadjaja != "Svi") { $this->db->where('TipDogadjaja', $TipDogadjaja); }
        if ($Zanr != "Svi") { $this->db->where('Muzicki_Zanr', $Zanr); }
        
        $i= 0;
        $res= array();
        $query= $this->db->get('dogadjaj');
        foreach($query->result() as $row){
            $this->db->flush_cache();
            $this->db->start_cache();
            
            $this->db->where('IdObjekta', $row->IdObjekta);
            $newQuery= $this->db->get('objekat');
            
            $this->db->flush_cache();
            $this->db->start_cache();
            
            $this->db->where('IdObjekta', $row->IdObjekta);
            
            $newquery= $this->db->get('ocena');
            
            if ($TipProstora != "Svi"){
                if ($newQuery->row()->TipObjekta == $TipProstora){
                    if ($newRow->row()->Ocena >= $Ocena){
                        $res[$i]= $row;
                        $i++;
                    }      
                }
            } else {
                if ($newRow->row()->Ocena >= $Ocena){
                    $res[$i]= $row;
                    $i++;
                }   
            }
        }
        
    }
}
