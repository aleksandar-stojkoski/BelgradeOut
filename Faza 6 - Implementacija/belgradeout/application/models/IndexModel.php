<?php
/**
 * Description of IndexModel
 *
 * @author Strahinja Milovanovic 14/0463
 */
class IndexModel extends CI_Model{
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
}
