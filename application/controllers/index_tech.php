<?php

class index_tech extends CI_Controller
{
        public function creerconference()
        {
            $this->load->model("model_creerconference");
            $data['lesConferences']=$this->model_creerconference->AddConference();
            $this->load->view("view_Creer", $data);
        }

        public function afficherlesconference()
        {
            $this->load->model("model_afficherlesconference");
            $data['lesConfs']=$this->model_afficherlesconference->GetAllConference();
            $this->load->view("view_Voir", $data);
        }
}

?>