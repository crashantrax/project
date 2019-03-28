<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

	public function index(){
		$this->check_logged();
      	$this->main_contents();
    }
    //menu options

    public function logout(){
    	session_destroy();
    	redirect();
    }

    public function profile(){
        $this->check_logged();
        $this->load->model('Mem_model','admin');
        $res = $this->admin->getManager();
        $data = array('title' => "Admin",'contents' => "pages/profile-table",'page' => "Members","links" => "main","res" => $res  );
        $this->load->view('templates/dashboard-header',$data);
        $this->load->view('pages/cashier-main',$data);
    }


    private function main_contents(){
        $this->load->view('srtdash/index');
    }

    private function check_logged(){
        if($this->session->has_userdata('logged_in')==false){
                redirect();
        }else if($this->session->userdata('user_type')!='admin'){
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

