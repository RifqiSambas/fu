
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_konten');
		$this->load->model('M_auth');
		$this->load->library('session');
	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if ($this->M_auth->login($email, $password) == false) {
			$data = array(
				'error' => 'email atau password salah',
			);

			$this->session->set_userdata($data);
			redirect('pages/login');
		} else {
			$user = $this->M_auth->login($email, $password);
			$data = array(
				'nama' => $user->nama,
				'email' => $user->email,
				'role' => $user->role,
				'status' => 'login',
			);
			$this->session->set_userdata($data);
			redirect('admin');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}

	public function register()
	{
		$email = $this->input->post('email');
		$nama = $this->input->post('name');
		$password = $this->input->post('password');
		$confirmation = $this->input->post('confirmation');

		if ($password !== $confirmation) {
			$data = array(
				'error' => 'data yang anda masukan belum benar',
			);

			$this->session->set_userdata($data);
			redirect('pages/register');
		} else {
			$data = array(
				'email' => $email,
				'nama' => $nama,
				'password' => md5($password),
				'role' => 1,
			);

			if ($this->M_auth->register($data)) {
				$data = array(
					'email' => $email,
					'nama' => $nama,
					'role' => 1,
					'status'	=> 'login'
				);
				$this->session->set_userdata($data);
				redirect('admin');
			} else {
				$data = array(
					'error' => 'data yang anda masukan belum benar',
				);

				$this->session->set_userdata($data);
				redirect('pages/register');
			}
		}
	}
}
