<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	function __construct() {
        parent::__construct();
		if (!isset($_SESSION['ftip69_uid'])) {
			redirect('login');
			exit;
		}
	}
	public function dashboard()
	{
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->db->where('id',$_SESSION['ftip69_uid']);
		    $data['student_id']=$this->db->get('user2')->result();
			if($data['student_id'])
			{
			    $this->db->where('id',$data['student_id'][0]->student_id);
				$datak=$this->db->get('student')->result();
				 if($datak)
				 {
				  $data['batch_id']=$datak[0]->batch;
		          $this->db->where('id',$datak[0]->batch);
		          $batch= $this->db->get('batch')->result();
					if($batch)
					{
						 $data['batch_name']=$batch[0]->batch_name;
					}
					else
					{
						$data['batch_name']='';
					}
				  $this->db->where('id',$datak[0]->course);
		          $course= $this->db->get('course_category')->result();
					if($course)
					{
						 $data['course_name']=$course[0]->name;
						 $this->session->set_userdata('student_course_name', $course[0]->name);

					}
					else
					{
						$data['course_name']='';
					}
  
 			}  
			else
			{
	            $data['student_id']="";
			}
			
	        $this->load->view('dashboard',$data);
			
			$this->load->view('template/footer');
	}
}
	public function read()
	{
		$this->load->view('header');
		$this->load->view('reading_material');
	}
	public function live_course()
	{
		$this->load->view('one_sidebar');
		$this->load->view('live_course');

	}
	public function self_course()
	{
		$this->load->view('one_sidebar');
		$this->load->view('self_learning_course');
	}
	public function record()
	{
		$this->load->view('header');
		$this->load->view('recording');
	}
	
    public function edit_profile()
    {
    	$this->load->view('template/header');
		$this->load->view('template/sidebar');
    	$this->load->view('profile');
		
    }	
 	public function logout()
	{
		session_unset();
		redirect('Login');
	}
}
