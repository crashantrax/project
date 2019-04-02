<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Model {

public function insertMember($fname,$mname,$lname,$phone,$email,$pob,$dob,$nationality,$sex,$civil,$blood,$home,$stats,$acc,$date,$username,$password,$usertype){
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
                'date_created' => $date,

                'Username' => $Username,
                'Password' => $Password,
                'Usertype' => $Usertype
            );
            $this->db->insert('member_account', $data);
        }



}