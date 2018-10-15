<?php

class Model_Activites extends CI_Model
{
    public function getAllActivites()
    {
        $sql = $this->db->get('activite');
        foreach ($sql->result() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }
}

