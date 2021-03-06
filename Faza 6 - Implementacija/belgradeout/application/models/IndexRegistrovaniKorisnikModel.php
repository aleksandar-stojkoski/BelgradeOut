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
    
    public function DohvatiListuObjekata(){
        $this->load->database();
        $this->db->flush_cache();
        $this->db->start_cache();
        
        $res= array();
        $i= 0;
        
        $query= $this->db->get('objekat');
        foreach($query->result() as $row){
            $res[$i]= $row;
            $i++;
        }
        
        return $res;
    }
    
    public function DohvatiNazivObjekta($idObjekta){
        $this->load->database();
        
        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->where('IdObjekta', $idObjekta);
        
        $query= $this->db->get('objekat');
        $row= $query->row();
        
        $naziv= $row->Naziv;
        return $naziv;
    }
    
    public function DohvatiRezultatePretrage($TipProstora, $TipDogadjaja, $Zanr, $trenutnaAdresa, $maxUdaljenost, $prosecnaOcena){
        $this->load->database();
        
        $this->db->flush_cache();
        $this->db->start_cache();
        
        if($Zanr == "Rock") { $this->db->where('Muzicki_Zanr', 'Rock'); }
        else if ($Zanr == "Pop") { $this->db->where('Muzicki_Zanr', 'Pop'); }
        else if ($Zanr == "House") { $this->db->where('Muzicki_Zanr', 'House'); }
        
        if($TipDogadjaja == "Zurka") { $this->db->where('TipDogadjaja', 'Zurka'); }
        else if ($TipDogadjaja == "Svirka") { $this->db->where('TipDogadjaja', 'Svirka'); }
        
        $MojTip= "Svi";
        if ($TipProstora == "Pub") { $MojTip= 'Pub'; }
        else if ($TipProstora == "Klub") { $MojTip= 'Klub'; }
        else if ($TipProstora == "Kafana") { $MojTip= 'Kafana'; }
        
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
            
            $MojaOcena= 5;
            $newquery= $this->db->get('ocena');
            if($newquery->row() != null){
                $MojaOcena= $newquery->row()->Ocena;
                $BrojGlasova= $newquery->row()->BrGlasova;
                $MojaOcena /= $BrojGlasova;
            }
            if ($MojTip != "Svi"){
                if ($newQuery->row()->TipObjekta == $MojTip){
                    if ($MojaOcena >= $prosecnaOcena){
                        $res[$i]= $row;
                        $i++;
                    }      
                }
            } else {
                if ($MojaOcena >= $prosecnaOcena){
                    $res[$i]= $row;
                    $i++;
                }   
            }
        }
        return $res;
    }
}
