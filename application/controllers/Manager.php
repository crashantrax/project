<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Manager extends CI_Controller {

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
        $this->load->model('Mem_model','manager');
        $res = $this->manager->getManager();
        $data = array('title' => "Manager",'contents' => "pages/m-table",'page' => "Members","links" => "main","res" => $res  );
        $this->load->view('templates/dashboard-header',$data);
        $this->load->view('pages/manager-main',$data);
    }

    private function check_logged(){
        if($this->session->has_userdata('logged_in')==false){
                redirect();
        }else if($this->session->userdata('user_type')!='manager'){
            $userType = $this->session->userdata('user_type');
            if('cashier'==$userType){
                redirect('cashier');
            }else if ('loanclerk'==$userType){
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

