<?php

class Model_Agents extends CI_Model
{
    public function getAgentsByFormation($idFormation)
    {
        $sql = $this->db->select('*')->from('agent as a')->join('inscription as i','i.codeAgent=a.code','left')->where('i.numeroFormation',''.$idFormation.'');
        $sql = $this->db->get();
        $data = array();
        foreach ($sql->result() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }
}

