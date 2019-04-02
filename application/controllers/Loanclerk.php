<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Loanclerk extends CI_Controller {

	public function index(){
		$this->check_logged();
      	$this->main_contents();
    }
    //menu options

    public function logout(){
    	session_destroy();
    	redirect();
    }

   

    public function error404(){
        $this->load->view('templates/error');
    }

    public function profile(){
        $this->check_logged();

        $this->load->model('Mem_model','loanclerk');
        
        $res = $this->loanclerk->getManager();
        $data = array('title' => "LoanClerk",'contents' => "pages/profile-table",'page' => "Members","links" => "main","res" => $res  );
        $this->load->view('templates/dashboard-header',$data);
        $this->load->view('pages/loan-main',$data);
    }

    private function main_contents(){
        $this->load->model('Mem_model','members');
        $res = $this->members->getMembers();
        $data = array('title' => "LoanClerk",'contents' => "pages/l-table",'page' => "LoanClerk","links" => "main","res" => $res);
        $this->load->view('templates/dashboard-header',$data);
        $this->load->view('pages/loan-main',$data);
    }

    public function cstatus(){
        $this->check_logged();

        $this->load->model('Mem_model','loanclerk');

        $res = $this->loanclerk->getBiz($this->input->get_post('id'));
        if($res->num_rows()==0){
            $this->load->view('pages/sorry');
        }else{
            $data = array('title' => "Members",'contents' => "pages/status-table",'page' => "Members","links" => "main","res" => $res  );
            $this->load->view('templates/dashboard-header',$data);
            $this->load->view('pages/loan-main',$data);
        }
    }

    public function apply(){
        $this->check_logged();

        $this->load->model('Mem_model','loanclerk');

        $res1 = $this->loanclerk->loan();

        $res = $this->loanclerk->getReview($this->input->get_post('id'));
        if($res->num_rows()==0){
            $this->load->view('pages/sorry');
        }else{
            $data = array('title' => "Apply : Cooperative Loan",'contents' => "pages/apply-loan",'page' => "Review","links" => "main","res" => $res, "res1" => $res1);
            $this->load->view('templates/dashboard-header',$data);
            $this->load->view('pages/loan-main',$data);
        }
    }

    private function edit(){
        $this->load->view('pages/edit');
    }

    public function inserLoan(){
        $this->check_logged();
        $this->load->model('Register','register');
        $acc_num = $this->input->post('acc_num');
        $loan = $this->input->post('loan');
        $type = $this->input->post('type');
        $idn = $this->input->get_post('id');
        if($acc_num!="" && $loan!="" && $type!=""){
            $this->register->insertLoan($idn,$acc_num,$loan,$type);
        }
    }

    private function check_logged(){
        if($this->session->has_userdata('logged_in')==false){
                redirect();
        }else if($this->session->userdata('user_type')!='loanclerk'){
            echo '<script type="text/javascript">'; 
            echo 'alert("Access Forbidden!");'; 
            echo 'window.location.href = "Error404";';
            echo '</script>';
        }
        else{
            return true;
        }
           
    }
}

