<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_konten');
		$this->load->library('session');
	}

	public function index()
	{
		$data = array(
			'single' => false,
			'pages' => 'home/index',
			'data' => $this->M_konten->content('berita'),
			'berita' => $this->M_konten->content('berita'),
			'dekan' => $this->M_konten->pages('dekan'),
			'wadek' => $this->M_konten->pages('wadek'),
			'dosen' => $this->M_konten->pages('dosen'),
			'alumni' => $this->M_konten->pages('alumni'),
			'mahasiswa' => $this->M_konten->pages('mahasiswa'),
			'buku' => $this->M_konten->pages('buku', 4),
			'akademik' => $this->M_konten->pages('akademik', 4),
			'pengumuman' => $this->M_konten->content_cat('pengumuman'),
			'kegiatan' => $this->M_konten->kegiatan(),
			'sambutan' => $this->M_konten->single('sambutan'),
			'pengunjung' => $this->M_konten->visitor(),
			'highlight' => $this->M_konten->content('kegiatan'),
		);

		$this->load->view('wrapper', $data);
	}

	public function login()
	{
		if ($this->session->userdata('status') == "login") redirect('admin');
		$this->load->view('login');
	}

	public function register()
	{
		$register = false;

		if ($this->session->userdata('status') == "login") redirect('admin');
		if (!$register) redirect('pages/login');
		$this->load->view('register.php');
	}
}
