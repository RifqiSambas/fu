
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Arsip extends CI_Controller
{
	public function index()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'arsip/index',
			'topic' => 'ARSIP',
			'kategori' => 'arsip',
		);

		$this->load->view('wrapper', $data);
	}

	public function berita()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'arsip/berita',
			'kategori' => 'akademik',
			'topic' => 'BERITA'
		);

		$this->load->view('wrapper', $data);
	}

	public function dekan()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'arsip/dekan',
			'kategori' => 'akademik',
			'topic' => 'POJOK DEKAN'
		);

		$this->load->view('wrapper', $data);
	}

	public function wadek()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'arsip/wadek',
			'kategori' => 'akademik',
			'topic' => 'POJOK WAKIL DEKAN'
		);

		$this->load->view('wrapper', $data);
	}

	public function dosen()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'arsip/dosen',
			'kategori' => 'akademik',
			'topic' => 'ARTIKEL DOSEN'
		);

		$this->load->view('wrapper', $data);
	}

	public function mahasiswa()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'arsip/mahasiswa',
			'kategori' => 'akademik',
			'topic' => 'ARTIKEL MAHASISWA'
		);

		$this->load->view('wrapper', $data);
	}

	public function akademik()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'arsip/akademik',
			'kategori' => 'akademik',
			'topic' => 'INFORMASI AKADEMIK'
		);

		$this->load->view('wrapper', $data);
	}

	public function alumni()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'arsip/alumni',
			'kategori' => 'akademik',
			'topic' => 'ARTIKEL ALUMNI'
		);

		$this->load->view('wrapper', $data);
	}

	public function buku()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'arsip/buku',
			'kategori' => 'akademik',
			'topic' => 'BUKU'
		);

		$this->load->view('wrapper', $data);
	}
}
