<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengabdian extends CI_Controller
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
			'content' => 'pengabdian',
			'section' => 'PENGABDIAN',
			'kategori' => 'pengabdian',
			'recent' => $this->M_konten->recent('pengabdian'),
		);

		$this->load->view('wrapper', $data);
	}

	public function desa($at = 1)
	{
		$part = $at;
		if ($at == 1) $at = $at - 1;
		else if ($at > 1) $at = ($at - 1) * 4;

		$data = array(
			'pages' => 'common/content',
			'content' => 'list',
			'kategori' => 'pengabdian',
			'topic' => 'desa',
			'section' => 'DESA BINAAN',
			'data' => $this->M_konten->content('desa', $at),
			'recent' => $this->M_konten->recent('desa'),
			'jumlah' => $this->M_konten->part('desa'),
			'at' => $at,
			'part' => $part,
		);

		$this->load->view('wrapper', $data);
	}

	public function konseling($at = 1)
	{
		$part = $at;
		if ($at == 1) $at = $at - 1;
		else if ($at > 1) $at = ($at - 1) * 4;

		$data = array(
			'pages' => 'common/content',
			'content' => 'list',
			'kategori' => 'pengabdian',
			'topic' => 'konseling',
			'section' => 'KONSELING',
			'data' => $this->M_konten->content('konseling', $at),
			'recent' => $this->M_konten->recent('konseling'),
			'jumlah' => $this->M_konten->part('konseling'),
			'at' => $at,
			'part' => $part,
		);

		$this->load->view('wrapper', $data);
	}
}
