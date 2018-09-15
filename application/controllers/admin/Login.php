<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		if(!($this->session->has_userdata('username')))
		{
		
		$this->load->view('admin/login');
		}
		else{
			//die('ghj');
		redirect('/admin/home/adminDashboardData','refresh');
			}
	}

	
}