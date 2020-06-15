<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laboratorium extends CI_Controller
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
			'content' => 'laboratorium/index',
			'section' => 'LABORATORIUM',
			'kategori' => 'laboratorium',
			'recent' => $this->M_konten->recent('berita'),

		);

		$this->load->view('wrapper', $data);
	}

	public function perpustakaan()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'laboratorium/perpustakaan',
			'section' => 'PERPUSTAKAAN',
			'kategori' => 'laboratorium',
			'recent' => $this->M_konten->recent('berita'),

		);

		$this->load->view('wrapper', $data);
	}

	public function judul()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'laboratorium/judul',
			'section' => 'JUDUL SKRIPSI',
			'kategori' => 'laboratorium',
			'recent' => $this->M_konten->recent('berita'),

		);

		$this->load->view('wrapper', $data);
	}

	public function abstraksi()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'laboratorium/abstraksi',
			'section' => 'ABSTRAKSI SKRIPSI',
			'kategori' => 'laboratorium',
			'recent' => $this->M_konten->recent('berita'),

		);

		$this->load->view('wrapper', $data);
	}
}
