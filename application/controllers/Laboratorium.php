<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laboratorium extends CI_Controller
{
	public function index()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'laboratorium/index',
			'topic' => 'LABORATORIUM',
			'kategori' => 'laboratorium',
		);

		$this->load->view('wrapper', $data);
	}

	public function perpustakaan()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'laboratorium/perpustakaan',
			'topic' => 'PERPUSTAKAAN',
			'kategori' => 'laboratorium',
		);

		$this->load->view('wrapper', $data);
	}

	public function judul()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'laboratorium/judul',
			'topic' => 'JUDUL SKRIPSI',
			'kategori' => 'laboratorium',
		);

		$this->load->view('wrapper', $data);
	}

	public function abstraksi()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'laboratorium/abstraksi',
			'topic' => 'ABSTRAKSI SKRIPSI',
			'kategori' => 'laboratorium',
		);

		$this->load->view('wrapper', $data);
	}
}
