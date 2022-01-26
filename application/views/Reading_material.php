<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reading_material extends CI_Controller {
	function __construct() {
        parent::__construct();
		if (!isset($_SESSION['ftip69_uid'])) {
			redirect('login');
			exit;
		}
	}
	function download_material()
	{
        $this->load->view('dbcon.php');
		$this->load->view('classes/download-material');
	}
	function download_solution()
	{
		$this->load->view('dbcon.php');
		$this->load->view('utility/download-material');
	}
}

?>