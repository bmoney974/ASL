<?php

class Site extends CI_Controller {




    // load main page
    public function index(){
        $data = array();
        $this->load->helper('html');
        $this->load->view('home');

    }

    function newsletter(){
        $this->load->view('list');

    }

    function send(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name','Name', 'trim|required');
        $this->form_validation->set_rules('email','Email Address', 'trim|required|valid_email');
        if($this->form_validation->run() == FALSE){
            $this->load->view('list');
        }else{
            $name = $this->input->post('name');
            $email = $this->input->post('email');

                   $this->load->library('email');
        $this->email->set_newline("\r\n");

        $this->email->from('bobbynewland123@gmail.com', 'bmoney974');
        $this->email->to($email);
        $this->email->subject('Thanks of signing up');
        $this->email->message('Thanks for joining our newsletter');

        if($this->email->send()){
            $this->load->view('sent');
        }else{
            show_error($this->email->print_debugger());
        }

        }




    }



        //edit page
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
        $data['records'] = $this->events_model->getBlocks();
        $this->load->view('blocks',$data);

    }

    public function logout (){
        $this->session->sess_destroy();
        redirect(base_url());
    }





    function newEvent(){
        $this->load->model('events_model');
        $data['records'] = $this->events_model->post();
        $this->load->view('events',$data);


    }






}