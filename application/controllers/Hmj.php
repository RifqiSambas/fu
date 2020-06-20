<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hmj extends CI_Controller
{
	public $kategori = "hmj";

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_konten');
	}

	public function index($at = 1)
	{
		$data = array(
			'single' => false,
			'pages' => 'common/main_content',
			'content' => 'list_category',
			'section' => 'INFO HMJ',
			'kategori' => 'hmj',
		);

		$this->load->view('wrapper', $data);
	}

	public function th($at = 1)
	{
		$topic = 'th';
		$section = 'JURUSAN TAFSIR HADITS';
		$this->M_konten->wrp($this->kategori, $topic, $section, $at);
	}

	public function fa($at = 1)
	{
		$topic = 'fa';
		$section = 'JURUSAN FILSAFAT AGAMA';
		$this->M_konten->wrp($this->kategori, $topic, $section, $at);
	}

	public function pa($at = 1)
	{
		$topic = 'pa';
		$section = 'JURUSAN PERBANDINGAN AGAMA';
		$this->M_konten->wrp($this->kategori, $topic, $section, $at);
	}

	public function tp($at = 1)
	{
		$topic = 'tp';
		$section = 'JURUSAN TASAWUF PSIKOTERAPI';
		$this->M_konten->wrp($this->kategori, $topic, $section, $at);
	}
}
