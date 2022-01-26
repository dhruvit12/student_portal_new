<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	// function __construct() {
    //     parent::__construct();
	// 	if (!isset($_SESSION['ftip69_uid'])) {
	// 		redirect('login');
	// 		exit;
	// 	}
	// }
    public function index()
	{
		// $this->load->view('dbcon');
	
		$this->load->view('login');
	}

}
?>    