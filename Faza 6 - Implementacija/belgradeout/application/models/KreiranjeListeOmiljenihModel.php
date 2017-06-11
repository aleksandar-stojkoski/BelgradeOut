<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of KreiranjeListeOmiljenihModel
 *
 * @author Strahinja Milovanovic 14/0463
 */
class KreiranjeListeOmiljenihModel extends CI_Model{
    public function DohvatiListeIzBaze($id){
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
    
    public function unesiUBazu($TipProstora, $TipDogadjaja, $Zanr, $trenutnaAdresa, $maxUdaljenost, $prosecnaOcena, $naziv, $id, $Staro){
        $this->load->database();
        
        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->where('IdKorisnika', $id);
        $this->db->where('NazivListe', $Staro);
        
        $this->db->delete('omiljeniparametri');
        
        $data = array(
            'TipProstora' => $TipProstora,
            'TipDogadjaja' => $TipDogadjaja,
            'Zanr' => $Zanr,
            'trenutnaAdresa' => $trenutnaAdresa,
            'maxUdaljenost' => $maxUdaljenost,
            'prosecnaOcena' => $prosecnaOcena,
            'IdKorisnika' => $id,
            'NazivListe' => $naziv
        );
        
        $this->db->flush_cache();
        $this->db->start_cache();
        
        $this->db->insert('omiljeniparametri', $data);
    }
}
