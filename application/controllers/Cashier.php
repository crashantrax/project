<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cashier extends CI_Controller {

    public function index(){
        $this->check_logged();
        $this->main_contents();
    }












    //cashier functions

    public function logout(){
        session_destroy();
        redirect();
    }

    public function register(){
        $this->check_logged();
        $data = array('title' => "Cahshiering",'contents' => "pages/c-addMember",'page' => "Registration","links" => "register" );
        $this->load->view('templates/dashboard-header',$data);
        $this->load->view('pages/cashier-main',$data);
    }

    public function profile(){
        $this->check_logged();
        $data = array('title' => "View",'contents' => "pages/member-savings",'page' => "View Member","links" => "members" );
        $this->load->view('templates/dashboard-header',$data);
        $this->load->view('pages/cashier-main',$data);

    }

    public function deposit(){
        $this->check_logged();
        $data = array('title' => "Deposit",'contents' => "pages/deposit-form",'page' => "Deposits","links" => "deposit" );
        $this->load->view('templates/dashboard-header',$data);
        $this->load->view('pages/cashier-main',$data);
    }

    public function withdraw(){
        $this->check_logged();
        $data = array('title' => "Withdraw",'contents' => "pages/withdraw-form",'page' => "Withdraw","links" => "withdraw" );
        $this->load->view('templates/dashboard-header',$data);
        $this->load->view('pages/cashier-main',$data);
    }

    public function delete($id){
        $this->load->model('Register','register');
        $this->register->delete($id);
        redirect('cashier');
    }
    public function register_members(){
        //member profile

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

        //education

        $e_year = $this->input->post('e_year');
        $e_addr = $this->input->post('e_address');
        $e_rem = $this->input->post('e_remarks');
        $hs_year = $this->input->post('hs_year');
        $hs_addr = $this->input->post('hs_address');
        $hs_rem = $this->input->post('hs_remarks');
        $c_year = $this->input->post('c_year');
        $c_addr = $this->input->post('c_address');
        $c_rem = $this->input->post('c_remarks');
        $p_year = $this->input->post('p_year');
        $p_addr = $this->input->post('p_address');
        $p_rem = $this->input->post('p_remarks');

        if($e_year!="" && $e_addr!="" && $e_rem!=""){
            //insert
        }
        else{
            echo "";
        }

        //INSERT MEMBER ACCOUNTS

        $this->register->register_profile($fname,$mname,$lname,$phone,$email,$pob,$dob,$nationality,$sex,$civil,$blood,$home,$stats,$account_number,$date);



    }












    private function main_contents(){
        $this->load->model('Mem_model','members');
        $res = $this->members->getMembers();
        $data = array('title' => "Cahshiering",'contents' => "pages/c-table",'page' => "Members","links" => "main","res" => $res  );
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

