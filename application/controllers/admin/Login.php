<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		$this->load->view('admin/login');
	}

	/*public function adminLogin(){
		
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/login');
		}
		else
		{
			$this->load->model('user');
			$access=$this->user->login();
			if($access){
				$session_data= array(
					'username'=>$access->username,
					'fullname'=>$access->fullname,
					'role'=> $access->role,
					'email'=>$access->email
					);
				$this->session->set_userdata($session_data);
				$data['users']=$this->user->readUser();
				$data['admin_fullname'] = $this->session->userdata('fullname');

				// redirect('admin/home','$data');
				
				$this->load->view('admin/adminDashboard',$data);
			}
			else{
				$this->session->set_flashdata('error','Wrong username and password');
				redirect(base_url('admin/login'));
			}
		}

		
	}*/


}