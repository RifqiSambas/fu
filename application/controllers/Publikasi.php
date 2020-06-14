<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Publikasi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_konten');
	}
	public function index()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'publikasi/index',
			'section' => 'PUBLIKASi',
			'kategori' => 'publikasi',
			'recent' => $this->M_konten->recent('berita'),

		);

		$this->load->view('wrapper', $data);
	}

	public function buku()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'publikasi/buku',
			'section' => 'BUKU',
			'kategori' => 'publikasi',
			'recent' => $this->M_konten->recent('berita'),

		);

		$this->load->view('wrapper', $data);
	}

	public function jurnal()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'publikasi/jurnal',
			'section' => 'JURNAL',
			'kategori' => 'publikasi',
			'recent' => $this->M_konten->recent('berita'),

		);

		$this->load->view('wrapper', $data);
	}

	public function kliping()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'publikasi/kliping',
			'section' => 'KLIPING KORAN',
			'kategori' => 'publikasi',
			'recent' => $this->M_konten->recent('berita'),

		);

		$this->load->view('wrapper', $data);
	}
}
