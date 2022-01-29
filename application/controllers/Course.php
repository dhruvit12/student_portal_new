<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {
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
		$this->db->where('id',$_SESSION['ftip69_uid']);
		$data['student_id']=$this->db->get('user2')->result();

		$this->db->where('id',$data['student_id'][0]->student_id);
		$student_data=$this->db->get('student')->result();

		$student_course_id = $student_data[0]->course;

		$data['live_course_data'] = $this->db->where('course_id',$student_course_id)->where('is_deleted',0)->where('type',1)->order_by('id','asc')->get('tbl_sub_course')->result();
		$data['self_course_data'] = $this->db->where('course_id',$student_course_id)->where('is_deleted',0)->where('type',2)->order_by('id','asc')->get('tbl_sub_course')->result();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('course',$data);
		$this->load->view('template/footer');

	}
	public function recording()
	{
		$this->load->view('template/header');
		$this->load->view('template/top_navigation');
		
		$this->load->view('template/sidebar');

		$this->db->where('id',$_SESSION['ftip69_uid']);
		$data['student_id']=$this->db->get('user2')->result();
		if($data['student_id'])
		{
		//	get student_id 
		
		    $this->db->where('id',$data['student_id'][0]->student_id);
			$data['batch_id']=$this->db->get('student')->result();
			 if($data['batch_id'])
			 {
				 //join two table
			    $this->db->select('*');
				$this->db->from('offline_session_log');
				$this->db->join('offline_session','offline_session.batch_Id = offline_session_log.session_id');
				$this->db->where('offline_session_log.session_id', $data['batch_id'][0]->batch); 
				$this->db->where('offline_session_log.is_completed',1); 
				$data['session_list'] = $this->db->get()->result();


                // echo "<pre>";print_r($data['session_list']);exit;
				if($data['session_list'])
				 {
					 	//get course names
		            $this->db->where('id',$data['session_list'][0]->course);
					$data['name']=$this->db->get('course')->result();
					// echo "<pre>";print_r($data['name']);exit;
					if($data['name'])
					{
						$data['course_name']=$data['name'];
					}
					else
					{
						$data['course_name']="";
					}
					
				 }
				 else
				 {
					$data['session_list']="";
				 }
			 }
		}
		else
		{
            $data['student_id']="";
		}
	        	$this->load->view('recording',$data);
			    $this->load->view('template/footer');
	}
}
	?>