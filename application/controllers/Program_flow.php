<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program_flow extends CI_Controller {
	
	function __construct() {
        parent::__construct();
		if (!isset($_SESSION['ftip69_uid'])) {
			redirect('login');
			exit;
		}
	}
    public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
        
		if('Data Science Pro'==$this->session->userdata('student_course_name'))
		{
			$this->load->view('program_flow/data-science-pro-program');
		}
		if('AI'==$this->session->userdata('student_course_name'))
		{
			$this->load->view('program_flow/advance_ai_program');
		}
		if('Data Science'==$this->session->userdata('student_course_name'))
		{
			$this->load->view('program_flow/Data-Science-Masters-Program');
		}
		if('Business Intelligence'==$this->session->userdata('student_course_name'))
		{
			$this->load->view('program_flow/business_intelligence_program');
		}
		if('Digital Marketing'==$this->session->userdata('student_course_name'))
		{
			$this->load->view('program_flow/digital_marketing_with_analytics_program');
		}
		if('Data Science Masters'==$this->session->userdata('student_course_name'))
		{
			$this->load->view('program_flow/data_science_with_r_program');
			$this->load->view('program_flow/data_science_with_python_program');
			$this->load->view('program_flow/powerbi_certification_program');
			$this->load->view('program_flow/data_visualization_with_tableau_program');
		}
	}

}
?>    