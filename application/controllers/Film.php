<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Film extends CI_Controller {

	public function index()
	{
		$data = $this->Read_Film();
		$this->load->view('Template/Header_V', $data);
		$this->load->view('Contents/Film_V');
		$this->load->view('Template/Footer_V');
	}

	public function Read_Film() {
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
