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

     public function register(){
        $this->check_logged();
        $data = array('title' => "Manage Employee",'contents' => "pages/m-addEmployee",'page' => "Registration","links" => "register" );
        $this->load->view('templates/dashboard-header',$data);
        $this->load->view('pages/manager-main',$data);
    }

        public function register_employee(){
        //employee profile
        $this->check_logged();

        $this->load->model('Register','register');
        $fname = $this->input->post('first_name');  
        $mname = $this->input->post('middle_name');
        $lname = $this->input->post('last_name');
        $pob = $this->input->post('place_of_birth');
                        //
        $yr =  $this->input->post('year');
        $mn =  $this->input->post('month');
        $dy =  $this->input->post('day');
                        //
        $dob = $yr."-".$mn."-".$dy;
        $nationality = $this->input->post('nationality');
        $sex = $this->input->post('sex');
        $civil = $this->input->post('civil_status');
        $blood = $this->input->post('blood_type');
        $home = $civil = $this->input->post('home_address');
        $phone = $this->input->post('phone_no');
        $email = $this->input->post('email_address');
        $stats = $this->input->post('stats');
        $account_number = date('Y'). rand(100000, 999999);
        $date = date('Y-m-d');

        //INSERT MEMBER ACCOUNTS

        $this->register->register_profile($fname,$mname,$lname,$phone,$email,$pob,$dob,$nationality,$sex,$civil,$blood,$home,$stats,$account_number,$date);



    }

    public function error404(){
        $this->load->view('templates/error');
    }

    public function profile(){
        $this->check_logged();
        $this->load->model('Mem_model','cashier');
        $res = $this->cashier->getManager();
        $data = array('title' => "Manager",'contents' => "pages/s-table",'page' => "Member's Profile","links" => "main","res" => $res  );
        $this->load->view('templates/dashboard-header',$data);
        $this->load->view('pages/manager-main',$data);
    }


    private function main_contents(){
        $this->load->model('Mem_model','members');
        $res = $this->members->getMembers();
        $data = array('title' => "Manager",'contents' => "pages/m-table",'page' => "Manager","links" => "main","res" => $res);
        $this->load->view('templates/dashboard-header',$data);
        $this->load->view('pages/manager-main',$data);
    }

    private function check_logged(){
        if($this->session->has_userdata('logged_in')==false){
                redirect();
        }else if($this->session->userdata('user_type')!='manager'){
            echo '<script type="text/javascript">'; 
            echo 'alert("Access Forbidden!");'; 
            echo 'window.location.href = "Error404";';
            echo '</script>';
            // $userType = $this->session->userdata('user_type');
            // if('cashier'==$userType){
            //     redirect('cashier');
            // }else if ('loanclerk'==$userType){
            //     redirect('loanclerk');
            // }else if ('manager'==$userType){
            //     redirect('manager');
            // }else{
            //     echo '<script type="text/javascript">'; 
            //     echo 'alert("Access Forbidden!");'; 
            //     echo 'window.location.href = "Error404";';
            //     echo '</script>';
            //     exit;
            // }
        }
        else{
            return true;
        }
           
    }
}

