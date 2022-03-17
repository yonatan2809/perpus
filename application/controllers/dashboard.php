<?php

class Dashboard Extends CI_Controller{

	public function index()
	{
		$this->load->view('v_dashboard');
	}
}