<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Genre extends CI_Controller
{

	public function index()
	{
		$data = array();
		$data['css'] = 'Admin';
		$data["genre"] = $this->Admin_M->Read_Genre();
		// $data["studio"] = $this->Admin_M->Read_Studio();

		$this->load->view('Admin/Template/Header_V', $data);
		$this->load->view('Admin/Contents/Genre_V', $data);
		$this->load->view('Admin/Template/Footer_V');
	}

	public function add()
	{
		$data = array();
		$data['css'] = 'Admin';
		$this->load->view('Admin/Template/Header_V', $data);
		$this->load->view('Admin/Contents/Genre_Create_V', $data);
		$this->load->view('Admin/Template/Footer_V');
	}

	public function create()
	{
		$data = array();
		$data['genre'] = $this->input->post('genre');
		$this->Admin_M->Create_Genre($data);
		redirect(site_url('Admin/Genre'));
	}

	public function edit($id)
	{
		$data = array();
		$data['css'] = 'Admin';
		$data["genre"] = $this->Admin_M->Edit_Genre($id);
		$this->load->view('Admin/Template/Header_V', $data);
		$this->load->view('Admin/Contents/Genre_Update_V', $data);
		$this->load->view('Admin/Template/Footer_V');
	}

	public function update($id)
	{
		$data = array();
		$data['genre'] = $this->input->post('genre');
		$this->Admin_M->Update_Genre($id, $data);
		redirect(site_url('Admin/Genre'));
	}

	public function delete($id)
	{
		$this->Admin_M->Delete_Genre($id);

		redirect(site_url('Admin/Genre'));
	}
}
