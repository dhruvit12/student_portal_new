<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Total_attendance extends CI_Controller {
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
                $this->load->view('template/sidebar');
                $this->db->where('id',$_SESSION['ftip69_uid']);
		$data=$this->db->get('user2')->result();
              	$ftip69_acc_student = $data[0]->acc_student;
                if ($ftip69_acc_student==1) {
                $user_id = $_SESSION['ftip69_uid'];
                $this->db->where('id',$user_id);
        	$data=$this->db->get('user2')->result();
                $student_id = $data[0]->student_id;
                $this->db->where('student_id',$student_id);
              	$data['attendance']=$this->db->get('attendance')->result();
                // echo "<pre>";print_r($data['attendance']);exit;
              
                //session name
                  $this->db->where('id',$student_id);
                                $offline_session=$this->db->get('offline_session')->result();
                                 if($offline_session)
                                 {
                                  $data['session_name']=$offline_session;
                                 }
                }
                else{
                ?>
                <script>
                window.history.back()
                window.location = '<?php echo base_url()?>';
                </script>
                <?php
                }  
                $this->load->view('total_attendance',$data);
                $this->load->view('template/footer');
        	}
}

?>