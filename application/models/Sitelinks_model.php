<?php

class Sitelinks_model extends CI_Model {
   

    public function get_image_desc(){
       $result = $this->db->get("image_table")->result();

        return $result;

    }


    public function search(){
     
        $this->db->or_like([
            'image_name'=> $this->input->post("image_name"),
            'image_account'=> $this->input->post("image_name")
        ]);

         $result = $this->db->get("image_table")->result();    
         
         return $result;   
            
    }   


    public function update_image(){

      
        $this->db->set(['image_name'=> $this->input->post("image_name"),
                        'image_description'=> $this->input->post("image_description"),
                        'image_ref'=> $this->input->post("image_ref")
            ]);

        $this->db->where(['image_num'=> $this->input->post("image_num")]);
        $this->db->update('image_table');


    }

    public function delete_image(){
    	$this->db->where(['image_num'=> $this->input->post("image_num")]);
        $this->db->delete('image_table');
    }



    public function upload_image_details(){
        $this->db->insert("image_table" , [
            "image_description" => $this->input->post("image_description"),
            "image_filename" => $this->input->post("image_filename"),
            "image_account" => $this->input->post("image_account"),
            "image_name" => $this->input->post("image_name"),
            "image_path" => $this->input->post("image_path"),
            "category" => $this->input->post("category"),
            "image_ref" => $this->input->post("image_ref")
        ]);
    }






}


