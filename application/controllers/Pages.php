<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
	public function index()
	{
		$data = array(
			'pages' => 'home/index',
		);

		$this->load->view('wrapper', $data);
	}

	public function sejarah()
	{
		$data = array(
			'pages' => 'profil/sejarah',
		);

		$this->load->view('wrapper', $data);
	}

	public function visi()
	{
		$data = array(
			'pages' => 'profil/visi',
		);

		$this->load->view('wrapper', $data);
	}
}
