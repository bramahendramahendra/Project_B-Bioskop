<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kursi extends CI_Controller {

	public function index()
	{
		$data = $this->Read_Kursi();
		$this->load->view('Template/Header_V', $data);
		$this->load->view('Contents/Kursi_V');
		$this->load->view('Template/Footer_V');
	}
	
	public function Read_Kursi() {
        // membuat array
		$data = array();
		if(isset($_SESSION['Logged-Status'])) {
			$data['username'] = $_SESSION['Logged-Status']['username'];
			$data['status'] = TRUE;
		} else {
			$data['status'] = FALSE;
		}
        return $data;
    }
}
