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
			'content' => 'laboratorium',
			'section' => 'LABORATORIUM',
			'kategori' => 'laboratorium',
		);

		$this->load->view('wrapper', $data);
	}

	public function perpustakaan($at = 1)
	{
		$part = $at;
		if ($at == 1) $at = $at - 1;
		else if ($at > 1) $at = ($at - 1) * 4;

		$data = array(
			'pages' => 'common/content',
			'content' => 'list',
			'kategori' => 'laboratorium',
			'topic' => 'perpustakaan',
			'section' => 'PERPUSTAKAAN',
			'data' => $this->M_konten->content('perpustakaan', $at),
			'recent' => $this->M_konten->recent('perpustakaan'),
			'jumlah' => $this->M_konten->part('perpustakaan'),
			'at' => $at,
			'part' => $part,
		);

		$this->load->view('wrapper', $data);
	}

	public function judul($at = 1)
	{
		$part = $at;
		if ($at == 1) $at = $at - 1;
		else if ($at > 1) $at = ($at - 1) * 4;

		$data = array(
			'pages' => 'common/content',
			'content' => 'list',
			'kategori' => 'laboratorium',
			'topic' => 'judul',
			'section' => 'JUDUL SKRIPSI',
			'data' => $this->M_konten->content('judul', $at),
			'recent' => $this->M_konten->recent('judul'),
			'jumlah' => $this->M_konten->part('judul'),
			'at' => $at,
			'part' => $part,
		);

		$this->load->view('wrapper', $data);
	}

	public function abstraksi($at = 1)
	{
		$part = $at;
		if ($at == 1) $at = $at - 1;
		else if ($at > 1) $at = ($at - 1) * 4;

		$data = array(
			'pages' => 'common/content',
			'content' => 'list',
			'kategori' => 'laboratorium',
			'topic' => 'abstraksi',
			'section' => 'ABSTRAKSI SKRIPSI',
			'data' => $this->M_konten->content('abstraksi', $at),
			'recent' => $this->M_konten->recent('abstraksi'),
			'jumlah' => $this->M_konten->part('abstraksi'),
			'at' => $at,
			'part' => $part,
		);

		$this->load->view('wrapper', $data);
	}
}
