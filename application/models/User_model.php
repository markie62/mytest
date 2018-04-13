<?php

class User_model extends CI_Model {

    public function get_user_info(){
        return $this->db->where([
            "username" => $this->input->post("username"),
            "password" => $this->input->post("password")
        ])->get("user")->row();
    }

    public function get_accounts_list(){
        $result = $this->db->get("user")->result();

        return $result;
    }

    public function create_account(){
        $this->db->insert("user" , [
            "email" => $this->input->post("email"),
            "password" => $this->input->post("password"),
            "acc" => $this->input->post("account_type"),
            "username" => $this->input->post("username")
        ]);
    }

     public function delete_account(){
        $this->db->where(['id'=> $this->input->post("id")]);
        $this->db->delete('user');
        
     }




// ???????????????????????????????????????????????????????????????????????































}