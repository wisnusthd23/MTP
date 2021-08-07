<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
    }


    public function index()
    {
        // $data['user'] = $this->db->get_where('tbl_pelanggan', ['email' => $this->session->userdata('email')])->row_array();
        //load library pagination
        $this->load->library('pagination');

        //ambil data keyword
        if (!$this->uri->segment(1) == 'Home') {
            $this->session->unset_userdata('submit');
        }
        if ($this->input->post('submit')) {
            $data['submit'] = $this->input->post('submit');
            $this->session->set_userdata('submit', $data['submit']);
        } else {
            // $data['submit'] = $this->session->unset_userdata('submit');
            $data['submit'] = $this->session->userdata('submit');
        }

        // $config['total_rows'] = $this->m_home->total_produk();

        //config
        $this->db->like('nama_barang', $data['submit']);
        $this->db->from('tbl_barang');
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 8;
        $data['start'] = $this->uri->segment(3);

        //init
        $this->pagination->initialize($config);

        $data = array(
            'paginasi' => $this->pagination->create_links(),
            'title' => 'Home',
            'barang' => $this->m_home->get_all_data($config['per_page'], $data['start'], $data['submit']),
            'isi' => 'v_home',
            // 'user' => $this->db->get_where('tbl_pelanggan', ['email' => $this->session->userdata('email')])->row_array()
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }
    public function contact()
    {
        $data = array(
            'title' => 'Contact',
            // 'user' => $this->db->get_where('tbl_pelanggan', ['email' => $this->session->userdata('email')])->row_array(),
            // 'barang' => $this->m_home->get_all_data(),
            'isi' => 'v_contact'
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }

    public function detail_barang($id_barang)
    {
        $data = array(
            'title' => 'Detail Barang',
            'barang' => $this->m_home->detail_barang($id_barang),
            // 'user' => $this->db->get_where('tbl_pelanggan', ['email' => $this->session->userdata('email')])->row_array(),
            'isi' => 'v_detail_barang'
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }
    public function kategori($id_kategori)
    {
        $kategori = $this->m_home->kategori($id_kategori);
        $data = array(
            'title' => 'kategori Barang : ' . $kategori->nama_kategori,
            'barang' => $this->m_home->get_all_data_barang($id_kategori),
            'isi' => 'v_kategori_barang',
            // 'user' => $this->db->get_where('tbl_pelanggan', ['email' => $this->session->userdata('email')])->row_array()
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }
}




 // $this->load->library('pagination');

        // if ($this->input->post('submit')) {
        //     $data['submit'] = $this->input->post('submit');
        // }

        // $config['base_url'] = base_url('home/index');
        // $config['total_rows'] = count($this->m_home->total_produk());
        // $config['per_page'] = 8;
        // $config['uri_segment'] = 3;

        // $limit = $config['per_page'];
        // $start = ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;
        
        // $config['full_tag_open'] = '<div class="text-center"><ul>';
        // $config['full_tag_close'] = '</ul></div>';

        // $config['first_link'] = 'First';
        // $config['first_tag_open'] = '<li>';
        // $config['first_tag_close'] = '</li>';

        // $config['last_link'] = 'Last';
        // $config['last_tag_open'] = '<li>';
        // $config['last_tag_close'] = '</li>';

        // $config['next_link'] = '&raquo;';
        // $config['num_tag_open'] = '<li>';
        // $config['num_tag_close'] = '</li>';

        // $config['prev_link'] = '&laquo;';
        // $config['prev_tag_open'] = '<li>';
        // $config['prev_tag_close'] = '</li>';

        // $config['cur_tag_open'] = '<li class="active"><a>';
        // $config['cur_tag_close'] = '</a></li>';
        // $config['next_tag_open'] = '<li>';
        // $config['next_tag_close'] = '</li>';

        // $this->pagination->initialize($config);

/* End of file Home.php */