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
	public function dashboard_old()
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
					}
					else
					{
						$data['course_name']='';
					}
					$data['student_id']=$data['student_id'][0]->student_id;
  
 			}  
			else
			{
	            $data['student_id']="";
			}
		

			// $data['student_id'] = $_SESSION['ftip69_uid'];
			$data['course_name'] =$data['course_name'];
			    $_SESSION['student_course_name']=$data['course_name'];
			$data['batch_name'] =$data['batch_name'];

// Get Upcomming Data 

// `start_time` != 0 AND `is_completed` = 0 "
			 $offline_session= $this->db->where('batch_id',$data['batch_id'])->where('is_deleted',0)->order_by('id','desc')->get('offline_session')->result();
$data['offline_session_data'] = '';

			 foreach ($offline_session as $offline_session_key => $offline_value) {


			 	 // $query10 = "SELECT * FROM `offline_session_log` WHERE `session_id` = $session_id;";

      //                                                       $runfetch10 = mysqli_query($con, $query10);

      //                                                       $noofrow10 = mysqli_num_rows($runfetch10);

			 	// code...
			 	$session_id = $offline_value->id;

			 	 $offline_session_log= $this->db->where('session_id',$offline_value->id)->get('offline_session_log')->result();
			 	 // $offline_session= $this->db->where('session_id','578')->get('offline_session_log')->result();


			 	 if(empty($offline_session_log))
			 	 {

			 
			 	 		$mydate=getdate($offline_value->session_date);
			 	
			 	 $offline_session_id = $offline_value->id;
			 	 $offline_session_name = $offline_value->session_name;
			 	 $offline_reading_material = $offline_value->reading_material;
			 	 $offline_session_date = $mydate['year'].'-'.$mydate['month'].'-'.$mydate['mday'].'  '.$mydate['hours'].':'.$mydate['minutes'].':'.$mydate['seconds'];

			 	 $reding_matrerial_ids = explode(',', $offline_reading_material);
			 	 // print_r($reding_matrerial_ids);
			 	 			 	 $offline_reding_material_data= $this->db->where_in('id',$reding_matrerial_ids)->get('material')->result();
			 	 			 	 if($offline_reding_material_data)
			 	 			 	 {
			 	 			 	 	$offline_reding_material_data = $offline_reding_material_data;

  
			 	 			 	 	// exit();
			 	 			 	 }
			 	 			 	 else
			 	 			 	 {
			 	 			 	 	$offline_reding_material_data = '';
			 	 			 	 }



// Offline Test


			 						 $offline_session_data['offline_session_data'][] = array(
			 	 																'sesion_id'=>$offline_session_id,
			 	 																'session_name'=>$offline_session_name,
			 	 																'reading_material'=>$offline_reading_material,
			 	 																'offline_session_date'=>$offline_session_date,
			 	 																'offline_reding_material_data'=>$offline_reding_material_data
			 	 																);
			 	 	// print_r($session_id);
			 	 }
			 	 else
			 	 {

			 
			 	 $mydate=getdate($offline_value->session_date);
			 	
			 	 $completed_session_id = $offline_value->id;
			 	 $completed_session_name = $offline_value->session_name;
			 	 $completed_reading_material = $offline_value->reading_material;
			 	  $completed_session_date = $mydate['year'].'-'.$mydate['month'].'-'.$mydate['mday'].'  '.$mydate['hours'].':'.$mydate['minutes'].':'.$mydate['seconds'];
			 	 // $completed_session_date = $mydate['month'].$mydate['mday'];

// Reding Matirial 
			 	 $reding_matrerial_ids = explode(',', $completed_reading_material);
					 	 // print_r($reding_matrerial_ids);
			 	 $completed_reding_material_data= $this->db->where_in('id',$reding_matrerial_ids)->get('material')->result();
			 	 if($completed_reding_material_data)
			 	 {
			 	 	$completed_reding_material_data = $completed_reding_material_data;
			 	 }
			 	 else
			 	 {
			 	 	$completed_reding_material_data = '';
			 	 }

// Session Resource
			 	 $completed_session_resource_ids = $offline_value->session_resource;
			 	 $complate_session_resource_id = explode(',', $completed_session_resource_ids);
			 	 $completed_session_resource_data= $this->db->where_in('id',$complate_session_resource_id)->get('offline_session')->result();
			 	 if(!empty($completed_session_resource_data))
			 	 {
			 	 	$completed_session_resource_data = $completed_session_resource_data;
			 	 	
			 	 	$completed_session_resource_data_new = [];

			 	 	foreach ($completed_session_resource_data as $key => $complate_resource_value) {


			 	 		$complate_resource_value_id = $complate_resource_value->id;
			 	 		$completed_session_resource_data= $this->db->where_in('id',$complate_resource_value_id)->get('material')->result();

			 	 		if(!empty($completed_session_resource_data))
			 	 		{
			 	 			$completed_session_resource_data_new[] = $completed_session_resource_data[0];

			 	 		}
			 	 		else
			 	 		{
			 	 			$completed_session_resource_data_new = '';
			 	 		}
			 	 			 	 		// code...
			 	 	}


			 	 }
			 	 else
			 	 {
			 	 	$completed_session_resource_data_new = [];
			 	 }
			 	 
			 	

// Recording Data start

			 	 
$data_session_ids = $offline_value->id;
$complate_video_recording_filess = [];
foreach ($offline_session_log as $key => $offline_Session_log_value) {
			 	 	if($data_session_ids == $offline_Session_log_value->session_id)
			 	 	{



			 	 		// $complate_video_recording_files_new = explode(',', $offline_Session_log_value->recording_files);
			 	 		  $complate_video_recording_files_new = array_filter(explode(',', $offline_Session_log_value->recording_files));

			 	 		// $complate_video_recording_files_new = explode(',', );
			 	 		$complate_video_recording_filess =$complate_video_recording_files_new;
			 	 		if(!empty($complate_video_recording_filess))
			 	 		{

			 	 		$count_of_video_recording = count(array_filter($complate_video_recording_filess))-1 ;
			 	 		}
			 	 		else
			 	 		{

			 	 		$count_of_video_recording = 0;
			 	 		}
			 	 		// $ids = array_filter(explode(',', $csvIdString));
			 	 	}
			 	 	else
			 	 	{
			 	 		$complate_video_recording_filess = '';
			 	 		$count_of_video_recording = 0;
			 	 		// code...
			 	 	}
			 	 	}
// Recording Data end


							
							
			 	$offline_value = $offline_value->id;	 			 	

							// echo str_repeat("Wow",13);

			 	 $completed_session_data['completed_session_data'][] = array(
			 	 																'sesion_id'=>$completed_session_id,
			 	 																'session_name'=>$completed_session_name,
			 	 																'reading_material'=>$completed_reading_material,
			 	 																'completed_session_date'=>$completed_session_date,
			 	 																'completed_reding_material_data'=>$completed_reding_material_data,
			 	 																'completed_session_resource_data'=>$completed_session_resource_data_new,
			 	 																'$offline_value'=>$offline_value,
			 	 																'complate_video_recording_files'=> array_filter($complate_video_recording_filess),
			 	 																'complate_video_recording_files_count'=> trim(str_repeat($offline_session_log[0]->session_id.',', $count_of_video_recording),',')
			 	 																);
			 	 // echo 
			 	 	// print_r($offline_session_log[0]->session_id);
			 	 	// exit();
			 	 }
			 }


// print_r($offline_session_data);

			 $data['offline_session_data'] = $offline_session_data;
			 // echo "<pre>";
			 // print_r($offline_session_data);
			 // exit();

			 $data['completed_session_data'] = $completed_session_data;

			 // print_r($data['completed_session_data']['completed_session_data'][13]['completed_session_resource_data']);
			 // exit();
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
