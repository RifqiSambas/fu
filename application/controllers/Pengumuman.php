<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{
	public function index()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'pengumuman/index',
			'topic' => 'PENGUMUMAN',
			'kategori' => 'pengumuman',
		);

		$this->load->view('wrapper', $data);
	}

	public function beasiswa()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'pengumuman/beasiswa',
			'topic' => 'BEASISWA',
			'kategori' => 'pengumuman',
		);

		$this->load->view('wrapper', $data);
	}

	public function kegiatan()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'pengumuman/kegiatan',
			'topic' => 'KEGIATAN KAMI',
			'kategori' => 'pengumuman',
		);

		$this->load->view('wrapper', $data);
	}

	public function lowongan()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'pengumuman/lowongan',
			'topic' => 'LOWONGAN KERJA',
			'kategori' => 'pengumuman',
		);

		$this->load->view('wrapper', $data);
	}
}
