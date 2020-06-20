
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Arsip extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_konten');
	}

	public function index()
	{
		$data = array(
			'single' => false,
			'pages' => 'common/main_content',
			'content' => 'list_category',
			'section' => 'ARSIP',
			'kategori' => 'arsip',
		);

		$this->load->view('wrapper', $data);
	}

	public function berita($at = 1)
	{
		$part = $at;
		if ($at == 1) $at = $at - 1;
		else if ($at > 1) $at = ($at - 1) * 4;

		$data = array(
			'single' => false,
			'pages' => 'common/content',
			'content' => 'list_topic',
			'kategori' => 'arsip',
			'topic' => 'berita',
			'section' => 'BERITA',
			'data' => $this->M_konten->content('berita', $at),
			'recent' => $this->M_konten->recent('berita'),
			'jumlah' => $this->M_konten->part('berita'),
			'at' => $at,
			'part' => $part,
		);

		$this->load->view('wrapper', $data);
	}

	public function dekan($at = 1)
	{
		$part = $at;
		if ($at == 1) $at = $at - 1;
		else if ($at > 1) $at = ($at - 1) * 4;

		$data = array(
			'single' => false,
			'pages' => 'common/content',
			'content' => 'list',
			'kategori' => 'arsip',
			'kategori' => 'arsip',
			'topic' => 'dekan',
			'section' => 'POJOK DEKAN',
			'data' => $this->M_konten->content('dekan', $at),
			'recent' => $this->M_konten->recent('dekan'),
			'jumlah' => $this->M_konten->part('dekan'),
			'at' => $at,
			'part' => $part,
		);

		$this->load->view('wrapper', $data);
	}

	public function wadek($at = 1)
	{
		$part = $at;
		if ($at == 1) $at = $at - 1;
		else if ($at > 1) $at = ($at - 1) * 4;

		$data = array(
			'single' => false,
			'pages' => 'common/content',
			'content' => 'list',
			'kategori' => 'arsip',
			'topic' => 'wadek',
			'section' => 'POJOK WAKIL DEKAN',
			'data' => $this->M_konten->content('wadek', $at),
			'recent' => $this->M_konten->recent('wadek'),
			'jumlah' => $this->M_konten->part('wadek'),
			'at' => $at,
			'part' => $part,
		);

		$this->load->view('wrapper', $data);
	}

	public function dosen($at = 1)
	{
		$part = $at;
		if ($at == 1) $at = $at - 1;
		else if ($at > 1) $at = ($at - 1) * 4;

		$data = array(
			'single' => false,
			'pages' => 'common/content',
			'content' => 'list',
			'kategori' => 'arsip',
			'topic' => 'dosen',
			'section' => 'ARTIKEL DOSEN',
			'data' => $this->M_konten->content('dosen', $at),
			'recent' => $this->M_konten->recent('dosen'),
			'jumlah' => $this->M_konten->part('dosen'),
			'at' => $at,
			'part' => $part,
		);

		$this->load->view('wrapper', $data);
	}

	public function mahasiswa($at = 1)
	{
		$part = $at;
		if ($at == 1) $at = $at - 1;
		else if ($at > 1) $at = ($at - 1) * 4;

		$data = array(
			'single' => false,
			'pages' => 'common/content',
			'content' => 'list',
			'topic' => 'mahasiswa',
			'kategori' => 'arsip',
			'section' => 'ARTIKEL MAHASISWA',
			'data' => $this->M_konten->content('mahasiswa', $at),
			'recent' => $this->M_konten->recent('mahasiswa'),
			'jumlah' => $this->M_konten->part('mahasiswa'),
			'at' => $at,
			'part' => $part,

		);

		$this->load->view('wrapper', $data);
	}

	public function akademik($at = 1)
	{
		$part = $at;
		if ($at == 1) $at = $at - 1;
		else if ($at > 1) $at = ($at - 1) * 4;

		$data = array(
			'single' => false,
			'pages' => 'common/content',
			'content' => 'list',
			'topic' => 'akademik',
			'kategori' => 'arsip',
			'section' => 'INFORMASI AKADEMIK',
			'data' => $this->M_konten->content('akademik', $at),
			'recent' => $this->M_konten->recent('akademik'),
			'jumlah' => $this->M_konten->part('akademik'),
			'at' => $at,
			'part' => $part,
		);

		$this->load->view('wrapper', $data);
	}

	public function alumni($at = 1)
	{
		$part = $at;
		if ($at == 1) $at = $at - 1;
		else if ($at > 1) $at = ($at - 1) * 4;

		$data = array(
			'single' => false,
			'pages' => 'common/content',
			'content' => 'list',
			'kategori' => 'arsip',
			'topic' => 'alumni',
			'section' => 'ARTIKEL ALUMNI',
			'data' => $this->M_konten->content('alumni', $at),
			'recent' => $this->M_konten->recent('alumni'),
			'jumlah' => $this->M_konten->part('alumni'),
			'at' => $at,
			'part' => $part,
		);

		$this->load->view('wrapper', $data);
	}

	public function buku($at = 1)
	{
		$part = $at;
		if ($at == 1) $at = $at - 1;
		else if ($at > 1) $at = ($at - 1) * 4;

		$data = array(
			'single' => false,
			'pages' => 'common/content',
			'content' => 'list',
			'kategori' => 'arsip',
			'topic' => 'buku',
			'section' => 'BUKU',
			'data' => $this->M_konten->content('buku', $at),
			'recent' => $this->M_konten->recent('buku'),
			'jumlah' => $this->M_konten->part('buku'),
			'at' => $at,
			'part' => $part,
		);

		$this->load->view('wrapper', $data);
	}
}
