<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hmj extends CI_Controller
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
			'content' => 'hmj/index',
			'section' => 'HMJ',
			'kategori' => 'hmj',
			'recent' => $this->M_konten->recent('berita'),

		);

		$this->load->view('wrapper', $data);
	}

	public function th()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'hmj/th',
			'kategori' => 'info hmj',
			'section' => 'JURUSAN TAFSIR HADITS',
			'recent' => $this->M_konten->recent('berita'),

		);

		$this->load->view('wrapper', $data);
	}

	public function fa()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'hmj/fa',
			'kategori' => 'info hmj',
			'section' => 'JURUSAN FILSAFAT AGAMA',
			'recent' => $this->M_konten->recent('berita'),

		);

		$this->load->view('wrapper', $data);
	}

	public function pa()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'hmj/pa',
			'kategori' => 'info hmj',
			'section' => 'JURUSAN PERBANDINGAN AGAMA',
			'recent' => $this->M_konten->recent('berita'),

		);

		$this->load->view('wrapper', $data);
	}

	public function tp()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'hmj/tp',
			'kategori' => 'info hmj',
			'section' => 'JURUSAN TASAWUF PSIKOTERAPI',
			'recent' => $this->M_konten->recent('berita'),

		);

		$this->load->view('wrapper', $data);
	}
}
