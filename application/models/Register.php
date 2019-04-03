<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Model {



	public function delete($id){
		$this->db->query("DELETE FROM member_account WHERE MemberAccountID =".$id);
		$this->db->query("DELETE FROM member_elementary WHERE MemberAccountID =".$id);
		$this->db->query("DELETE FROM member_highschool WHERE MemberAccountID =".$id);
		$this->db->query("DELETE FROM member_college WHERE MemberAccountID =".$id);
		$this->db->query("DELETE FROM member_postgrad WHERE MemberAccountID =".$id);
		$this->db->query("DELETE FROM family_info WHERE MemberAccountID =".$id);
		$this->db->query("DELETE FROM user_employment WHERE MemberAccountID =".$id);
		$this->db->query("DELETE FROM member_business WHERE MemberAccountID =".$id);
        $this->db->query("DELETE FROM member_withdrawallogs WHERE MemberAccountID` =".$id);
        $this->db->query("DELETE FROM member_sharelogs WHERE MemberAccountID` =".$id);
        $this->db->query("DELETE FROM member_depositlogs WHERE MemberAccountID` =".$id);
        $this->db->query("DELETE FROM member_contribution WHERE MemberAccountID` =".$id);
	}
	public function insertMember($fname,$mname,$lname,$phone,$email,$pob,$dob,$nationality,$sex,$civil,$blood,$home,$stats,$acc,$date){
            $data = array(
                'FirstName' => $fname,
                'MiddleName' => $mname,
                'LastName' => $lname,
                'TelNo' => $phone,
                'email' => $email,
                'PlaceofBirth' => $pob,
                'DOB' => $dob,
                'Nationality' => $nationality,
                'Sex' => $sex,
                'CivilStatus' => $civil,
                'BloodType' => $blood,
                'Address' => $home,
                'Status'=> $stats,
                'account_number' => $acc,
                'date_created' => $date
            );
            $this->db->insert('member_account', $data);
        }

        public function insertElementary($acc,$e_year,$e_addr,$e_rem){
        	$id = $this->db->query("SELECT * FROM member_account WHERE account_number = ".$acc)->row('MemberAccountID');

            $data = array(
                'MemberAccountID' => $id,
                'ElementaryDate' => $e_year,
                'CollegeAddressElementary' => $e_addr,
                'ElementaryRemarks' => $e_rem
            );
            $this->db->insert('member_elementary', $data);
    	}
    	public function insertHighschool($acc,$e_year,$e_addr,$e_rem){
        	$id = $this->db->query("SELECT * FROM member_account WHERE account_number = ".$acc)->row('MemberAccountID');

            $data = array(
                'MemberAccountID' => $id,
                'HighschoolDate' => $e_year,
                'HighschoolAddress' => $e_addr,
                'HighschoolRemarks' => $e_rem
            );
            $this->db->insert('member_highschool', $data);
    	}

        public function insertBusinessInfo($typB,$cap,$grossin){
            $id = $this->db->query("SELECT * FROM member_account WHERE account_number = ".$acc)->row('MemberAccountID');

            $data = array(
                'TypeofBusiness' => $typB,
                'Capital' => $cap,
                'GrossIncome' => $grossin,
            );
            $this->db->insert('member_business', $data);
        }


    	public function insertCollege($acc,$e_year,$e_addr,$e_rem){
        	$id = $this->db->query("SELECT * FROM member_account WHERE account_number = ".$acc)->row('MemberAccountID');

            $data = array(
                'MemberAccountID' => $id,
                'CollegeDate' => $e_year,
                'CollegeAddress' => $e_addr,
                'CollegeRemarks' => $e_rem
            );
            $this->db->insert('member_college', $data);
    	}
    	public function insertPost($acc,$e_year,$e_addr,$e_rem){
        	$id = $this->db->query("SELECT * FROM member_account WHERE account_number = ".$acc)->row('MemberAccountID');

            $data = array(
                'MemberAccountID' => $id,
                'PostGradDate' => $e_year,
                'PostGradAddress' => $e_addr,
                'PostGradRemarks' => $e_rem
            );
            $this->db->insert('member_postgrad', $data);
    	}

    	public function insertFbg($acc,$sp_fn,$sp_mn,$sp_ln,$sp_dob,$sp_pos,$sp_gincome,$noOfchildren,$sp_o){
        	$id = $this->db->query("SELECT * FROM member_account WHERE account_number = ".$acc)->row('MemberAccountID');

            $data = array(
                'MemberAccountID' => $id,
                'spouse_fn' => $sp_fn,
                'spouse_mn' => $sp_mn,
                'spouse_ln' => $sp_ln,
                'Occupation' => $sp_o,
                'CapitalGrossIncome' => $sp_gincome,
                'DateofBirth' => $sp_dob,
                'Position' => $sp_pos,
                'NoofChildren' => $noOfchildren

            );
            $this->db->insert('family_info', $data);
    	}
    	public function insertEmp($acc,$nofirm,$employ_address,$emp_dob,$em_grossIn,$em_pos,$em_phone,$em_tkhome){
    		$id = $this->db->query("SELECT * FROM member_account WHERE account_number = ".$acc)->row('MemberAccountID');

            $data = array(
                'MemberAccountID' => $id,
                'NameofFirm' => $nofirm,
                'Address	' => $employ_address,
                'DateofEmploymentStarted' => $emp_dob,
                'GrossIncome' => $em_grossIn,
                'Position' => $em_pos,
                'TelNo' => $em_phone,
                'NetTakeHomePay' => $em_tkhome

            );
            $this->db->insert('user_employment', $data);

    	}
    	public function insertBusi($acc,$b_type,$b_address,$b_dob,$b_grossIn,$b_own,$b_phone,$b_cap,$b_trade){
    		$id = $this->db->query("SELECT * FROM member_account WHERE account_number = ".$acc)->row('MemberAccountID');

            $data = array(
                'MemberAccountID' => $id,
                'TypeOfBusiness' => $b_type,
                'Address	' => $b_address,
                'Ownership	' => $b_own,
                'Capital' => $b_cap,
                'TradeName' => $b_trade,
                'TelNo' => $b_phone,
                'YearStarted' => $b_dob,
                'GrossIncome' => $b_grossIn

            );
            $this->db->insert('member_business', $data);

    	}
        public function viewProfile($id){
             $this->db->where('MemberAccountID',$id);
             $query1 = $this->db->get('members');
             return $query1 ;
        }
        public function viewContribution ($id){
             $this->db->where('MemberAccountID',$id);
             $query1 = $this->db->get('contribution ');
             return $query1 ;
        }
    	public function viewWithdraws($id){
            $this->db->where('MemberAccountID',$id);
            $query1 = $this->db->get('withdraw');
            return $query1 ;
    	}

        public function viewDeposits($id){
            $this->db->where('MemberAccountID',$id);
            $query2 =  $this->db->get('deposits');
            return $query2;
        }
        public function viewShares($id){
            $this->db->where('MemberAccountID',$id);
            $query2 =  $this->db->get('shares');
            return $query2;
        }
        public function getAge($date){
            return $this->db->query("Call determineAge('".$date."')");
        }
        public function getElem($id){
            return $this->db->get('member_elementary');

        }
        public function getHs($id){
            return $this->db->get('member_highschool');

        }
        public function getC($id){
            return $this->db->get('member_college');

        }
         public function getP($id){
            return $this->db->get('member_postgrad');

        }
            

        public function insertDeposit($acc,$amt_shared,$amt_dep){
            $id = $this->db->query("SELECT * FROM member_account WHERE MemberAccountID = ".$acc)->row('MemberAccountID');
                $data1 = array(
                'MemberDepositAmount' => $amt_dep,
                'PaymentDate' => date('Y-m-d'),
                'MemberAccountID' => $id
                );
                $data2 = array(
                'MemberSharesAmount' => $amt_shared,
                'PaymentDate' => date('Y-m-d'),
                'MemberAccountID' => $id
                );
                $this->db->insert('member_depositlogs', $data1);
                $this->db->insert('member_sharelogs', $data2);
            
            
            redirect('cashier');
        }
<<<<<<< HEAD
        public function insertWithdraw($amnt,$acc){
            $id = $this->db->query("SELECT * FROM member_account WHERE MemberAccountID = ".$acc)->row('MemberAccountID');
            $data = array(
                'WithdrawalAmount' => $amnt,
                'Date' => date('Y-m-d'),
                'MemberAccountID' => $id
                );
               $this->db->insert('member_withdrawallogs', $data);

=======

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
>>>>>>> 8610e5eb06038423accb6fda463baba87fe8e92c
        }
}




