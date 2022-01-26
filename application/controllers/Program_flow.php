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
		$this->load->view('one_sidebar');

		if('Data Science Pro'==$_SESSION['student_course_name'])
		{
			$this->load->view('program_flow');
		}
		if('AI'==$_SESSION['student_course_name'])
		{
			$this->load->view('program_flow/advance_ai_program');
		}
		if('Data Science'==$_SESSION['student_course_name'])
		{
			$this->load->view('program_flow/Data-Science-Masters-Program');
		}
		if('Business Intelligence'==$_SESSION['student_course_name'])
		{
			$this->load->view('program_flow/business_intelligence_program');
		}
		if('Digital Marketing'==$_SESSION['student_course_name'])
		{
			$this->load->view('program_flow/digital_marketing_with_analytics_program');
		}
		if('Data Science Masters'==$_SESSION['student_course_name'])
		{
			$this->load->view('program_flow/data_science_with_r_program');
			$this->load->view('program_flow/data_science_with_python_program');
			$this->load->view('program_flow/powerbi_certification_program');
			$this->load->view('program_flow/data_visualization_with_tableau_program');
		}
	}

}
?>    