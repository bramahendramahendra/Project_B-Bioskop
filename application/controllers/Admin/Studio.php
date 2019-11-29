<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studio extends CI_Controller {

	public function index()
	{
		$data = array();
		$data['css'] = 'Admin';
		$data['studio'] = $this->Admin_M->Read_Studio();

		$this->load->view('Admin/Template/Header_V', $data);
		$this->load->view('Admin/Contents/Studio_V', $data);
		$this->load->view('Admin/Template/Footer_V');
		
	}

	public function Add()
	{
		$data = array();
		$data['css'] = 'Admin';
		$data['seat'] = $this->Admin_M->Read_Seat();
		
		$this->load->view('Admin/Template/Header_V', $data);
		$this->load->view('Admin/Contents/Studio_Create_V', $data);
		$this->load->view('Admin/Template/Footer_V');
	}

	public function Create()
	{
		// $seat = $this->input->post('seat');
		// foreach ($this->input->post('seat') as $value) {
		// 	echo $value;
		// }
		// die;
		$data = array();
		$data['nomorStudio'] = $this->input->post('nomor_studio');
		$data['kelas'] = $this->input->post('kelas');
		$data['harga'] = $this->input->post('harga');

		$id = $this->Admin_M->Create_Studio($data);

		$data = array();
		$data['idStudio'] = 'S-' . $id;

		$this->Admin_M->Update_Studio($id, $data);

		$data1 = array();
		foreach ($this->input->post('seat') as $value) {
			$data1[] = array(
				'idStudio'  	=> $data['idStudio'],
				'idSeat'  	=> $value
			);
		}

		$this->Admin_M->Create_Studio_Seat($data1);

		redirect(site_url('Admin/Studio'));
	}

	public function Details($id)
	{
		$data = array();
		$data['css'] = 'Admin';
		$data['studio'] = $this->Admin_M->Details_Studio($id);
		$data['seat'] = $this->Admin_M->Details_Studio_Seat($id);

		$this->load->view('Admin/Template/Header_V', $data);
		$this->load->view('Admin/Contents/Studio_Details_V', $data);
		$this->load->view('Admin/Template/Footer_V');
	}

	public function Edit($id)
	{
		$data = array();
		$data['css'] = 'Admin';
		$data['studio'] = $this->Admin_M->Details_Studio($id);
		$data['seat'] = $this->Admin_M->Details_Studio_Seat($id);
		$data['all_seat'] = $this->Admin_M->Read_Seat();

		$this->load->view('Admin/Template/Header_V', $data);
		$this->load->view('Admin/Contents/Studio_Update_V', $data);
		$this->load->view('Admin/Template/Footer_V');
	}

	public function Update($id)
	{
		// echo $id;die;
		$data = array();
		$data['nomorStudio'] = $this->input->post('nomor_studio');
		$data['kelas'] = $this->input->post('kelas');
		$data['harga'] = $this->input->post('harga');
		
		$this->Admin_M->Update_Studio($id, $data);

		$studio = 'S-' . $id;

		$this->Admin_M->Delete_studio_Seat($studio);
		
		$data = array();
		foreach ($this->input->post('seat') as $value) {
			$data[] = array(
				'idStudio'  	=> $studio,
				'idSeat'  	=> $value
			);
		}
		$this->Admin_M->Create_Studio_Seat($data);

		// die;
		redirect(site_url('Admin/Studio/details/'.$id));
	}

	public function Delete($id)
	{
		$studio = 'S-' . $id;

		$this->Admin_M->Delete_Studio_Seat($studio);
		$this->Admin_M->Delete_Studio($id);

		redirect(site_url('Admin/Studio'));
	}

}
