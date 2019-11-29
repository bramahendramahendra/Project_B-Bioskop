<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
    }

	public function Sign_Up()
	{
        if ($this->input->post('password') == $this->input->post('password2')) {
            // load success create customer
            //membuat array untuk name, username, email dan password
            $data = array();
            $data['nama_customer'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['username'] = $this->input->post('username');
            $data['password'] =  $this->input->post('password');

            // insert data customer
            $id = $this->Customer_M->Sign_Up($data);

            // $this->session->set_flashdata('SignUp','Success');

            $data = array();
            $data['id'] = $id;
            $data['username'] = $this->input->post('username');
            $data['logged'] = True;
            $this->session->set_userdata('Logged-Status', $data);
            redirect(site_url('Beranda'));

        } else {
            redirect(site_url("Beranda"));
        }
    }

    public function Sign_In()
	{
        // load success template
        $data = array();
        $data['username']= $this->input->post('username');
        $data['password'] = $this->input->post('password');
        echo $data['username'];
        echo $data['password'];
    
        // mencari user admin
        $user_agen = $this->Customer_M->Sign_In($data);
        if($user_agen == TRUE) {
            // echo "sukses"; die;
            $data = array();
            $data['id'] = $user_agen->id;
            $data['username'] = $user_agen->username;
            $data['logged'] = True;
            $this->session->set_userdata('Logged-Status', $data);
            redirect(site_url('Beranda'));
           
        } else {
            // echo "gagal"; die;
            redirect(site_url("Beranda"));
        }
    }
    
    public function Log_Out()
	{
        session_destroy();
        redirect('Beranda');
    }
}
