<?php
class model_afficherlesconference extends CI_Model
{
    public function GetAllConference()
    {
        $sql = $this->db->query("SELECT IDCONFERENCE, TITRE, NBVOTES FROM conference");
        return $sql->result();
    }
}


?>