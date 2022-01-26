<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot extends CI_Controller {
	
public function forgot_password()
	{
		$this->load->view('forgot_password');
	}
}
?>