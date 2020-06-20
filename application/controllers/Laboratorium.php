<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laboratorium extends CI_Controller
{
	public $kategori = "laboratorium";

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
			'section' => 'LABORATORIUM',
			'kategori' => 'laboratorium',
		);

		$this->load->view('wrapper', $data);
	}

	public function perpustakaan($at = 1)
	{
		$topic = 'perpustakaan';
		$section = 'PERPUSTAKAAN';
		$this->M_konten->wrp($this->kategori, $topic, $section, $at);
	}

	public function judul($at = 1)
	{
		$topic = 'judul';
		$section = 'JUDUL SKRIPSI';
		$this->M_konten->wrp($this->kategori, $topic, $section, $at);
	}

	public function abstraksi($at = 1)
	{
		$topic = 'abstraksi';
		$section = 'ABSTRAKSI SKRIPSI';
		$this->M_konten->wrp($this->kategori, $topic, $section, $at);
	}
}
