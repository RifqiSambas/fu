<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Publikasi extends CI_Controller
{
	public function index()
	{
		$data = array(
			'pages' => 'publikasi/wrapper',
		);

		$this->load->view('wrapper', $data);
	}

	public function buku()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'publikasi/buku',
			'topic' => 'BUKU',
			'kategori' => 'publikasi',
		);

		$this->load->view('wrapper', $data);
	}

	public function jurnal()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'publikasi/jurnal',
			'topic' => 'JURNAL',
			'kategori' => 'publikasi',
		);

		$this->load->view('wrapper', $data);
	}

	public function kliping()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'publikasi/kliping',
			'topic' => 'KLIPING KORAN',
			'kategori' => 'publikasi',
		);

		$this->load->view('wrapper', $data);
	}
}
