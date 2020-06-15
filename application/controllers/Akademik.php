<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akademik extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_konten');
	}

	public function index()
	{
		$data = array(
			'pages' => 'common/main_content',
			'content' => 'akademik/index',
			'section' => 'AKADEMIK',
			'recent' => $this->M_konten->recent('berita'),
			'kategori' => 'akademik',
		);

		$this->load->view('wrapper', $data);
	}

	public function kalender()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'akademik/kalender',
			'kategori' => 'akademik',
			'section' => 'KALENDER AKADEMIK',
			'recent' => $this->M_konten->recent('berita'),
		);

		$this->load->view('wrapper', $data);
	}

	public function dokumen()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'akademik/dokumen',
			'kategori' => 'akademik',
			'section' => 'DOKUMEN',
			'recent' => $this->M_konten->recent('berita'),
		);

		$this->load->view('wrapper', $data);
	}

	public function pmb()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'akademik/pmb',
			'kategori' => 'akademik',
			'section' => 'PENERIMAAN MAHASISWA BARU',
			'recent' => $this->M_konten->recent('berita'),
		);

		$this->load->view('wrapper', $data);
	}
}
