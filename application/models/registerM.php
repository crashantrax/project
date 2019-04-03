<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class registerM extends CI_Model {


        public function register($username,$password,$usertype){
            $data = array(
                'Username' => $username,
                'Password' => $password,
                'Usertype' => $usertype,
            );
            $this->db->insert('staff_acount', $data);
        }

        public function getUserID($username,$password){
            $this->db->where('Username',$username);
            $this->db->where('Password',$password);
            return $this->db->get('staff_acount');
        }


        public function addemployee($id,$fname,$mname,$lname,$phone,$pob,$dob,$nationality,$sex,$civil,$blood,$home){
            $data = array(
                'UserAccountID' => $id,
                'FirstName' => $fname,
                'MiddleName' => $mname,
                'LastName' => $lname,
                'TelNo' => $phone,
                'PlaceofBirth' => $pob,
                'DOB' => $dob,
                'Nationality' => $nationality,
                'Sex' => $sex,
                'CivilStatus' => $civil,
                'BloodType' => $blood,
                'Address' => $home,
            );
            $this->db->insert('staff_profile', $data);
            redirect('manager');
        }
}