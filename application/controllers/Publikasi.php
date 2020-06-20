<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Publikasi extends CI_Controller
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
			'content' => 'publikasi',
			'section' => 'PUBLIKASI',
			'kategori' => 'publikasi',
			'recent' => $this->M_konten->recent('berita'),
		);

		$this->load->view('wrapper', $data);
	}

	public function buku($at = 1)
	{
		$part = $at;
		if ($at == 1) $at = $at - 1;
		else if ($at > 1) $at = ($at - 1) * 4;

		$data = array(
			'pages' => 'common/content',
			'content' => 'arsip/arsip',
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

	public function jurnal($at = 1)
	{
		$part = $at;
		if ($at == 1) $at = $at - 1;
		else if ($at > 1) $at = ($at - 1) * 4;

		$data = array(
			'pages' => 'common/content',
			'content' => 'publikasi/jurnal',
			'section' => 'JURNAL',
			'kategori' => 'publikasi',
			'recent' => $this->M_konten->recent('jurnal'),
			'data' => $this->M_konten->content('jurnal', $at),
			'jumlah' => $this->M_konten->part('jurnal'),
			'at' => $at,
			'part' => $part,
		);

		$this->load->view('wrapper', $data);
	}

	public function kliping($at = 1)
	{
		$part = $at;
		if ($at == 1) $at = $at - 1;
		else if ($at > 1) $at = ($at - 1) * 4;

		$data = array(
			'pages' => 'common/content',
			'content' => 'publikasi/kliping',
			'section' => 'KLIPING KORAN',
			'kategori' => 'publikasi',
			'recent' => $this->M_konten->recent('kliping'),
			'data' => $this->M_konten->content('kliping', $at),
			'jumlah' => $this->M_konten->part('kliping'),
			'at' => $at,
			'part' => $part,
		);

		$this->load->view('wrapper', $data);
	}
}
