<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengabdian extends CI_Controller
{
	public function index()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'pengabdian/index',
			'topic' => 'PENGABDIAN',
			'kategori' => 'pengabdian',
		);

		$this->load->view('wrapper', $data);
	}

	public function desa()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'pengabdian/desa',
			'topic' => 'DESA BINAAN',
			'kategori' => 'pengabdian',
		);

		$this->load->view('wrapper', $data);
	}

	public function konseling()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'pengabdian/konseling',
			'topic' => 'KONSELING',
			'kategori' => 'pengabdian',
		);

		$this->load->view('wrapper', $data);
	}
}
