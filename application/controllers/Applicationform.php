<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Applicationform extends CI_Controller {

	public function index(){
		$this->check_logged();
      	$this->main_contents();
    }
    //menu options

    public function logout(){
    	session_destroy();
    	redirect();
    }




    private function main_contents(){
        $data['location'] = 'public/contents-css/user.css';
        $this->load->view('pages/application');
    }

    private function check_logged(){
        if($this->session->has_userdata('logged_in')==false){
                redirect();
        }else if($this->session->userdata('user_type')!='loanclerk'){
            $userType = $this->session->userdata('user_type');
            if('cashier'==$userType){
                redirect('cashier');
            }else if ('loan_clerk'==$userType){
                redirect('clerk');
            }else if ('manager'==$userType){
                redirect('manager');
            }else{
                echo "Access Forbidden! \n Authorized Personnel Only";
                exit;
            }
        }
        else{
                return true;
        }
           
    }
}

