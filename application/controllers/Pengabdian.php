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
			'content' => 'pengabdian/index',
			'section' => 'PENGABDIAN',
			'kategori' => 'pengabdian',
			'recent' => $this->M_konten->recent('berita'),

		);

		$this->load->view('wrapper', $data);
	}

	public function desa()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'pengabdian/desa',
			'section' => 'DESA BINAAN',
			'kategori' => 'pengabdian',
			'recent' => $this->M_konten->recent('berita'),

		);

		$this->load->view('wrapper', $data);
	}

	public function konseling()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'pengabdian/konseling',
			'section' => 'KONSELING',
			'kategori' => 'pengabdian',
			'recent' => $this->M_konten->recent('berita'),


		);

		$this->load->view('wrapper', $data);
	}
}
