<?php
// @author Aleksandar Stojkoski 14/0266

class LoginModel extends CI_Model{
    
    public function provera_baze($name, $pass){
        $this->load->database();
        
        $this->db->flush_cache();
        $this->db->start_cache();
        $this->db->where('UserName',$name);
        $this->db->where('Lozinka',$pass);
        $this->db->limit(1);
        
        $query=$this->db->get('korisnik');
        $array = array(
            'id' => 0,
            'tip' => 0
        );
        
        if ($query->num_rows()==1){ 
            //postoji korisnik sa zadatim username-om i lozinkom
            $row=$query->row();
            
            $id=$row->IdKorisnika;
            $array['id']=$id;

            $this->db->flush_cache();
            $this->db->start_cache();
            $this->db->where('IdAdmin',$id);
            $query=$this->db->get('admin');
            if ($query->num_rows()==1){
                $array['tip']=1;
                return $array; 
                //1 znaci da je tip korisnika administrator
            }

            $this->db->flush_cache();
            $this->db->start_cache();
            $this->db->where('IdModeratora',$id);
            $query=$this->db->get('moderator');
            if ($query->num_rows()==1){
                $array['tip']=2;
                return $array;
                //2 znaci da je tip korisnika moderator
            }

            $this->db->flush_cache();
            $this->db->start_cache();
            $this->db->where('IdAutor',$id);
            $query=$this->db->get('autor');
            if ($query->num_rows()==1){
                $array['tip']=3;
                return $array;
                //3 znaci da je tip korisnika autor
            }               
            
            $this->db->flush_cache();
            $this->db->start_cache();
            $this->db->where('IdKorisnika',$id);
            $query=$this->db->get('regkorisnik');
            if ($query->num_rows()==1){
                $array['tip']=4;
                return $array; 
                //4 znaci da je tip korisnika registrovani korisnik
            }                
        }
        return $array;   
        //ne postoji korisnik sa zadatim username-om i lozinkom
    }
}

?>