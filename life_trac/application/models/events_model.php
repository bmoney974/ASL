<?php

class Events_model extends CI_Model {

    public function getAll(){

        $q = $this->db->get("events");

        if($q->num_rows()>0){

            foreach($q->result() as $row){
                $data[] = $row;
            }

            return $data;
        }


    }

    function create_event(){
        $new_event_insert_data = array(
            'eventName' => $this->input->post('eventName'),
            'eventDate' => $this->input->post('eventDate'),
            'eventLocation' => $this->input->post('eventLocation'),


        );

        $newtask = $this->db->insert('events',$new_event_insert_data);
        return $newtask;
    }

}