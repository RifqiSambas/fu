<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
	public function index()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'profil/index',
			'section' => 'PROFIL',
			'kategori' => 'profil',
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
		);

		$this->load->view('wrapper', $data);
	}

	public function visi()
	{
		$data = array(
			'pages' => 'common/content',
			'content' => 'profil/visi',
			'kategori' => 'profil',
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
			'section' => 'STRUKTUR KEPENGURUSAN'
		);

		$this->load->view('wrapper', $data);
	}
}

