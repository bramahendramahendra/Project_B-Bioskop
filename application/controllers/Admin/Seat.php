<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seat extends CI_Controller {

	public function index()
	{
		$data = array();
		$data['css'] = 'Admin';
		$data['seat'] = $this->Admin_M->Read_Seat();

		$this->load->view('Admin/Template/Header_V', $data);
		$this->load->view('Admin/Contents/Seat_V', $data);
		$this->load->view('Admin/Template/Footer_V');
	}

	public function add()
	{
		$data = array();
		$data['css'] = 'Admin';

		$this->load->view('Admin/Template/Header_V', $data);
		$this->load->view('Admin/Contents/Seat_Create_V', $data);
		$this->load->view('Admin/Template/Footer_V');
	}

	public function create()
	{
		$data = array();
		$data['nomorSeat'] = $this->input->post('seat');
		$this->Admin_M->Create_Seat($data);
		redirect(site_url('Admin/Seat'));
	}

	public function edit($id)
	{
		$data = array();
		$data['css'] = 'Admin';
		$data["seat"] = $this->Admin_M->Edit_Seat($id);
		$this->load->view('Admin/Template/Header_V', $data);
		$this->load->view('Admin/Contents/Seat_Update_V', $data);
		$this->load->view('Admin/Template/Footer_V');
	}

	public function update($id)
	{
		$data = array();
		$data['nomorSeat'] = $this->input->post('seat');
		$this->Admin_M->Update_Seat($id, $data);
		redirect(site_url('Admin/Seat'));
	}

	public function delete($id)
	{
		$this->Admin_M->Delete_Seat($id);

		redirect(site_url('Admin/Seat'));
	}
}
