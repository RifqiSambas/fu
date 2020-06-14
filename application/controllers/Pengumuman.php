<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_konten');
	}

	public function index()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'pengumuman/index',
			'section' => 'PENGUMUMAN',
			'kategori' => 'pengumuman',
			'recent' => $this->M_konten->recent('berita'),

		);

		$this->load->view('wrapper', $data);
	}

	public function beasiswa()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'pengumuman/beasiswa',
			'section' => 'BEASISWA',
			'kategori' => 'pengumuman',
			'recent' => $this->M_konten->recent('berita'),

		);

		$this->load->view('wrapper', $data);
	}

	public function kegiatan()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'pengumuman/kegiatan',
			'section' => 'KEGIATAN KAMI',
			'kategori' => 'pengumuman',
			'recent' => $this->M_konten->recent('berita'),

		);

		$this->load->view('wrapper', $data);
	}

	public function lowongan()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'pengumuman/lowongan',
			'section' => 'LOWONGAN KERJA',
			'kategori' => 'pengumuman',
			'recent' => $this->M_konten->recent('berita'),

		);

		$this->load->view('wrapper', $data);
	}
}
