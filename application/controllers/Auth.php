<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->view('menu/awal');
	}

	public function log()
	{
		if ($this->session->userdata('email')) {
			if ($this->session->userdata('role_id') == 1) {
				redirect('admin');
			} elseif ($this->session->userdata('role_id') == 2) {
				redirect('user');
			} else {
				redirect('auth');
			}
		}
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'LOGIN PAGE';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
		} else {
			//valdasi sukses
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		echo $password;
		$user = $this->db->get_where('tbl_login', ['EMAIL' => $email])->row_array();

		//jika usernya ada
		if ($user) {
			if ($password == $user['PASSWORD']) {
				$data = [
					'email' => $user['EMAIL'],
					'role_id' => $user['ID']
				];
				$this->session->set_userdata($data);
				if ($user['ID'] == 1) {
					redirect('admin');
				} else {
					redirect('user');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $password . 'Password salah!</div>');
				redirect('auth/log');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email tidak terdaftar!</div>');
			redirect('auth/log');
		}
	}

	public function registration()
	{
		if ($this->session->userdata('email')) {
			if ($this->session->userdata('role_id') == 1) {
				redirect('admin');
			} elseif ($this->session->userdata('role_id') == 2) {
				redirect('user');
			} else {
				redirect('auth');
			}
		}

		$data['title'] = 'REGISTRATION PAGE';
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_login.EMAIL]', [
			'is_unique' => 'This email has already registered!'

		]);
		$this->form_validation->set_rules('password1', 'PASSWORD', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'password dont match!',
			'min_length' => 'password too short!'
		]);
		$this->form_validation->set_rules('password2', 'PASSWORD', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('templates/auth_footer');
		} else {
			$data = [
				'NAME' => htmlspecialchars($this->input->post('name', true)),
				'EMAIL' => htmlspecialchars($this->input->post('email', true)),
				'IMAGE' => 'default.png',
				'PASSWORD' => md5($this->input->post('password1')),
				'ID' => 2,

			];

			$this->db->insert('tbl_login', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat akun anda sudah terbuat. Silahkan LOGIN!</div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->destroy;
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun anda sudah logout!</div>');
		redirect('auth');
	}
}
