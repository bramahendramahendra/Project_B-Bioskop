<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cinema extends CI_Controller {

	public function index()
	{
		$data = array();
		$data['css'] = 'Admin';
		$data['cinema'] = $this->Admin_M->Read_Cinema();

		$this->load->view('Admin/Template/Header_V', $data);
		$this->load->view('Admin/Contents/Cinema_V', $data);
		$this->load->view('Admin/Template/Footer_V');

	}

	public function Add()
	{
		$data = array();
		$data['css'] = 'Admin';
		$data['studio'] = $this->Admin_M->Read_Studio();
		
		$this->load->view('Admin/Template/Header_V', $data);
		$this->load->view('Admin/Contents/Cinema_Create_V', $data);
		$this->load->view('Admin/Template/Footer_V');
	}

	public function Create()
	{

		$data = array();
		$data['namaCinema'] = $this->input->post('nama_cinema');
		$data['lokasi'] = $this->input->post('lokasi');

		$id = $this->Admin_M->Create_Cinema($data);

		$data = array();
		$data['idCinema'] = 'C-' . $id;

		$this->Admin_M->Update_Cinema($id, $data);

		$data1 = array();
		foreach ($this->input->post('studio') as $value) {
			$data1[] = array(
				'idCinema'  	=> $data['idCinema'],
				'idStudio'  	=> $value
			);
		}

		$this->Admin_M->Create_Cinema_Studio($data1);

		redirect(site_url('Admin/Cinema'));
	}

	public function Details($id)
	{
		$data = array();
		$data['css'] = 'Admin';
		$data['cinema'] = $this->Admin_M->Details_Cinema($id);
		$data['studio'] = $this->Admin_M->Details_Cinema_Studio($id);

		$this->load->view('Admin/Template/Header_V', $data);
		$this->load->view('Admin/Contents/Cinema_Details_V', $data);
		$this->load->view('Admin/Template/Footer_V');
	}

	public function Edit($id)
	{
		// echo $id;die;
		$data = array();
		$data['css'] = 'Admin';
		$data['cinema'] = $this->Admin_M->Details_Cinema($id);
		$data['studio'] = $this->Admin_M->Details_Cinema_Studio($id);
		$data['all_studio'] = $this->Admin_M->Read_Studio();

		// echo $data['cinema']->id;die;
		$this->load->view('Admin/Template/Header_V', $data);
		$this->load->view('Admin/Contents/Cinema_Update_V', $data);
		$this->load->view('Admin/Template/Footer_V');
	}

	public function Update($id)
	{
		// echo $id;die;
		$data = array();
		$data['namaCinema'] = $this->input->post('nama_cinema');
		$data['lokasi'] = $this->input->post('lokasi');
		
		$this->Admin_M->Update_Cinema($id, $data);

		$cinema = 'C-' . $id;

		$this->Admin_M->Delete_cinema_studio($cinema);
		
		$data = array();
		foreach ($this->input->post('studio') as $value) {
			$data[] = array(
				'idCinema'  	=> $cinema,
				'idStudio'  	=> $value
			);
		}
		$this->Admin_M->Create_Cinema_Studio($data);

		// die;
		redirect(site_url('Admin/Cinema/details/'.$id));
	}

	public function Delete($id)
	{
		$cinema = 'C-' . $id;

		$this->Admin_M->Delete_Cinema_Studio($cinema);
		$this->Admin_M->Delete_Cinema($id);

		redirect(site_url('Admin/Cinema'));
	}

}
