<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Film extends CI_Controller
{

	public function index()
	{
		$data = array();
		$data['css'] = 'Admin';
		$data['film'] = $this->Admin_M->Read_Film();
		$data['movie_genre'] = $this->Admin_M->Read_Film_Genre();
		$data['genre'] = $this->Admin_M->Read_Genre();

		$this->load->view('Admin/Template/Header_V', $data);
		$this->load->view('Admin/Contents/Film_V', $data);
		$this->load->view('Admin/Template/Footer_V');
	}

	public function Add()
	{
		$data = array();
		$data['css'] = 'Admin';
		$data['genre'] = $this->Admin_M->Read_Genre();
		$this->load->view('Admin/Template/Header_V', $data);
		$this->load->view('Admin/Contents/Film_Create_V', $data);
		$this->load->view('Admin/Template/Footer_V');
	}

	public function Create()
	{
		$data = array();
		$data['judul'] = $this->input->post('judul');
		$data['tanggal_rilis'] = $this->input->post('tanggal_rilis');
		$data['durasi'] = $this->input->post('durasi');
		$data['kategori'] = $this->input->post('kategori');
		$data['rating'] = $this->input->post('rating');
		$data['pemain'] = $this->input->post('pemain');
		$data['sutradara'] = $this->input->post('sutradara');
		$data['language'] = $this->input->post('language');
		$data['subtitle'] = $this->input->post('subtitle');
		$data['sinopsis'] = $this->input->post('sinopsis');

		$id = $this->Admin_M->Create_Film($data);

		$data = array();
		$data['genre'] = 'G-' . $id;
		$data["image"] = $this->Upload('M-' . $id);

		$this->Admin_M->Update_Film($id, $data);

		$data1 = array();
		foreach ($this->input->post('genre') as $value) {
			$data1[] = array(
				'movie'  	=> $data['genre'],
				'genre'  	=> $value
			);
		}

		$this->Admin_M->Create_Film_Genre($data1);

		redirect(site_url('Admin/Film'));
	}

	public function Details($id)
	{
		$data = array();
		$data['css'] = 'Admin';
		$data['film'] = $this->Admin_M->Details_Film($id);
		$data['genre'] = $this->Admin_M->Details_Film_Genre($id);

		$this->load->view('Admin/Template/Header_V', $data);
		$this->load->view('Admin/Contents/Film_Details_V', $data);
		$this->load->view('Admin/Template/Footer_V');
	}

	public function Upload($nama_file)
	{
		# code...

		$config['upload_path']          = './upload/movie/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['file_name']        	= $nama_file;
		$config['overwrite']			= true;
		$config['max_size']             = 1024;


		$this->upload->initialize($config);

		if (!$this->upload->do_upload('image')) {
			$error = $this->upload->display_errors();
			$upload = 'default-movie-picture.png';
			// $this->load->view('upload_form', $error);
		} else {
			$upload = $this->upload->data('file_name');
		}
		return $upload;
	}

	public function Edit($id)
	{
		$data = array();
		$data['css'] = 'Admin';
		$data['film'] = $this->Admin_M->Details_Film($id);
		$data['genre'] = $this->Admin_M->Details_Film_Genre($id);
		$data['all_genre'] = $this->Admin_M->Read_Genre();

		$this->load->view('Admin/Template/Header_V', $data);
		$this->load->view('Admin/Contents/Film_Update_V', $data);
		$this->load->view('Admin/Template/Footer_V');
	}

	public function Update($id)
	{
		// echo $id;die;
		$data = array();
		$data['judul'] = $this->input->post('judul');
		$data['tanggal_rilis'] = $this->input->post('tanggal_rilis');
		$data['durasi'] = $this->input->post('durasi');
		$data['kategori'] = $this->input->post('kategori');
		$data['rating'] = $this->input->post('rating');
		$data['pemain'] = $this->input->post('pemain');
		$data['sutradara'] = $this->input->post('sutradara');
		$data['language'] = $this->input->post('language');
		$data['subtitle'] = $this->input->post('subtitle');
		$data['sinopsis'] = $this->input->post('sinopsis');
		if($this->Upload('M-' . $id) <> 'default-movie-picture.png') {
			$data["image"] = $this->Upload('M-' . $id);
		} 
		
		$this->Admin_M->Update_Film($id, $data);

		$genre = 'G-' . $id;

		$this->Admin_M->Delete_Film_Genre($genre);
		
		$data = array();
		foreach ($this->input->post('genre') as $value) {
			$data[] = array(
				'movie'  	=> $genre,
				'genre'  	=> $value
			);
		}
		$this->Admin_M->Create_Film_Genre($data);

		// die;
		redirect(site_url('Admin/Film/details/'.$id));
	}

	public function Delete($id)
	{
		$genre = 'G-' . $id;

		$this->Admin_M->Delete_Film_Genre($genre);
		$this->Admin_M->Delete_Film($id);

		redirect(site_url('Admin/Film'));
	}

	
}
