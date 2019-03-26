<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cashier extends CI_Controller {

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
        $data = array('title' => "Cahshiering",'contents' => "pages/c-table",'page' => "Main Page" );
        $this->load->view('templates/dashboard-header',$data);
        $this->load->view('pages/cashier-main',$data);
    }

    private function check_logged(){
        if($this->session->has_userdata('logged_in')==false){
                redirect();
        }else if($this->session->userdata('user_type')!='cashier'){
            $userType = $this->session->userdata('user_type');
            if('admin'==$userType){
                redirect('admin');
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

