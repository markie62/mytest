<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	private $data;

  public function __construct() {
       parent::__construct();
      

       if(!$this->session->userdata("user") OR $this->session->userdata("user")->acc != "admin"){
            $this->session->sess_destroy();
            redirect("welcome/?error=login_first");

       }

       $this->load->model("User_model" , "user");
       $this->load->model("Sitelinks_model", "image_table");
       
      $this->load->helper('file');
        
      $this->load->helper(array('form', 'url'));
    }

	public function index(){
    

       $this->data['title'] = "Admin";
       $this->data['page'] = "admin/dashboard";
       $this->load->view("admin/master" , $this->data);



	}

    public function manage_accounts(){
        $this->data['title'] = "View Accounts";
        $this->data['page'] = "admin/view_accounts";
        $this->data['result'] = $this->user->get_accounts_list();
        $this->load->view("admin/master" , $this->data);
    }

    public function add_account(){

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|md5');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('account_type', 'Account Type', 'required');

        if ($this->form_validation->run() == FALSE){

            $this->data['title'] = "Add Accounts";
            $this->data['page'] =   redirect("admin/manage_accounts");
            $this->load->view("admin/master" , $this->data);

        }else{
            $this->user->create_account();
            redirect("admin/manage_accounts/?return=create_success",  "refresh" , $this->data);

        }

        
    }

    public function delete_record(){
       $this->form_validation->set_rules('id', 'id', 'required');
         if ($this->form_validation->run() == FALSE){

            $this->data['title'] = "Add Accounts";
            $this->data['page'] =   redirect("admin/manage_accounts/?error_delete_error");
            $this->load->view("admin/master" , $this->data);

         }else{
            $this->user->delete_account();

            redirect("admin/manage_accounts/?return=delete_success", "refresh", $this->data); 
       }
     
    }

    public function alert(){
        $this->data['title'] = "comming Soon";
        $this->data['page'] = "admin/alert";
        $this->load->view("admin/master" , $this->data);
    }


    public function notes(){
        $this->data['title'] = "notes";
        $this->data['page'] = "admin/notes";
        $this->load->view("admin/master" , $this->data);
    }
 
      public function admin_view_cofrad(){
        redirect("cofrad" , "refresh");
      }

      public function admin_view_manex_france(){
          $this->data['title'] = "Admin View";
          $this->data['page'] = "manex-france/index";
          $this->load->view("manex-france/index", $this->data);
      }
      public function admin_view_manex_usa(){
          $this->data['title'] = "Admin View";
          $this->data['page'] = "manex-usa/index";
          $this->load->view("manex-usa/index", $this->data);
      }
      public function admin_view_stockman(){
          $this->data['title'] = "Admin View";
          $this->data['page'] = "stockman/index";
          $this->load->view("stockman/index", $this->data);
      }







//////////////////////////////////////////////////////////////////////////////////

    public function manage_site(){
        $this->data['title'] = "Manage Webiste Images";
        $this->data['page'] = "admin/manage_sites";
        $this->data['subpage'] = "admin/all_images";
        $this->load->view("admin/master" , $this->data);
    }




    public function delete_selected_image(){
       $this->form_validation->set_rules('image_num', 'image_num', 'required');
     
           

         if ($this->form_validation->run() == FALSE){

            $this->data['title'] = "Manage Website Images";
            $this->data['page'] =   redirect("admin/manage_site/?return=error", "refresh" ,$this->data);
            $this->load->view("admin/master" , $this->data);

         }else{
          $r = $this->db->where("image_num" , $this->input->post("image_num"))->get('image_table')->result();

          foreach($r as $row){
           

            unlink($row->image_path.''.$row->image_filename);
          }

          $this->image_table->delete_image();


            // delete_files(site_url().'image_path'.'image_filename');
          //unlink($image_path.''.$image_filename);


           //  $this->image_table->delete_image();
             redirect("admin/manage_site/?return=delete_success", "refresh", $this->data); 
       }
     
    }



    public function update_selected_img(){
      $this->form_validation->set_rules('image_num', 'image_num', 'required');
      $this->form_validation->set_rules('image_name', 'image_name', 'required');
      $this->form_validation->set_rules('image_ref', 'image_ref', 'required');
      $this->form_validation->set_rules('image_description', 'image_description', 'required');
         if ($this->form_validation->run() == FALSE){

            $this->data['title'] = "Manage Website Images";
            $this->data['page'] =   redirect("admin/manage_site/?return=error_update", "refresh" ,$this->data);
            $this->load->view("admin/master" , $this->data);

         }else{
            $this->image_table->update_image();

            redirect("admin/manage_site/?return=update_success", "refresh", $this->data); 
       }

      
    }



    public function CKEDITOR(){
       
        $this->data['subpage'] = "admin/CKEDITOR";
        $this->load->view("admin/master" , $this->data);
    }

    public function d_error(){
          $this->data['title'] = "comming Soon";
            $this->data['page'] = "admin/d_error";
            $this->load->view("admin/master" , $this->data);

    }


    public function do_upload(){
       
            $config['allowed_types']        = 'gif|jpg|png';
            // $config['max_size']             = 100;
            // $config['max_width']            = 768;
            // $config['max_height']           = 1024;

         if($this->input->post("image_account") == "cofrad"){            

            $config['upload_path']          = 'public/assets/img/site_images/cofrad/';


            }if($this->input->post("image_account") == "manex-usa"){            

            $config['upload_path']          = 'public/assets/img/site_images/manex-usa/';


            }if($this->input->post("image_account") == "manex-france"){            

            $config['upload_path']          = 'public/assets/img/site_images/manex-france/';

            }if($this->input->post("image_account") == "stockman"){            

            $config['upload_path']          = 'public/assets/img/site_images/stockman/';

            }

              $this->load->library('upload', $config);
              $this->load->library('image_lib');


              if ( ! $this->upload->do_upload()){
                        $this->data['error'] = array('error' => $this->upload->display_errors());
                        $this->data['page'] =   redirect("admin/d_error/?return=error", "refresh" ,$this->data);
                }else{

                        if($this->input->post("image_account") == "cofrad"){
                              $set_path = "public/assets/img/site_images/cofrad/";

                              $filename = $_FILES['userfile']['name'];

                              $this->db->insert("image_table" , [
                                  "image_description" => $this->input->post("image_description"),
                                  "image_filename" => $filename,
                                  "image_account" => $this->input->post("image_account"),
                                  "image_name" => $this->input->post("image_name"),
                                  "image_path" => $set_path,
                                  "category" => $this->input->post("category"),
                                  "image_ref" => $this->input->post("image_ref")
                              ]);
  
                        }if($this->input->post("image_account") == "manex-france"){
                              $set_path = "public/assets/img/site_images/manex-france/";

                              $filename = $_FILES['userfile']['name'];

                              $this->db->insert("image_table" , [
                                  "image_description" => $this->input->post("image_description"),
                                  "image_filename" => $filename,
                                  "image_account" => $this->input->post("image_account"),
                                  "image_name" => $this->input->post("image_name"),
                                  "image_path" => $set_path,
                                  "category" => $this->input->post("category"),
                                  "image_ref" => $this->input->post("image_ref")
                              ]);
  
                        }if($this->input->post("image_account") == "manex-usa"){
                              $set_path = "public/assets/img/site_images/manex-usa/";

                              $filename = $_FILES['userfile']['name'];

                              $this->db->insert("image_table" , [
                                  "image_description" => $this->input->post("image_description"),
                                  "image_filename" => $filename,
                                  "image_account" => $this->input->post("image_account"),
                                  "image_name" => $this->input->post("image_name"),
                                  "image_path" => $set_path,
                                  "category" => $this->input->post("category"),
                                  "image_ref" => $this->input->post("image_ref")
                              ]);
  
                        }if($this->input->post("image_account") == "stockman"){
                              $set_path = "public/assets/img/site_images/stockman/";

                              $filename = $_FILES['userfile']['name'];

                              $this->db->insert("image_table" , [
                                  "image_description" => $this->input->post("image_description"),
                                  "image_filename" => $filename,
                                  "image_account" => $this->input->post("image_account"),
                                  "image_name" => $this->input->post("image_name"),
                                  "image_path" => $set_path,
                                  "category" => $this->input->post("category"),
                                  "image_ref" => $this->input->post("image_ref")
                              ]);
  
                        }
    

                    

                          $data = array('upload_data' => $this->upload->data());
                          $this->data['page'] =   redirect("admin/manage_site/?return=succes", "refresh" ,$this->data);
                        

               
       }    
                        
                       



                          $this->load->view("admin/master" , $this->data);

  }








    public function search_view(){
        $this->data['title'] = "Search";


        $this->data['page'] = "admin/search_view";

        // $this->form_validation->set_rules('image_name', 'image_name', 'required');

        
        // $keyword    =   $this->input->post('keyword');
        
        // $this->data['results']    =   $this->image_table->search($keyword);

        $this->data['results']    =  $this->image_table->search();


        $this->load->view("admin/master" , $this->data);
    }











} //end
