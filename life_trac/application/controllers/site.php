<?php

class Site extends CI_Controller {
    public function index(){
        $this->load->helper('html');
        $this->load->view('home');

    }


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