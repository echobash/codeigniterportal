<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('employee/login');
		
	}
	public function employeeLogin()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('employee/login');
		}
		else
		{
			$this->load->model('employee_model');
			$access=$this->employee_model->login();
			if($access)
			{
				$session_data= array(
					'username'=>$access->username,
					'fullname'=>$access->fullname,
					'role'=> $access->role,
					'email'=>$access->email
					);
				$this->session->set_userdata($session_data);
				$data['employee_fullname'] = $this->session->userdata('fullname');
				$this->load->view('employee/employeeDashboard',$data);
			}
			else{

			}
		}
	}//end of employeeLogin function
	public function applyForLeave(){
		$this->load->view('employee/leaveForm.php');
	}
	public function submitLeaveForm(){
		$this->load->model('employee_model');
		$this->employee_model->addLeaveDetails();
	}
}
