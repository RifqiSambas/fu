<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_konten');
	}

	public function index()
	{
		$data = array(
			'pages' => 'home/index',
			'data' => $this->M_konten->content('berita'),
			'berita' => $this->M_konten->content('berita'),
			'dekan' => $this->M_konten->content('dekan'),
			'wadek' => $this->M_konten->content('dekan'),
			'dosen' => $this->M_konten->content('dekan'),
			'alumni' => $this->M_konten->content('dekan'),
			'mahasiswa' => $this->M_konten->content('dekan'),
			'buku' => $this->M_konten->content('dekan'),
			'akademik' => $this->M_konten->content('dekan'),
			'penugumuman' => $this->M_konten->content('dekan'),
			'agenda' => $this->M_konten->content('dekan'),
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
