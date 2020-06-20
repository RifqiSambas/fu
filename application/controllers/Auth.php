
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_konten');
		$this->load->library('session');
	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$data = array(
			'email' => $email,
			'status' => 'login',
		);

		$this->session->set_userdata($data);
		redirect('admin');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}

	public function register()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$confirmation = $this->input->post('confirmation');

		if ($password !== $confirmation) {
			redirect('pages/register');
		} else {
			$data = array(
				'email' => $email,
				'status' => 'login',
			);

			$this->session->set_userdata($data);
			redirect('admin');
		}
	}
}
