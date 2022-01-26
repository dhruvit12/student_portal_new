<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {
	function __construct() {
        parent::__construct();
		if (!isset($_SESSION['ftip69_uid'])) {
			redirect('login');
			exit;
		}
	}
    public function play(){
        $this->load->view('template/top_header');
        $this->load->view('classes/play-class-recording');
        $this->load->view('template/footer');
    }
}
?>