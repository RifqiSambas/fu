<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
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
			'content' => 'profil/index',
			'section' => 'PROFIL',
			'kategori' => 'profil',
			'recent' => $this->M_konten->recent('berita'),
		);

		$this->load->view('wrapper', $data);
	}

	public function sejarah()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'profil/sejarah',
			'section' => 'SEJARAH',
			'kategori' => 'profil',
			'recent' => $this->M_konten->recent('berita'),

		);

		$this->load->view('wrapper', $data);
	}

	public function visi()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'profil/visi',
			'kategori' => 'profil',
			'recent' => $this->M_konten->recent('berita'),

			'section' => 'VISI MISI TUJUAN'
		);

		$this->load->view('wrapper', $data);
	}

	public function program()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'profil/program',
			'kategori' => 'profil',
			'recent' => $this->M_konten->recent('berita'),

			'section' => 'PROGRAM STUDI'
		);

		$this->load->view('wrapper', $data);
	}

	public function staf()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'profil/staf',
			'kategori' => 'profil',
			'recent' => $this->M_konten->recent('berita'),

			'section' => 'STAF PENGAJAR'
		);

		$this->load->view('wrapper', $data);
	}

	public function struktur()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'profil/struktur',
			'kategori' => 'profil',
			'recent' => $this->M_konten->recent('berita'),

			'section' => 'STRUKTUR KEPENGURUSAN'
		);

		$this->load->view('wrapper', $data);
	}
}
