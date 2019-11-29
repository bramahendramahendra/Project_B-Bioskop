<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sign_Up extends CI_Controller
{

	public function index()
	{

		$data = array();
		$data['css'] = 'SignIn';

		$this->load->view('Admin/Template/Header_V', $data);
		$this->load->view('Admin/Contents/Sign_Up_V');
		$this->load->view('Admin/Template/Footer_V');
	}

	public function Process()
	{
		# code...
		if ($this->input->post('password') == $this->input->post('confirm_password')) {
			$check = $this->Admin_M->Check_Sign_Up($this->input->post('username'), $this->input->post('email'));
			if ($check == False) {
				$data = array();
				$data['nama'] = $this->input->post('nama');
				$data['username'] = $this->input->post('username');
				$data['email'] = $this->input->post('email');
				$data['password'] = md5($this->input->post('password'));
				$this->Admin_M->Sign_Up($data);
				$this->session->set_flashdata('Success', 'Akun anda berhasil terdaftar.');
			} else {
				$this->session->set_flashdata('Failed', 'Username atau Email sudah digunakan.');
			}
		} else {
			$this->session->set_flashdata('Failed', 'Password dan Confirm password tidak sesuai.');
		}
		redirect(site_url('Admin/Sign_Up'));
	}
}
