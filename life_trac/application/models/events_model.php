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

    function create_event($data){
        $this->db->insert("events", $data);

    }

    function update($data){
        $this->db->where("id",14);
        $this->db->update("events",$data);

    }

   function delete(){
       $this->db->where("id",$this->url->segment(3));
       $this->db->delete("$data");
   }


}