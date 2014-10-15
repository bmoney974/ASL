<?php

class Login extends CI_Controller {

    function index(){
        $data['mainContent'] = "login_form";
        $this->load->view('home',$data);

    }


    function validate_credentials(){
        $this->load->model('membership');
      $query=  $this->membership->validate();

        if($query) {
            $data = array(
              'username' => $this->input->post('username'),
                'is_logged_in' => true

            );

            $this->session->set_userdata($data);
            redirect('site/events');
        }else{

            $this->index();
        }

    }
    function signup(){
        $data['mainContent'] = 'signup_form';
        $this->load->view('home',$data);

    }

    function logout(){
        $this->session->sess_destroy();
        redirect('home');

    }

    function create_member(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstName','Name','trim|required');
        $this->form_validation->set_rules('lastName','Last Name','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('username','Username','trim|required|min_length[4]');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('password2','Password Confirmation','trim|required|matches[password]');

        if($this->form_validation->run() == FALSE){
            $this->signup();
        }else{
            $this->load->model('membership');
            if($query = $this->membership->create_member()){
                $data['mainContent'] = 'signup_successful';
                $this->load->view('home',$data);
            }else{
                $this->load->view('signup_form');
            }
        }
    }
}