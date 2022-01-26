<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assignment extends CI_Controller {
	function __construct() {
        parent::__construct();
		if (!isset($_SESSION['ftip69_uid'])) {
			redirect('login');
			exit;
		}
	}
	function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/top_navigation');
		
		$this->load->view('template/sidebar');
		$this->load->view('assignment');
		$this->load->view('template/footer');
		
	}
}

?>