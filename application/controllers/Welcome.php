<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	private $data;

	public function __construct() {
       parent::__construct();

       $this->load->model("User_model" , "user");
       $this->load->model("Sitelinks_model" , "image_details");

       
    }


	public function index(){
		$this->data['title'] = "Login Page";

		$this->form_validation->set_rules('username', 'Username', 'required');
		// $this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|md5');

		if ($this->form_validation->run() == FALSE){

            $this->load->view('login' , $this->data);

        }else{

            if($result = $this->user->get_user_info()){
   
            	$this->session->set_userdata("user" , $result);

            	switch ($result->acc) {
            		case 'admin':
            			redirect("Admin" , "refresh");
            			break;
            		case 'manex-france':
            			redirect("welcome/site/manex-france" , "refresh");
            			break;
            		case 'manex-usa':
            			redirect("welcome/site/manex-usa" , "refresh");
            			break;
            		case 'cofrad':
            			redirect("cofrad" , "refresh");
            			break;
            		case 'stockman':
            			redirect("welcome/site/stockman" , "refresh");
            			break;
            		default:
            			# code...
            			break;
            	}
            }else{	
            	redirect("welcome/?error=wrong_password" , "refresh");
            }
        }





	}

	public function site($site){
		switch ($site) {
			case 'manex-france':
				$this->manex_france();
				break;
			case 'manex-usa':
				$this->manex_usa();
				break;
			case 'stockman':
				$this->stockman();
				break;
			// case 'cofrad':
			// 	$this->cofrad();
			// 	break;
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect("welcome");
	}

	private function manex_france(){
		
		$this->load->view("manex-france/index");
	}

	private function manex_usa(){
		$this->load->view("manex-usa/index");
	}

	// private function cofrad(){
 //        $this->load->view("cofrad/index" , $this->data);
	// }

	private function stockman(){
		$this->load->view("stockman/index");
	}






}
