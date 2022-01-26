<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {
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
		$this->load->view('template/top_navigation');
		
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
		}
		 $this->load->view('quiz',$data);
		$this->load->view('template/footer');
	}
	public function mcq_test()
	{
		// $this->load->view('elements/header');
		// $this->load->view('elements/compact_sidebar_admin');
		$data['id']=$this->uri->segment(2);
	    $this->load->view('test/mcq-test-view',$data);
		// $this->load->view('elements/footer');
	 }
	 public function mcq_test_result()
	 {
	
		$data['id']=$this->uri->segment(2);
	    $this->load->view('test/mcq-test-result',$data);
	 
	 }
	//  public function mcq_test_list()
	//  {
		 
	// 	$this->load->view('one_sidebar');
	// 	$this->load->view('course_header');
	//     $this->load->view('test/mcq-test-list');
	 
	//  }
	//  public function add_test()
	//  {
	// 	$this->load->view('one_sidebar');
	// 	$this->load->view('course_header');
	//     $this->load->view('test/add-test');
	//  }
	 
}
?>