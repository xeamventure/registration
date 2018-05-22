<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller {

	public function basicdetails()
	{
		$this->load->view('user/basic_details');
	}

	public function fatherdetails()
	{
		$this->load->view('user/father_details');
	}

	public function paternalrelativesdetails()
	{
		$this->load->view('user/paternal_relatives_details');
	}

	public function relativesdetails()
	{
		$this->load->view('user/relatives_details');
	}

}
