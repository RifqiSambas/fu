<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengabdian extends CI_Controller
{
	public $kategori = "pengabdian";

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
			'section' => 'PENGABDIAN',
			'kategori' => 'pengabdian',
		);

		$this->load->view('wrapper', $data);
	}

	public function desa($at = 1)
	{
		$topic = 'desa';
		$section = 'DESA BINAAN';
		$this->M_konten->wrp($this->kategori, $topic, $section, $at);
	}

	public function konseling($at = 1)
	{
		$topic = 'konseling';
		$section = 'KONSELING';
		$this->M_konten->wrp($this->kategori, $topic, $section, $at);
	}
}
