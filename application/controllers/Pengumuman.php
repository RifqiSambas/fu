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
			'pages' => 'common/main_content',
			'content' => 'pengumuman',
			'section' => 'PENGUMUMAN',
			'kategori' => 'pengumuman',
			'recent' => $this->M_konten->recent('berita'),

		);

		$this->load->view('wrapper', $data);
	}

	public function beasiswa($at = 1)
	{
		$part = $at;
		if ($at == 1) $at = $at - 1;
		else if ($at > 1) $at = ($at - 1) * 4;

		$data = array(
			'pages' => 'common/content',
			'content' => 'list',
			'kategori' => 'pengumuman',
			'topic' => 'beasiswa',
			'section' => 'BEASISWA',
			'data' => $this->M_konten->content('beasiswa', $at),
			'recent' => $this->M_konten->recent('beasiswa'),
			'jumlah' => $this->M_konten->part('beasiswa'),
			'at' => $at,
			'part' => $part,
		);

		$this->load->view('wrapper', $data);
	}

	public function kegiatan($at = 1)
	{
		$part = $at;
		if ($at == 1) $at = $at - 1;
		else if ($at > 1) $at = ($at - 1) * 4;

		$data = array(
			'pages' => 'common/content',
			'content' => 'list',
			'kategori' => 'pengumuman',
			'topic' => 'kegiatan',
			'section' => 'KEGIATAN',
			'data' => $this->M_konten->content('kegiatan', $at),
			'recent' => $this->M_konten->recent('kegiatan'),
			'jumlah' => $this->M_konten->part('kegiatan'),
			'at' => $at,
			'part' => $part,
		);

		$this->load->view('wrapper', $data);
	}

	public function lowongan($at = 1)
	{
		$part = $at;
		if ($at == 1) $at = $at - 1;
		else if ($at > 1) $at = ($at - 1) * 4;

		$data = array(
			'pages' => 'common/content',
			'content' => 'list',
			'kategori' => 'pengumuman',
			'topic' => 'lowongan',
			'section' => 'LOWONGAN KERJA',
			'data' => $this->M_konten->content('lowongan', $at),
			'recent' => $this->M_konten->recent('lowongan'),
			'jumlah' => $this->M_konten->part('lowongan'),
			'at' => $at,
			'part' => $part,
		);

		$this->load->view('wrapper', $data);
	}
}
