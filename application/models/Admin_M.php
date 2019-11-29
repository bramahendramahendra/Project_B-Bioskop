<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_M extends CI_Model
{
	public function Read_FStudio()
	{
		$this->db->select('cinema.idCinema as idCinema, studio.idStudio as idStudio, studio.kelas as kelas');
		$this->db->from('studio');
		$this->db->join('cinema-studio', 'cinema-studio.idStudio = studio.idStudio');
		$this->db->join('cinema', 'cinema.idCinema = cinema-studio.idCinema');
		$query = $this->db->get();
		return $query->result_array();
	}


	public function Check_Sign_Up($username, $email)
	{
		# code...
		$this->db->select('*');
		$this->db->from('admin_user');
		$this->db->where('username', $username);
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->first_row();
	}

	public function Sign_Up($data)
	{
		# code...
		$this->db->insert('admin_user', $data);
		return;
	}

	public function Sign_In($data)
	{
		# code...
		$this->db->select('*');
		$this->db->from('admin_user');
		$this->db->where($data);
		$query = $this->db->get();
		return $query->first_row();
	}

	public function Read_JadwalTayang()
	{
		$this->db->select('*');
		$this->db->from('jadwaltayang');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function Create_Film($data)
	{
		# code...
		$this->db->insert('movie', $data);
		$id = $this->db->insert_id();
		return $id;
	}

	public function Read_Film()
	{
		$this->db->select('*');
		$this->db->from('movie');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function Details_Film($id)
	{
		$this->db->select('*');
		$this->db->from('movie');
		$this->db->where('idMovie', $id);
		$query = $this->db->get();
		return $query->first_row();
	}

	public function Update_Film($id, $data)
	{
		$this->db->where('idMovie', $id);
		$this->db->update('movie', $data);
		return ;
	}

	public function Delete_Film($id)
	{
		$this->db->delete('movie', array('idMovie' => $id));
		return ;
	}

	public function Create_Film_Genre($data)
	{
		# code...
		$this->db->insert_batch('movie-genre', $data);
		return;
	}

	public function Read_Film_Genre()
	{
		$this->db->select('*');
		$this->db->from('movie-genre');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function Details_Film_Genre($id)
	{
		$this->db->select('genre.genre as genre');
		$this->db->from('genre');
		$this->db->join('movie-genre', 'movie-genre.genre = genre.id');
		$this->db->join('movie', 'movie.genre = movie-genre.movie');
		$this->db->where('idMovie',$id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function Delete_Film_Genre($id)
	{
		$this->db->delete('movie-genre', array('movie' => $id));
		return ;
	}

	public function Create_Genre($data)
	{
		# code...
		# code...
		$this->db->insert('genre', $data);
		return;
	}

	public function Read_Genre()
	{
		$this->db->select('*');
		$this->db->from('genre');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function Edit_Genre($id)
	{
		$this->db->select('*');
		$this->db->from('genre');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->first_row();
	}

	public function Update_Genre($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('genre', $data);
		return ;
	}

	public function Delete_Genre($id)
	{
		$this->db->delete('genre', array('id' => $id));
		return ;
	}

	public function Create_Cinema($data)
	{
		# code...
		$this->db->insert('cinema', $data);
		$id = $this->db->insert_id();
		return $id;
	}


	public function Read_Cinema()
	{
		$this->db->select('*');
		$this->db->from('cinema');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function Details_Cinema($id)
	{
		$this->db->select('*');
		$this->db->from('cinema');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->first_row();
	}

	public function Edit_Cinema($id)
	{
		$this->db->select('*');
		$this->db->from('Cinema');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->first_row();
	}

	public function Update_Cinema($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('cinema', $data);
		return ;
	}

	public function Delete_Cinema($id)
	{
		$this->db->delete('cinema', array('id' => $id));
		return ;
	}

	public function Create_Cinema_Studio($data)
	{
		# code...
		$this->db->insert_batch('cinema-studio', $data);
		return;
	}

	public function Details_Cinema_Studio($id)
	{
		$this->db->select('studio.idStudio as idStudio ,studio.nomorStudio as nomorStudio, studio.kelas as kelas, studio.harga as harga');
		$this->db->from('studio');
		$this->db->join('cinema-studio', 'cinema-studio.idStudio = studio.idStudio');
		$this->db->join('cinema', 'cinema.idCinema = cinema-studio.idCinema');
		$this->db->where('cinema.id',$id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function Get_Cinema_Studio($id)
	{
		$this->db->select('studio.idStudio as idStudio ,studio.nomorStudio as nomorStudio, studio.kelas as kelas, studio.harga as harga');
		$this->db->from('studio');
		$this->db->join('cinema-studio', 'cinema-studio.idStudio = studio.idStudio');
		// $this->db->join('cinema', 'cinema.idCinema = cinema-studio.idCinema');
		$this->db->where('cinema-studio.idCinema',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function Delete_Cinema_Studio($id)
	{
		$this->db->delete('cinema-studio', array('idCinema' => $id));
		return ;
	}

	public function Create_Studio($data)
	{
		# code...
		$this->db->insert('studio', $data);
		$id = $this->db->insert_id();
		return $id;
	}

	public function Read_Studio()
	{
		$this->db->select('*');
		$this->db->from('studio');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function Details_Studio($id)
	{
		$this->db->select('*');
		$this->db->from('studio');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->first_row();
	}

	public function Edit_Studio($id)
	{
		$this->db->select('*');
		$this->db->from('studio');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->first_row();
	}

	public function Update_Studio($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('studio', $data);
		return ;
	}

	public function Delete_Studio($id)
	{
		$this->db->delete('studio', array('id' => $id));
		return ;
	}

	public function Create_Studio_Seat($data)
	{
		# code...
		$this->db->insert_batch('studio-seat', $data);
		return;
	}

	public function Details_Studio_Seat($id)
	{
		$this->db->select('seat.nomorSeat as seat');
		$this->db->from('seat');
		$this->db->join('studio-seat', 'studio-seat.idSeat = seat.idSeat');
		$this->db->join('studio', 'studio.idStudio = studio-seat.idStudio');
		$this->db->where('studio.id',$id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function Delete_Studio_Seat($id)
	{
		$this->db->delete('studio-seat', array('idStudio' => $id));
		return ;
	}

	public function Create_Seat($data)
	{
		# code...
		$this->db->insert('seat', $data);
		return;
	}

	public function Read_Seat()
	{
		$this->db->select('*');
		$this->db->from('seat');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function Edit_Seat($id)
	{
		$this->db->select('*');
		$this->db->from('seat');
		$this->db->where('idSeat', $id);
		$query = $this->db->get();
		return $query->first_row();
	}

	public function Update_Seat($id, $data)
	{
		$this->db->where('idSeat', $id);
		$this->db->update('seat', $data);
		return ;
	}

	public function Delete_Seat($id)
	{
		$this->db->delete('seat', array('idSeat' => $id));
		return ;
	}
	
}
