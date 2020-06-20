<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Publikasi extends CI_Controller
{
	public $kategori = "publikasi";

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
			'section' => 'PUBLIKASI KARYA',
			'kategori' => 'publikasi',
		);

		$this->load->view('wrapper', $data);
	}

	public function buku($at = 1)
	{
		$topic = 'buku';
		$section = 'BUKU-BUKU';
		$this->M_konten->wrp($this->kategori, $topic, $section, $at);
	}

	public function jurnal($at = 1)
	{
		$topic = 'jurnal';
		$section = 'JURNAL';
		$this->M_konten->wrp($this->kategori, $topic, $section, $at);
	}

	public function kliping($at = 1)
	{
		$topic = 'kliping';
		$section = 'KLIPING KORAN';
		$this->M_konten->wrp($this->kategori, $topic, $section, $at);
	}
}
