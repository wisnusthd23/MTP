<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_pelanggan extends CI_Model
{
	public function register($data)
	{
		$this->db->insert('tbl_pelanggan', $data);
	}
	public function get_all_data()
	{
		$this->db->select('*');
		$this->db->from('tbl_pelanggan');
		$this->db->where('is_active', 1);
		$this->db->order_by('id_pelanggan', 'desc');
		return $this->db->get()->result();
	}
	public function delete($data)
	{
		$this->db->where('id_pelanggan', $data['id_pelanggan']);
		$this->db->delete('tbl_pelanggan', $data);
	}
}

/* End of file M_pelanggan.php */
