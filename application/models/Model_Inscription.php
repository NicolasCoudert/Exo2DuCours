<?php

class Model_Inscription extends CI_Model
{
    function UpdatePresences($tabAgents,$tabPresences,$idFormation)
    {
        $tabAgents = explode(",",$tabAgents);
        $tabPresences = explode(",",$tabPresences);

        for($i=0 ; $i < count($tabAgents); $i++)
        (
        $sql = $this->db->query("UPDATE Inscription set presence=".$tabPresences[$i]." WHERE codeAgent='".$tabAgents[$i]."' AND numeroFormation= '".$idFormation."'")
        );
    }
}
?>