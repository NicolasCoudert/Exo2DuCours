<?php
class model_afficherlesconference extends CI_Model
{
    public function GetAllConference()
    {
        $sql = $this->db->query("SELECT conference.IDCONFERENCE, niveau.NIVEAU, theme.LIBELLETHEME 
        FROM conference, niveau, theme 
        WHERE conference.IDTHEME=theme.IDTHEME 
        AND conference.IDNIVEAU=niveau.IDNIVEAU");
        return $sql->result();
    }
}


?>