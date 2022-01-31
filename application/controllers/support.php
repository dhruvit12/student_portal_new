<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Support extends CI_Controller {
	function __construct() {
        parent::__construct();
		if (!isset($_SESSION['ftip69_uid'])) {
			redirect('login');
			exit;
		}
	}
	function index()
	{
		// $this->load->view('template/header');
		$this->load->view('template/top_header');
	
		// $this->load->view('support');
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

					// Get Tbl Installation tips data base on course id 
					$this->db->where('course_id',$data['session_list'][0]->course);
					$data['installation_data']=$this->db->get('tbl_installation_tips')->result();
					
					if($data['name'])
					{
						$data['course_list']=$data['name'];
						$data['installation_tips_data']=$data['installation_data'];
					}
					else
					{
						$data['course_list']="";
						$data['installation_tips_data']="";
					}
					
				 }
				 else
				 {
					$data['session_list']="";
						$data['installation_tips_data']="";
				 }
			 }
		}
		else
		{
            $data['student_id']="";
		}
	        	 $this->load->view('support',$data);

	 }
	 public function add_assistance()
	 {
	 	// print_r($_SESSION['ftip69_uid']);exit;
	 	 $data = [
            'student_id' =>$_SESSION['ftip69_uid'] ,
            'category' => $this->input->post('category'),
            'priority' =>$this->input->post('priority'),
            'comment' => $this->input->post('comment'),
         ];
        $success=$this->db->insert('support', $data); 
        if($success)
        {
        	$this->session->set_flashdata('success', 'Data Uploaded Successfully!');
        	 redirect('support');
        }
        else
        {
        	 $this->session->set_flashdata('success', 'Data Upload Failed!');
        	 redirect('support');
    
        }
     }
	}

?>