<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mem_model extends CI_Model {

        public function getMembers() {
        	$query = $this->db->get('member_account');
        	return $query;
	}

        public function getManager() {
                $query = $this->db->get('staff_profile');
                return $query;
        }

        public function getloan() {
                $query = $this->db->get('loanlogs');
                return $query;
        }

        public function getBiz(){
                $query = $this->db->get('member_business');
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