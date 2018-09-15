<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function login(){
		//echo "hjk";die;
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$password=md5($password);
		$result=$this->db->select('')
						 ->from('user')
						 ->where('username',$username)	 
						 ->where('password',$password)
						 ->get()
						 ->row();
			return $result;

	}
	public function add(){
		
		if($this->input->post('id'))
		{	
				$data=array(
				'id'=>$this->input->post('id'),
				'username' =>$this->input->post('username'),
				'fullname'=>$this->input->post('fullname'),
				/*'password'=>$this->input->post('password'),*/
				'role'=>$this->input->post('role'),
				'email'=>$this->input->post('email')
				);
			$insertt=$this->db->replace('user', $data);

			return $insertt;
		}
		else{

			$data=array(
				'username' =>$this->input->post('username'),
				'fullname'=>$this->input->post('fullname'),
				'password'=>md5($this->input->post('password')),
				'role'=>$this->input->post('role'),
				'email'=>$this->input->post('email')
				);
			$username=$this->input->post('username');
			$result=$this->db->select('')
							 ->from('user')
							 ->where('username',$username)
							 ->get()
							 ->row();
			if(!$result)
			{
				$insertt=$this->db->insert('user',$data);
				return $insertt;
			}
		}
		
	}
	
	public function readUser(){
			$result=$this->db->select('')
						 ->from('user')
						 ->order_by('id','desc')
						 ->get()
						 ->result();
						return $result;
	}
	public function edit($id){
		$result=$this->db->select('')
					 ->from('user')
					 ->where('id',$id)
				 	 ->get()
				 	 ->row();
// echo "<pre>"; print_r($result);die;
		return $result;
		
	}
	 public function delete($id){
	 	$this->db->where('id',$id)
	 				 ->delete('user');
	 	// return $result;
		 }
}
