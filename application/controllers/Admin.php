<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_konten');
	}
	public function index()
	{
		$data = array(
			'pages' => 'admin/dashboard',
			'menu' => [
				'profil' => [
					[
						'nama' => 'Sejarah',
						'url' => 'sejarah',
						'icon' => 'edit',
						'aksi' => 'Edit',
						'list' => false,
					],
					[
						'nama' => 'Visi Misi Tujuan',
						'url' => 'visi',
						'icon' => 'edit',
						'aksi' => 'Edit',
						'list' => false,
					],
					[
						'nama' => 'Program Studi',
						'url' => 'program',
						'icon' => 'edit',
						'aksi' => 'Edit',
						'list' => false,
					],
					[
						'nama' => 'Staf Pengajar',
						'url' => 'staf',
						'icon' => 'edit',
						'aksi' => 'Edit',
						'list' => false,
					],
					[
						'nama' => 'Struktur Kepengurusan',
						'url' => 'struktur',
						'icon' => 'edit',
						'aksi' => 'Edit',
						'list' => false,
					],
				],
				'akademik' => [
					[
						'nama' => 'Kalender',
						'url' => 'kalender',
						'icon' => 'edit',
						'aksi' => 'Edit',
						'list' => false,
					],
					[
						'nama' => 'Dokumen',
						'url' => 'dokumen',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
						'list' => true,
					],
					[
						'nama' => 'PMB',
						'url' => 'pmb',
						'icon' => 'edit',
						'aksi' => 'Edit',
						'list' => false,
					],
				],
				'arsip' => [
					[
						'nama' => 'Berita',
						'url' => 'berita',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
						'list' => true,
					],
					[
						'nama' => 'Pojok Dekan',
						'url' => 'dekan',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
						'list' => true,
					],
					[
						'nama' => 'Pojok Wadek',
						'url' => 'wadek',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
						'list' => true,
					],
					[
						'nama' => 'Artikel Dosen',
						'url' => 'dosen',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
						'list' => true,
					],
					[
						'nama' => 'Artikel Mahasiswa',
						'url' => 'mahasiswa',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
						'list' => true,
					],
					[
						'nama' => 'Artikel Alumni',
						'url' => 'alumni',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
						'list' => true,
					],
					[
						'nama' => 'Buku',
						'url' => 'buku',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
						'list' => true,
					],
				],
				'publikasi' => [
					[
						'nama' => 'Buku',
						'url' => 'buku',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
						'list' => true,
					],
					[
						'nama' => 'Jurnal',
						'url' => 'jurnal',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
						'list' => true,
					],
					[
						'nama' => 'Kliping Koran',
						'url' => 'kliping',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
						'list' => true,
					],
				],
				'pengabdian' => [
					[
						'nama' => 'Desa Binaan',
						'url' => 'desa',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
						'list' => true,
					],
					[
						'nama' => 'Konseling',
						'url' => 'konseling',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
						'list' => true,
					],
				],
				'laboratorium' => [
					[
						'nama' => 'Perpustakaan',
						'url' => 'perpustakaan',
						'icon' => 'edit',
						'aksi' => 'Edit',
						'list' => true,
					],
					[
						'nama' => 'Judul Skripsi',
						'url' => 'judul',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
						'list' => true,
					],
					[
						'nama' => 'Abstraksi Skripsi',
						'url' => 'abstraksi',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
						'list' => true,
					],
				],
				'pengumuman' => [
					[
						'nama' => 'Beasiswa',
						'url' => 'beasiswa',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
						'list' => true,
					],
					[
						'nama' => 'Kegiatan Kami',
						'url' => 'kegiatan',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
						'list' => true,
					],
					[
						'nama' => 'Lowongan Kerja',
						'url' => 'lowongan',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
						'list' => true,
					],
				],
				'hmj' => [
					[
						'nama' => 'Hima TH',
						'url' => 'th',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
						'list' => true,
					],
					[
						'nama' => 'Hima TH',
						'url' => 'fa',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
						'list' => true,
					],
					[
						'nama' => 'Hima PA',
						'url' => 'pa',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
						'list' => true,
					],
					[
						'nama' => 'Hima TP',
						'url' => 'tp',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
						'list' => true,
					],
				],
			],
		);
		$this->load->view('admin/wrapper', $data);
	}

	public function berita()
	{
		$data = array(
			'data' => $this->M_konten->list('berita'),
			'pages' => 'admin/list',
			'title' => 'BERITA',
		);

		$this->load->view('admin/wrapper', $data);
	}
}
