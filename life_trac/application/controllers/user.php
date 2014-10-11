<?php

class User extends CI_Controller{

    public function User (){
        parent:CI_Controller:();

        $this->view_data['base_url'] = base_url();
    }
          public function index(){
            $this->register();



        public function register(){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('email','Email', 'trim|required|alpha_numeric|min_length[6]|xss_clean|valid_email');
            $this->form_validation->set_rules('username','Username', 'trim|required|alpha_numeric|min_length[6]|xss_clean');
            $this->form_validation->set_rules('password','Password', 'trim|required|alpha_numeric|min_length[6]|xss_clean');

            if($this->form_validation->run() == FALSE){
                // hasn't been run or there are validation errors
                $this->load->view('site/events', $this->view_data);

            }else{
               // everything is good process the form with the data to database
                $username = $this->input->post('username');
                $email = $this->input->post('username');
                $password = $this->input->post('username');
                echo $username;
            }

        }


    }

}