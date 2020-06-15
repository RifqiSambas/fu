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
			'content' => 'list',
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
			'content' => 'list',
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
			'content' => 'list',
			'section' => 'KONSELING',
			'kategori' => 'pengabdian',
			'recent' => $this->M_konten->recent('berita'),


		);

		$this->load->view('wrapper', $data);
	}
}
