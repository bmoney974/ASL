<?php

class Events_model extends CI_Model {

    public function getAll(){

        $q= $this->db->order_by('eventDate', 'asc');
        $q = $this->db->get("events");

        if($q->num_rows()>0){

            foreach($q->result() as $row){
                $data[] = $row;
            }

            return $data;
        }


    }

    public function getBlocks(){

        $q= $this->db->order_by('eventBlock', 'asc');
        $q = $this->db->get("events");

        if($q->num_rows()>0){

            foreach($q->result() as $row){
                $data[] = $row;
            }

            return $data;
        }


    }

    function create_event($data){
        $this->db->insert("events", $data);
        return;

    }

        // update
    function update($data){
        $this->db->where("id",$this->uri->segment(3));
        $this->db->update("events",$data);


    }

    // delete row
   function delete(){
       $this->db->where("id",$this->uri->segment(3));
       $this->db->delete("events");
   }


}