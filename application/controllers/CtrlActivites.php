<?php

class CtrlActivites extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Activites');
    }
    public function index()
    {
        $data['lesActivites'] = $this->Model_Activites->getAllActivites();
        $this->load->view('AfficherActivites', $data);
    }
    
    function AfficherFormations()
    {
        $idActivite = $_GET['idActivite'];
        $this->load->model('Model_Formations');
        $data['lesFormations'] = $this->Model_Formations->getFormationsByActivite($idActivite);
        $this->load->view('AfficherFormations', $data);
    }
    
    function AfficherAgents()
    {
        $idFormation = $_GET['idFormation'];
        $this->load->model('Model_Agents');
        $data['lesAgents'] = $this->Model_Agents->getAgentsByFormation($idFormation);
        $this->load->view('AfficherAgents', $data);
    }

    function ValiderLesPresence()
    {
        $this->load->model("Model_Inscription");
        $this->Model_Inscription->UpdatePresences($_GET['tabAgt'],$_GET['tabPres'],$_GET['numForm']);   
    }
}

