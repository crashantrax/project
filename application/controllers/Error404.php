<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Error404 extends CI_Controller {

	public function index(){
      	$this->main_contents();
    }




    private function main_contents(){
        $this->load->view('templates/error');
    }

}