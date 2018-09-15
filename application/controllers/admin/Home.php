<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('username')){
			$this->adminDashboardData();
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
			$this->load->model('user_model');
			$access=$this->user_model->login();
			if($access){
				$session_data= array(
					'username'=>$access->username,
					'fullname'=>$access->fullname,
					'role'=> $access->role,
					'email'=>$access->email
					);
				$this->session->set_userdata($session_data);
				$this->adminDashboardData();
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
		/*	$this->validation();

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('admin/form');
			}*/
			/*else
			{
				*/ 
				$this->load->model('user_model');
				$insertt=$this->user_model->add();

				if ($insertt)
					$this->session->set_flashdata('success','data inserted');
				else
					
				$this->session->set_flashdata('error','insertion failed');
				$this->adminDashboardData();
			
	}


	public function adminDashboardData(){
		$this->load->model('user_model');
		$data['users']=$this->user_model->readUser();
				$data['admin_fullname'] = $this->session->userdata('fullname');
				$this->load->view('admin/adminDashboard',$data);
	}

	public function editData()
	{
		
		$this->load->model('user_model');
		$id=$this->input->get('id');
		$data['result']=$this->user_model->edit($id);
		//echo "<pre>";print_r($data['result']);die;
		$this->load->view('admin/editform',$data);
	}
	public function validation(){
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('fullname', 'Fullname', 'required');
			$this->form_validation->set_rules('role', 'Role', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
	}
	
	public function deleteData(){
		$this->load->model('user_model');
		$id=$this->input->get('id');
		$this->user_model->delete($id);
		$this->adminDashboardData();
	}

}
