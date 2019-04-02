<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cashier extends CI_Controller {

    public function index(){
        $this->check_logged();
        $this->main_contents();
    }



    public function error404(){
        $this->load->view('templates/error');
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
        

        $this->load->model('Register','reg');
       

        $res = $this->reg->viewMemCon($this->input->get_post('id'));

        if($res->num_rows()==0){
            $this->load->view('pages/sorry');
        }else{
            $data = array('title' => "View",'contents' => "pages/member-savings",'page' => "View Member","links" => "members","res" => $res );
            $this->load->view('templates/dashboard-header',$data);
            $this->load->view('pages/cashier-main',$data);
        }

        
    }

    public function deposit(){
        $this->check_logged();
        $this->load->model('Register','reg');
        $res = $this->reg->viewMemCon($this->input->get_post('id'));
        $data = array('title' => "Deposit",'contents' => "pages/deposit-form",'page' => "Deposits","links" => "deposit","res"=>$res );
        $this->load->view('templates/dashboard-header',$data);
        $this->load->view('pages/cashier-main',$data);
    }

    public function withdraw(){
        $this->check_logged();
        $this->load->model('Register','reg');
        $res = $this->reg->viewMemCon($this->input->get_post('id'));
        $data = array('title' => "Withdraw",'contents' => "pages/withdraw-form",'page' => "Withdraw","links" => "withdraw","res"=>$res );
        $this->load->view('templates/dashboard-header',$data);
        $this->load->view('pages/cashier-main',$data);
    }

    public function delete($id){
        $this->check_logged();
        $this->load->model('Register','register');
        $this->register->delete($id);
        redirect('cashier');
    }
    public function register_members(){
        //member profile
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

        //education
          //INSERT MEMBER ACCOUNTS
        

        $this->register->insertMember($fname,$mname,$lname,$phone,$email,$pob,$dob,$nationality,$sex,$civil,$blood,$home,$stats,$account_number,$date);

        $e_year = $this->input->post('e_year');
        $e_addr = $this->input->post('e_address');
        $e_rem = $this->input->post('e_remarks');

        if($e_year!="" && $e_addr!="" && $e_rem!=""){
            $this->register->insertElementary($account_number,$e_year,$e_addr,$e_rem);
        }


        $hs_year = $this->input->post('hs_year');
        $hs_addr = $this->input->post('hs_address');
        $hs_rem = $this->input->post('hs_remarks');

        if($hs_year!="" && $hs_addr!="" && $hs_rem!=""){
            $this->register->insertHighschool($account_number,$hs_year,$hs_addr,$hs_rem);
        }

        $c_year = $this->input->post('c_year');
        $c_addr = $this->input->post('c_address');
        $c_rem = $this->input->post('c_remarks');

        if($c_year!="" && $c_addr!="" && $c_rem!=""){
            $this->register->insertCollege($account_number,$c_year,$c_addr,$c_rem);
        }

        $p_year = $this->input->post('p_year');
        $p_addr = $this->input->post('p_address');
        $p_rem = $this->input->post('p_remarks');

        if($p_year!="" && $p_addr!="" && $p_rem!=""){
            $this->register->insertPost($account_number,$p_year,$p_addr,$p_rem);
        }

        $sp_fn = $this->input->post('sp_fn');
        $sp_mn = $this->input->post('sp_mn');
        $sp_ln = $this->input->post('sp_ln');

        $sp_year = $this->input->post('sp_year');
        $sp_month = $this->input->post('sp_month');
        $sp_day = $this->input->post('sp_day');
        $sp_dob = $sp_year."-".$sp_month."-".$sp_day;
        $sp_pos = $this->input->post('sp_pos');
        $sp_gincome = $this->input->post('sp_gincome');
        $noOfchildren = $this->input->post('noOfchildren');
        $sp_o =  $this->input->post('sp_o');

        if($sp_fn!="" && $sp_mn!="" && $sp_ln!="" && $sp_pos!="" && $sp_gincome!="" && $noOfchildren!=""){
            $this->register->insertFbg($account_number,$sp_fn,$sp_mn,$sp_ln,$sp_dob,$sp_pos,$sp_gincome,$noOfchildren,$sp_o);
        }

        $nofirm = $this->input->post('nofirm');
        $employ_address = $this->input->post('employ_address');

        $emp_year = $this->input->post('emp_year');
        $emp_month = $this->input->post('emp_month');
        $emp_day = $this->input->post('emp_day');
        $emp_dob = $emp_year."-".$emp_month."-".$emp_day;

        $em_grossIn = $this->input->post('em_grossIn');
        $em_pos = $this->input->post('em_pos');
        $em_phone = $this->input->post('em_phone');
        $em_tkhome =  $this->input->post('em_tkhome');

        if($nofirm!="" && $employ_address!="" && $em_grossIn!="" && $em_pos!="" && $em_phone!="" && $em_tkhome!=""){
            $this->register->insertEmp($account_number,$nofirm,$employ_address,$emp_dob,$em_grossIn,$em_pos,$em_phone,$em_tkhome);
        }

        $b_type = $this->input->post('b_type');
        $b_address = $this->input->post('b_address');

        $b_year = $this->input->post('b_year');
        $b_month = $this->input->post('b_month');
        $b_day = $this->input->post('b_day');
        $b_dob = $b_year."-".$b_month."-".$b_day;

        $b_grossIn = $this->input->post('b_grossIn');
        $b_own = $this->input->post('b_own');
        $b_phone = $this->input->post('b_phone');
        $b_cap =  $this->input->post('b_cap');
        $b_trade =  $this->input->post('b_trade');

        if($b_trade!="" && $b_type!="" && $b_address!="" && $b_grossIn!="" && $b_own!="" && $b_phone!="" && $b_cap!=""){
            $this->register->insertBusi($account_number,$b_type,$b_address,$b_dob,$b_grossIn,$b_own,$b_phone,$b_cap,$b_trade);
        }
        redirect('cashier');
    }
    
    public function inserDeposit(){
        $this->check_logged();
        $this->load->model('Register','register');
        $amt_shared = $this->input->post('amt_shared');
        $amt_dep = $this->input->post('amt_dep');
        $idn = $this->input->get_post('id');
        if($amt_shared!="" && $amt_dep!=""){
            $this->register->insertDeposit($idn,$amt_shared,$amt_dep);
        }
    }

    private function main_contents(){
        $this->load->model('Mem_model','members');
        $res = $this->members->getMembers();
        $data = array('title' => "Cashiering",'contents' => "pages/c-table",'page' => "Members","links" => "main","res" => $res  );
        $this->load->view('templates/dashboard-header',$data);
        $this->load->view('pages/cashier-main',$data);
    }

    private function check_logged(){
        if($this->session->has_userdata('logged_in')==false){
                redirect();
        }else if($this->session->userdata('user_type')!='cashier'){
            echo '<script type="text/javascript">'; 
            echo 'alert("Access Forbidden!");'; 
            echo 'window.location.href = "Error404";';
            echo '</script>';
            // $userType = $this->session->userdata('user_type');
            // if('admin'==$userType){
            //     redirect('admin');
            // }else if ('loan_clerk'==$userType){
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

