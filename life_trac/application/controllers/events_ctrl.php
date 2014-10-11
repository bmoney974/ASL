<?php

class Events_ctrl extends CI_Controller {

    public function Event(){
        parent::__construct();
        $this->view_data['base_url'] = base_url();

        $this->load->model('Get_db');

        $result = $this->Get_db->insert_eventName();

        if($result){
            $this->load->view('events');
        }

    }








}