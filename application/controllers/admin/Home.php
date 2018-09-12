<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('username')){
			$this->dasboardData();
		}
		else{
		$this->load->view('admin/login');
	}
		
	}


	public function adminLogin(){
		
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
				$this->dasboardData();
			}
			else{
				$this->session->set_flashdata('error','Wrong username and password');
				redirect(base_url('admin/login'));
			}
		}

		
	}

	public function enter(){

		$data=array();
		$username=$this->session->userdata('username');
		$data['user_name']=$username;
		if($username!='')
		{
			 $this->load->view('admin/adminDashboard',$data);
		}
		else
			redirect(base_url('admin/login'));
}
		public function logout(){
			$this->session->sess_destroy();
			redirect(base_url('admin/login'));
		}
		public function addemployee(){
			$this->load->view('admin/form');
		}
		public function add(){		
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('fullname', 'Fullname', 'required');
			$this->form_validation->set_rules('role', 'Role', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('admin/form');
			}
			else
			{
				$this->load->model('user');
				$this->user->add();
				$this->dasboardData();
				

			}
	}


	public function dasboardData(){
		$this->load->model('user');
		$data['users']=$this->user->readUser();
				$data['admin_fullname'] = $this->session->userdata('fullname');

				// redirect('admin/home','$data');
				
				$this->load->view('admin/adminDashboard',$data);

	}
		

}
