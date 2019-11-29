<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        // if(!isset($_SESSION['Logged-Agen'])) {
        //     redirect(site_url('Agen/Login'));
        // }
    }


	public function index()
	{
		$data = $this->Read_Beranda();
		if(isset($_SESSION['Logged-Status'])) {
			echo $data['username'];
			$this->load->view('Template/Header_V', $data);
			$this->load->view('Contents/Film_V');
			$this->load->view('Template/Footer_V');
		} else {
			$this->load->view('Template/Header_V', $data);
			$this->load->view('Contents/Film_V');
			$this->load->view('Template/Footer_V');
		}
	}

	public function Read_Beranda() {
        // membuat array
		$data = array();

		if(isset($_SESSION['Logged-Status'])) {
			$data['username'] = $_SESSION['Logged-Status']['username'];
			$data['status'] = TRUE;
		} else {
			$data['status'] = FALSE;
		}

		$data["film"] = $this->Film_M->Get_All_Film();

        return $data;
    }
}
