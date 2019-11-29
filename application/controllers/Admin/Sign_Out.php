<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sign_Out extends CI_Controller
{

	public function index()
	{
		// destroy session
		$this->session->sess_destroy();
		redirect(site_url('admin'));
	}

}
