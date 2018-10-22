<?php

class index_Tech extends CI_Controller
{
        public function index()
        {
            $this->load->model("model_Conference");
            $data['lesConferences']=$this->model_Conference->GetAllConference();
            $this->load->view("view_Tech", $data);
        }
}

?>