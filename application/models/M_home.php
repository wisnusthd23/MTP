<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{

    public function get_all_data($limit, $start, $submit = null)
    {

        if ($submit) {
            $this->db->like('nama_barang', $submit);
            $this->db->or_like('deskripsi', $submit);
            $this->db->or_like('komposisi', $submit);
        }

        $this->db->select('*');

        $this->db->from('tbl_barang');

        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_barang.id_kategori', 'left');

        $this->db->order_by('tbl_barang.id_barang', 'asc');

        $this->db->limit($limit, $start);
        return $this->db->get()->result();
    }
    public function total_produk()
    {

        $this->db->select('*');

        $this->db->from('tbl_barang');

        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_barang.id_kategori', 'left');

        $this->db->order_by('tbl_barang.id_barang', 'asc');
        return $this->db->get()->num_rows();
    }

    public function detail_barang($id_barang)
    {
        $this->db->select('*');

        $this->db->from('tbl_barang');

        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_barang.id_kategori', 'left');

        $this->db->where('id_barang', $id_barang);

        return $this->db->get()->row();
    }

    public function get_all_data_kategori()
    {
        $this->db->select('*');

        $this->db->from('tbl_kategori');

        $this->db->order_by('id_kategori', 'desc');

        return $this->db->get()->result();
    }

    public function kategori($id_kategori)
    {
        $this->db->select('*');

        $this->db->from('tbl_kategori');

        $this->db->where('id_kategori', $id_kategori);

        return $this->db->get()->row();
    }

    public function get_all_data_barang($id_kategori)
    {
        $this->db->select('*');

        $this->db->from('tbl_barang');

        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_barang.id_kategori', 'left');

        $this->db->where('tbl_barang.id_kategori', $id_kategori);

        return $this->db->get()->result();
    }
}

/* End of file Home.php */
