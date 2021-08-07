<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Resep extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here

        $this->load->model('m_resep');
    }


    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required', array(
            'required' => '%s Haris Diisi !!!'
        ));
        // $this->form_validation->set_rules('id_kategori', 'Kategori', 'required', array(
        //     'required' => '%s Haris Diisi !!!'
        // ));
        // $this->form_validation->set_rules('harga', 'Harga', 'required', array(
        //     'required' => '%s Haris Diisi !!!'
        // ));
        // $this->form_validation->set_rules('berat', 'Berat', 'required', array(
        //     'required' => '%s Haris Diisi !!!'
        // ));
        // $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', array(
        //     'required' => '%s Haris Diisi !!!'
        // ));


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/resep/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|ico|jfif';
            $config['max_size']     = '2000';
            $this->upload->initialize($config);
            $field_name = "resep";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Resep Obat',
                    // 'kategori' => $this->m_kategori->get_all_data(),
                    'error_upload' => $this->upload->display_errors(),
                    'isi' => 'v_resep',
                    // 'user' => $this->db->get_where('tbl_pelanggan', ['email' => $this->session->userdata('email')])->row_array()
                );
                $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
            } else {
                $upload_data    = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/resep/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'email' => $this->input->post('email'),
                    // 'id_kategori' => $this->input->post('id_kategori'),
                    // 'harga' => $this->input->post('harga'),
                    // 'berat' => $this->input->post('berat'),
                    // 'deskripsi' => $this->input->post('deskripsi'),
                    'resep'    => $upload_data['uploads']['file_name'],
                );
                $this->m_resep->add($data);
                $this->session->set_flashdata('resepobat', 'Data Berhasil Ditambahkan !!!');
                redirect('resep');
            }
        }

        $data = array(
            'title' => 'Resep',
            // 'kategori' => $this->m_kategori->get_all_data(),
            'isi' => 'v_resep',
            // 'user' => $this->db->get_where('tbl_pelanggan', ['email' => $this->session->userdata('email')])->row_array()
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }


    //admin
    public function index_admin()
    {
        $data = array(
            'title' => 'resep_admin',
            'resep_admin' => $this->m_resep->get_all_data(),
            'isi' => 'v_resep_admin',
        );
        $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }
}

/* End of file Resep.php */
