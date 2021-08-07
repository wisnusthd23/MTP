<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_resep extends CI_Model
{
    public function upload_resep($data)
    {
        $this->db->where('id_resep', $data['id_resep']);
        $this->db->update('tbl_resep', $data);
    }
    public function detail_pesanan($id_resep)
    {
        $this->db->select('*');
        $this->db->from('tbl_resep');
        $this->db->where('id_resep', $id_resep);
        return $this->db->get()->row();
    }
    public function add($data)
    {
        $this->db->insert('tbl_resep', $data);
    }

    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_resep');
        $this->db->order_by('id_resep', 'desc');
        return $this->db->get()->result();
    }


    public function get_data($id_resep)
    {
        $this->db->select('*');
        $this->db->from('tbl_resep');
        $this->db->where('id_resep', $id_resep);
        return $this->db->get()->row();
    }
    public function edit($data)
    {
        $this->db->where('id_resep', $data['id_resep']);
        $this->db->update('tbl_resep', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_resep', $data['id_resep']);
        $this->db->delete('tbl_resep', $data);
    }
}

/* End of file M_resep.php */
