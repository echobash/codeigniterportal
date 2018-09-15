<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {
		public function login(){
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$password=md5($password);
		$result=$this->db->select('')
						 ->from('user')
						 ->where('username',$username)
						 ->where('password',$password)
						 ->where('role',"user")
						 ->get()
						 ->row();
		return $result;
									}
		public function addLeaveDetails(){
			$worktype=$this->input->post('worktype');
			$noOfLeaves=$this->input->post('noOfLeaves');
			$reason=$this->input->post('reason');
			echo "worktype=$worktype";
			echo "noOfLeaves=$noOfLeaves";
			echo "reason=$reason";die;

		}








}//end of class Employee_model