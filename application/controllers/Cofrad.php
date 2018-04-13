<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cofrad extends CI_Controller {

  private $data;

  public function __construct() {
       parent::__construct();
      
 
       if(!$this->session->userdata("user") OR $this->session->userdata("user")->acc != "cofrad"){
            
           if(!$this->session->userdata("user") OR $this->session->userdata("user")->acc != "admin"){
              redirect("welcome/?error=login_first_cofrad" );  
             }

       }

        $this->load->model("User_model" , "user");
        $this->load->model("Sitelinks_model" , "image_table");
       //$this->load->helper('directory'); //load directory helper
    }

  public function index(){
       $this->data['title'] = "Admin";
       $this->data['page'] = "cofrad/description";
       $this->data['user'] = $this->session->userdata("user")->username;
       $this->data['snav'] = "admin_nav";
       $this->load->view("cofrad/index" , $this->data);
  }
   
  public function get_desc(){
      $this->data['title'] = "Cofrad";
      $this->data['page'] = "cofrad/description";
      $this->load->view("cofrad/index" , $this->data);
      } 

    public function search_keyword(){

      $this->data['user'] = $this->session->userdata("user")->username;
      $this->data['title'] = "Search Result";
      $this->data['page'] = "search_view";
      $this->data['snav'] = "admin_nav";
      $this->data['results']    =  $this->image_table->search();
      $this->load->view("cofrad/conav" , $this->data);
    }



}
