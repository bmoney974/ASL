<?php

class Membership extends CI_Model{

    function validate(){

        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password',md5($this->input->post('password')));
       $query = $this->db->get('users');

        if($query->num_rows == 1){
            return true;

        }




    }
    function create_member(){
        $new_member_insert_data = array(
            'firstName' => $this->input->post('firstName'),
            'lastName' => $this->input->post('firstName'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))

        );

        $insert = $this->db->insert('users',$new_member_insert_data);
        return $insert;
    }


}