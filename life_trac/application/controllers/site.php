<?php

class Site extends CI_Controller {




    // load main page
    public function index(){
        $data = array();
        $this->load->helper('html');
        $this->load->view('home');

    }

    function edit(){
        $this->load->model('events_model');
        $data['records'] = $this->events_model->getAll();
        $this->load->view('edit',$data);
    }

    function create(){
       $data = array(
            "eventName" => $this->input->post("eventName"),
            "eventDate" => $this->input->post("eventDate"),
           "eventLocation" => $this->input->post("eventLocation"),
           "eventBlock" => $this->input->post("eventBlock")


       );
        $this->events_model->create_event($data);
        redirect('site/events');
    }

    function update(){
        $data = array(
            "eventName" => $this->input->post("eventName2"),
            "eventDate" => $this->input->post("eventDate2"),
            "eventLocation" => $this->input->post("eventLocation2"),
            "eventBlock" => $this->input->post("eventBlock2")

        );
        $this->db->where("id",$this->uri->segment(3));
        $this->events_model->update($data);
        redirect('site/events');
    }

    // delete
    function delete(){
        $this->events_model->delete();
        redirect('site/events');

    }

    // retrieve data
    function events(){
       $this->load->model('events_model');
       $data['records'] = $this->events_model->getAll();
       $this->load->view('events',$data);


   }

     function blocks(){
        $this->load->model('events_model');
        $data['records'] = $this->events_model->getAll();
        $this->load->view('blocks',$data);

    }





    function newEvent(){
        $this->load->model('events_model');
        $data['records'] = $this->events_model->post();
        $this->load->view('events',$data);


    }






}