<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akademik extends CI_Controller
{
	public function index()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'akademik/index',
			'topic' => 'AKADEMIK',
			'kategori' => 'akademik',
		);

		$this->load->view('wrapper', $data);
	}

	public function kalender()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'akademik/kalender',
			'kategori' => 'akademik',
			'topic' => 'KALENDER AKADEMIK'
		);

		$this->load->view('wrapper', $data);
	}

	public function dokumen()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'akademik/dokumen',
			'kategori' => 'akademik',
			'topic' => 'DOKUMEN'
		);

		$this->load->view('wrapper', $data);
	}

	public function pmb()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'akademik/pmb',
			'kategori' => 'akademik',
			'topic' => 'PENERIMAAN MAHASISWA BARU'
		);

		$this->load->view('wrapper', $data);
	}
}
