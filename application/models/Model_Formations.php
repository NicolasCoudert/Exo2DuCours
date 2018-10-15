<?php

class Model_Formations extends CI_Model
{
    public function getFormationsByActivite($idActivite)
    {
        $sql = $this->db->select('*')->from('formation')->where('numeroActivite',$idActivite);
        $sql = $this->db->get();
        foreach ($sql->result() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }
}

