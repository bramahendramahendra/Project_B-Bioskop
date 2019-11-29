<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Film_M extends CI_Model {

	
	public function Get_All_Film()
	{
        $this->db->select('*');
        $this->db->from('movie');
        $query = $this->db->get();
        return $query->result_array();
	}

	
}


