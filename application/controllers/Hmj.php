<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hmj extends CI_Controller
{
	public function index()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'hmj/index',
			'topic' => 'HMJ',
			'kategori' => 'hmj',
		);

		$this->load->view('wrapper', $data);
	}

	public function th()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'hmj/th',
			'kategori' => 'info hmj',
			'topic' => 'JURUSAN TAFSIR HADITS'
		);

		$this->load->view('wrapper', $data);
	}

	public function fa()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'hmj/fa',
			'kategori' => 'info hmj',
			'topic' => 'JURUSAN FILSAFAT AGAMA'
		);

		$this->load->view('wrapper', $data);
	}

	public function pa()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'hmj/pa',
			'kategori' => 'info hmj',
			'topic' => 'JURUSAN PERBANDINGAN AGAMA'
		);

		$this->load->view('wrapper', $data);
	}

	public function tp()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'hmj/tp',
			'kategori' => 'info hmj',
			'topic' => 'JURUSAN TASAWUF PSIKOTERAPI'
		);

		$this->load->view('wrapper', $data);
	}
}
