<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Installation_pro extends CI_Controller {
	
	function __construct() {
        parent::__construct();
		if (!isset($_SESSION['ftip69_uid'])) {
			redirect('login');
			exit;
		}
	}
    public function data_science_pro()
	{
		  // $this->db->where('course_id',$id);
		// $data['installation_tips_data']=$this->db->get('fingertips_intallation_tips')->result();
			$this->load->view('template/top_header');
		    $this->load->view('installation_tips/data_science_pro');
	}
}
?>   