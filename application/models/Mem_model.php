<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mem_model extends CI_Model {


        public function loan(){
                $query = $this->db->get('loantype');
                return $query;
        }

        public function getMembers() {
        	$query = $this->db->get('members');
        	return $query;
	}

        public function getMembersJoin($id) {
                $this->db->where('MemberAccountID',$id);
                $query = $this->db->get('viewmemberjoin');
                return $query;
        }
        public function viewContribution ($id){
             $this->db->where('MemberAccountID',$id);
             $query1 = $this->db->get('contribution ');
             return $query1 ;
        }


        public function getManager() {
                $query = $this->db->get('staff_profile');
                return $query;
        }

        public function getloan($id) {
                $this->db->where('MemberAccountID',$id);
                $query = $this->db->get('loanlogs');
                return $query;
        }

        public function getBiz($status){
                $this->db->where('MemberAccountID',$status);
                $query = $this->db->get('member_business');
                return $query;
        }

        public function getReview($status){
                $this->db->where('MemberAccountID',$status);
                $query = $this->db->get('members');
                return $query;
        }

	public function getEduc($profileID) {
        	$this->db->where('user_account_id',$profileID);
        	$query = $this->db->get('tbluser_education');
        	return $query;
	}
	public function getFbg($profileID) {
        	$this->db->where('user_account_id',$profileID);
        	$query = $this->db->get('tbluser_family_bg');
        	return $query;
	}
	public function getBus($profileID) {
        	$this->db->where('user_account_id',$profileID);
        	$query = $this->db->get('tbluser_business');
        	return $query;
	}
	public function getEmp($profileID) {
        	$this->db->where('user_account_id',$profileID);
        	$query = $this->db->get('tbluser_employment');
        	return $query;
	}
}