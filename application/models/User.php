<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
	public function login(){
		//echo "hjk";die;
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$result=$this->db->select('')
						 ->from('user')
						 ->where('username',$username)	 
						 ->where('password',$password)
						 ->get()
						 ->row();
					

			return $result;

	}
	public function add(){
		$data=array(
					'username' =>$this->input->post('username'),
					'fullname'=>$this->input->post('fullname'),
					'password'=>$this->input->post('password'),
					'role'=>$this->input->post('role'),
					'email'=>$this->input->post('email')
					);
		$this->db->insert('user',$data);
	}
	public function readUser(){
			$result=$this->db->select('')
						 ->from('user')
						 ->order_by('id','desc')
						 ->get()
						 
						 ->result();

			return $result;
	}
}
