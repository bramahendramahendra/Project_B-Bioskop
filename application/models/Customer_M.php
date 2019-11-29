<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_M extends CI_Model {

	
	public function Sign_Up($data)
	{
        $this->db->insert('customer', $data);
        return $this->db->insert_id();
	}

	public function Sign_In($data)
    {
        $this->db->select('id_customer, username');
        $this->db->from('customer');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->first_row();
    }
	
}
