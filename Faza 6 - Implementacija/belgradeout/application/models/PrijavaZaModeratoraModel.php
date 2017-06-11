<?php
/**
 * Description of PrijavaZaModeratoraModel
 *
 * @author Strahinja Milovanovic 14/0463
 */
class PrijavaZaModeratoraModel extends CI_Model{
    public function unesiUBazu($DatumRodjenja, $JMBG, $Adresa, $KontaktTelefon, $Pol, $CV, $MotivacionoPismo, $id){
        $this->load->database();
        
        $data = array(
            'IdKorisnika' => $id,
            'JMBG' => $JMBG,
            'Adresa' => $Adresa,
            'Telefon' => $KontaktTelefon,
            'Pol' => $Pol,
            'CV' => $CV,
            'MotPismo' => $MotivacionoPismo
        );
        
        $this->db->flush_cache();
        $this->db->insert('postanimoderator', $data);
    }
    
    public function getPass($id){
        $this->load->database();
        
        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->where('IdKorisnika', $id);
        $query= $this->db->get('korisnik');
        $row= $query->row();
        return $row;
    }
}
