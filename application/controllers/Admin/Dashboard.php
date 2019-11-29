<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('User') == FALSE){	
			redirect(site_url('admin'));
		}
	}
	public function index()
	{
		$data = array();
		$data['css'] = 'Admin';
		$data['nama'] = $_SESSION['User']['nama'];
		// $data['nama'] = $_SESSION['User']['username'];

		$this->load->view('Admin/Template/Header_V', $data);
		$this->load->view('Admin/Contents/Dashboard_V', $data);
		$this->load->view('Admin/Template/Footer_V');
	}
}
