<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Loanapp extends CI_Model {



    public function insertLoan($acc,$acc_num,$loan,$type){
            $id = $this->db->query("SELECT * FROM member_account WHERE MemberAccountID = ".$acc)->row('MemberAccountID');
            $count =  $this->db->query("SELECT * FROM loanapply WHERE MemberAccountID = $id ");
            $res = $count->num_rows();
            if($res==0){
                $data = array(
                'account_number' => $acc_num,
                'loan' => $loan,
                'loantype' => $type,
                'MemberAccountID'=>$id

                );
                $this->db->insert('loanapply', $data);
            }else{
                echo "Success! Loan Application Submitted";
            
            }
            redirect('loanclerk');
        }
}