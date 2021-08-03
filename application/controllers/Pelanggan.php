<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {

			$data['title'] = 'Login';

			$this->load->view('templates/header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/footer');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		// $name = $this->input->post('name');

		$user = $this->db->get_where('tbl_pelanggan', ['email' => $email])->row_array();

		if ($user) {

			if ($user['is_active'] == 1) {

				if (password_verify($password, $user['password'])) {
					$data = [
						'email' => $user['email'],
						'name' => $user['name']
					];
					$this->session->set_userdata($data);
					redirect('home');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
					redirect('pelanggan');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum di aktivasi!</div>');
				redirect('pelanggan');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar!</div>');
			redirect('pelanggan');
		}
	}

	public function registrasi()
	{

		if ($this->session->userdata('email')) {
			redirect('home');
		}

		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_pelanggan.email]', [
			'is_unique' => 'Email Sudah digunakan!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'password tidak sama!',
			'min_length' => 'password terlalu pendek!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {

			$data['title'] = 'REGISTRASI';
			$this->load->view('templates/header', $data);
			$this->load->view('auth/registrasi');
			$this->load->view('templates/footer');
		} else {
			$email = $this->input->post('email', true);
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($email),
				'foto' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				// 'role_id' => 2,
				'is_active' => 0,
				'date_created' => time()
			];

			$token = bin2hex(openssl_random_pseudo_bytes(32));
			// $token = base64_encode(random_bytes(32));
			$user_token = [
				'email' => $email,
				'token' => $token,
				'date_created' => time()
			];

			$this->db->insert('tbl_pelanggan', $data);
			$this->db->insert('user_token', $user_token);

			$this->_sendEmail($token, 'verify');


			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">SELAMAT! akun anda berhasil dibuat, silahkan AKTIVASI akun anda!</div>');
			redirect('pelanggan');
		}
	}

	private function _sendEmail($token, $type)
	{
		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'apotekeisda24@gmail.com',
			'smtp_pass' => 'inisaya24',
			'smtp_port' => 465,
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		];

		$this->load->library('email', $config);
		$this->email->initialize($config);

		$this->email->from('apotekeisda24@gmail.com', 'Apotek Eissda');
		$this->email->to($this->input->post('email'));

		if ($type == 'verify') {
			$this->email->subject('Akun Verifikasi');
			$this->email->message('Klik link ini buat verifikasi akun anda : <a href="' . base_url() . 'pelanggan/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Aktifasi</a>');
		} else if ($type == 'forgot') {
			$this->email->subject('Reset Password');
			$this->email->message('Klik link ini buat reset password akun anda : <a href="' . base_url() . 'pelanggan/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
		}

		if ($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}

	public function verify()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('tbl_pelanggan', ['email' => $email])->row_array();

		if ($user) {
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

			if ($user_token) {
				if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
					$this->db->set('is_active', 1);
					$this->db->where('email', $email);
					$this->db->update('tbl_pelanggan');

					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $email . ' telah di aktif! silahkan LOGIN!</div>');
					redirect('pelanggan');
				} else {

					$this->db->delete('tbl_pelanggan', ['email' => $email]);
					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aktivasi akun gagal! Token tidak berlaku.</div>');
					redirect('pelanggan');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Token salah!</div>');
				redirect('pelanggan');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aktivasi akun gagal!</div>');
			redirect('pelanggan');
		}
	}



	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('name');
		$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">
        Kamu sudah Logout!!</div>');
		redirect('home');
	}

	public function forgotPassword()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Forgot Password';
			$this->load->view('templates/header', $data);
			$this->load->view('auth/forgot-password');
			$this->load->view('templates/footer');
		} else {
			$email = $this->input->post('email');
			$user = $this->db->get_where('tbl_pelanggan', ['Email' => $email, 'is_active' => 1])->row_array();

			if ($user) {
				$token = base64_encode(random_bytes(32));
				$user_token = [
					'email' => $email,
					'token' => $token,
					'date_created' => time()
				];

				$this->db->insert('user_token', $user_token);
				$this->_sendEmail($token, 'forgot');

				$this->session->set_flashdata('forgotpassword', '<div class="alert alert-success" role="alert">Cek email untuk reset password!</div>');
				redirect('pelanggan/forgotpassword');
			} else {
				$this->session->set_flashdata('forgotpassword', '<div class="alert alert-danger" role="alert">Email tidak ada atau belum aktif!</div>');
				redirect('pelanggan/forgotpassword');
			}
		}
	}

	public function resetPassword()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('tbl_pelanggan', ['email' => $email])->row_array();

		if ($user) {
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

			if ($user_token) {
				$this->session->set_userdata('reset_email', $email);
				$this->changePassword();
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password gagal!</div>');
				redirect('pelanggan');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset paswword gagal!</div>');
			redirect('pelanggan');
		}
	}

	public function changePassword()
	{
		if (!$this->session->userdata('reset_email')) {
			redirect('pelanggan');
		}

		$this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]', [
			'matches' => 'password tidak sama!',
			'min_length' => 'password terlalu pendek!'
		]);
		$this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[3]|matches[password1]');

		if ($this->form_validation->run() == false) {

			$data['title'] = 'Change Password';
			$this->load->view('templates/header', $data);
			$this->load->view('auth/change-password');
			$this->load->view('templates/footer');
		} else {
			$password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
			$email = $this->session->userdata('reset_email');

			$this->db->set('password', $password);
			$this->db->where('email', $email);
			$this->db->update('tbl_pelanggan');

			$this->session->unset_userdata('reset_email');
			$this->session->set_flashdata('changepassword', '<div class="alert alert-success" role="alert">Reset password berhasil! silahkan LOGIN.</div>');
			redirect('pelanggan');
		}
	}

























	public function profile()
	{
		$data = array(
			'title' => 'Profile',
			'isi' => 'v_profile',
			'user' => $this->db->get_where('tbl_pelanggan', ['email' => $this->session->userdata('email')])->row_array()
		);
		$this->load->view('layout/v_wrapper_frontend', $data, FALSE);
	}

	public function ubahPassword()
	{
		$data['title'] = "Ubah Password";
		$data['user'] = $this->db->get_where('tbl_pelanggan', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('current_password', 'Current Password', 'required|trim', [
			'required' => 'Harus di isi!'
		]);
		$this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]', [
			'matches' => 'password tidak sama!',
			'min_length' => 'password terlalu pendek!',
			'required' => 'Harus di isi!'
		]);
		$this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]', [
			'matches' => 'password tidak sama!',
			'min_length' => 'password terlalu pendek!',
			'required' => 'Harus di isi!'
		]);

		if ($this->form_validation->run() == false) {
			$data = array(
				'title' => 'Profile',
				'isi' => 'v_profile',
				// 'user' => $this->db->get_where('tbl_pelanggan', ['email' => $this->session->userdata('email')])->row_array()
			);
			$this->load->view('layout/v_wrapper_frontend', $data, FALSE);
		} else {
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');
			if (!password_verify($current_password, $data['user']['password'])) {
				$this->session->set_flashdata('ubahpassword', '<div class="alert alert-warning" role="alert">Password sekarang tidak sama!</div>');
				redirect('pelanggan/profile');
			} else {
				if ($current_password == $new_password) {
					$this->session->set_flashdata('ubahpassword', '<div class="alert alert-warning" role="alert">Password tidak boleh sama dengan password sekarang!</div>');
					redirect('pelanggan/profile');
				} else {
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);
					$this->db->set('password', $password_hash);
					$this->db->where('email', $this->session->userdata('email'));
					$this->db->update('tbl_pelanggan');

					$this->session->set_flashdata('ubahpassword', '<div class="alert alert-success" role="alert">Password berhasil di ubah!</div>');
					redirect('pelanggan/profile');
				}
			}
		}
	}
}

// public function register()
// {
// 	$this->form_validation->set_rules('nama_pelanggan', 'nama_pelanggan', 'required', array(
// 		'required' => '%s Haris Diisi !!!'
// 	));
// 	$this->form_validation->set_rules('email', 'E-mail', 'required|is_unique[tbl_pelanggan.email]', array(
// 		'required' => '%s Haris Diisi !!!',
// 		'is_unique' => '%s Email Sudah Ini Terdaftar ...!'
// 	));
// 	$this->form_validation->set_rules('password', 'password', 'required', array(
// 		'required' => '%s Haris Diisi !!!'
// 	));
// 	$this->form_validation->set_rules('ulangi_password', 'Ulangi Password', 'required|matches[password]', array(
// 		'required' => '%s Haris Diisi !!!',
// 		'matches' => '%s Password Tidak Sama ...!'
// 	));


// 	if ($this->form_validation->run() == FALSE) {
// 		$data = array(
// 			'title' => 'Register Pelanggan',
// 			'isi' => 'v_register',
// 		);
// 		$this->load->view('layout/v_wrapper_frontend', $data, FALSE);
// 	} else {
// 		$data = array(
// 			'nama_pelanggan' => $this->input->post('nama_pelanggan'),
// 			'email' => $this->input->post('email'),
// 			'password' => $this->input->post('password'),
// 		);
// 		$this->m_pelanggan->register($data);
// 		$this->session->set_flashdata('pesan', 'Selamat, Register Berhasil Silahkan Login Kembali !!');
// 		redirect('pelanggan/register');
// 	}
// }

// public function login()
// {
// 	$this->form_validation->set_rules('email', 'E-Mail', 'required', array(
// 		'required' => '%s Harus Diisi !!!'
// 	));
// 	$this->form_validation->set_rules('password', 'Password', 'required', array(
// 		'required' => '%s Harus Diisi !!!'
// 	));


// 	if ($this->form_validation->run() == TRUE) {
// 		$email = $this->input->post('email');
// 		$password = $this->input->post('password');
// 		$this->pelanggan_login->login($email, $password);
// 	}
// 	$data = array(
// 		'title' => 'Login Pelanggan',
// 		'isi' => 'v_login_pelanggan',
// 	);
// 	$this->load->view('layout/v_wrapper_frontend', $data, FALSE);
// }

// public function logout()
// {
// 	$this->pelanggan_login->logout();
// }

// public function akun()
// {
// 	//proteksi halaman
// 	$this->pelanggan_login->proteksi_halaman();
// 	$data = array(
// 		'title' => 'Akun Saya',
// 		'isi' => 'v_akun_saya',
// 	);
// 	$this->load->view('layout/v_wrapper_frontend', $data, FALSE);
// }