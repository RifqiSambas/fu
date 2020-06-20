
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Arsip extends CI_Controller
{

	public $kategori = "arsip";

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
			'section' => 'ARSIP',
			'kategori' => 'arsip',
		);

		$this->load->view('wrapper', $data);
	}

	public function berita($at = 1)
	{
		$topic = 'berita';
		$section = 'BERITA';
		$this->M_konten->wrp($this->kategori, $topic, $section, $at);
	}

	public function dekan($at = 1)
	{
		$topic = 'dekan';
		$section = 'POJOK DEKAN';
		$this->M_konten->wrp($this->kategori, $topic, $section, $at);
	}

	public function wadek($at = 1)
	{
		$topic = 'wadek';
		$section = 'POJOK WAKIL DEKAN';
		$this->M_konten->wrp($this->kategori, $topic, $section, $at);
	}

	public function dosen($at = 1)
	{
		$topic = 'dosen';
		$section = 'ARTIKEL DOSEN';
		$this->M_konten->wrp($this->kategori, $topic, $section, $at);
	}

	public function mahasiswa($at = 1)
	{
		$topic = 'mahasiswa';
		$section = 'ARTIKEL MAHASISWA';
		$this->M_konten->wrp($this->kategori, $topic, $section, $at);
	}

	public function akademik($at = 1)
	{
		$topic = 'akademik';
		$section = 'INFORMASI AKADEMIK';
		$this->M_konten->wrp($this->kategori, $topic, $section, $at);
	}

	public function alumni($at = 1)
	{
		$topic = 'alumni';
		$section = 'ARTIKEL ALUMNI';
		$this->M_konten->wrp($this->kategori, $topic, $section, $at);
	}

	public function buku($at = 1)
	{
		$topic = 'buku';
		$section = 'BUKU-BUKU';
		$this->M_konten->wrp($this->kategori, $topic, $section, $at);
	}
}
