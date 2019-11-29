<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sign_In extends CI_Controller
{

	public function index()
	{

		$data = array();
		$data['css'] = 'SignIn';

		$this->load->view('Admin/Template/Header_V', $data);
		$this->load->view('Admin/Contents/Sign_In_V');
		$this->load->view('Admin/Template/Footer_V');
	}

	public function Process()
	{
		# code...
		$data = array();
		$data['username'] = $this->input->post('username');
		$check = $this->Admin_M->Sign_In($data);
		if ($check == TRUE) {
			$data['password'] = md5($this->input->post('password'));
			$check = $this->Admin_M->Sign_In($data);
			if ($check == TRUE) {
				$data = array();
				$data['nama'] = $check->nama;
				$data['username'] = $check->username;
				$data['email'] = $check->email;
				$this->session->set_userdata('User', $data);
				redirect(site_url('Admin/Dashboard'));
			} else {
				$this->session->set_flashdata('Failed', 'Password anda salah.');
			}
		} else {
			$this->session->set_flashdata('Failed', 'Username tidak ditemukan.');
		}
		redirect(site_url('Admin/Sign_In'));
	}
}
