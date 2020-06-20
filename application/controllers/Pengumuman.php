<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{
	public $kategori = "pengumuman";

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
			'section' => 'PENGUMUMAN',
			'kategori' => 'pengumuman',
		);

		$this->load->view('wrapper', $data);
	}

	public function beasiswa($at = 1)
	{
		$topic = 'beasiswa';
		$section = 'BEASISWA';
		$this->M_konten->wrp($this->kategori, $topic, $section, $at);
	}

	public function kegiatan($at = 1)
	{
		$topic = 'kegiatan';
		$section = 'KEGIATAN KAMI';
		$this->M_konten->wrp($this->kategori, $topic, $section, $at);
	}

	public function lowongan($at = 1)
	{
		$topic = 'lowongan';
		$section = 'LOWONGAN KERJA';
		$this->M_konten->wrp($this->kategori, $topic, $section, $at);
	}
}
