<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function index()
	{
		$data = array(
			'menu' => [
				'profil' => [
					[
						'nama' => 'Sejarah',
						'url' => 'sejarah',
						'icon' => 'edit',
						'aksi' => 'Edit'
					],
					[
						'nama' => 'Visi Misi Tujuan',
						'url' => 'visi',
						'icon' => 'edit',
						'aksi' => 'Edit'
					],
					[
						'nama' => 'Program Studi',
						'url' => 'program',
						'icon' => 'edit',
						'aksi' => 'Edit'
					],
					[
						'nama' => 'Staf Pengajar',
						'url' => 'staf',
						'icon' => 'edit',
						'aksi' => 'Edit'
					],
					[
						'nama' => 'Struktur Kepengurusan',
						'url' => 'struktur',
						'icon' => 'edit',
						'aksi' => 'Edit'
					],
				],
				'akademik' => [
					[
						'nama' => 'Kalender',
						'url' => 'kalender',
						'icon' => 'edit',
						'aksi' => 'Edit'
					],
					[
						'nama' => 'Dokumen',
						'url' => 'dokumen',
						'icon' => 'android-add',
						'aksi' => 'Tambah'
					],
					[
						'nama' => 'PMB',
						'url' => 'pmb',
						'icon' => 'edit',
						'aksi' => 'Edit'
					],
				],
				'arsip' => [
					[
						'nama' => 'Berita',
						'url' => 'berita',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
					],
					[
						'nama' => 'Pojok Dekan',
						'url' => 'dekan',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
					],
					[
						'nama' => 'Pojok Wadek',
						'url' => 'wadek',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
					],
					[
						'nama' => 'Artikel Dosen',
						'url' => 'dosen',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
					],
					[
						'nama' => 'Artikel Mahasiswa',
						'url' => 'mahasiswa',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
					],
					[
						'nama' => 'Artikel Alumni',
						'url' => 'alumni',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
					],
					[
						'nama' => 'Buku',
						'url' => 'buku',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
					],
				],
				'publikasi' => [
					[
						'nama' => 'Buku',
						'url' => 'buku',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
					],
					[
						'nama' => 'Jurnal',
						'url' => 'jurnal',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
					],
					[
						'nama' => 'Kliping Koran',
						'url' => 'kliping',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
					],
				],
				'pengabdian' => [
					[
						'nama' => 'Desa Binaan',
						'url' => 'desa',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
					],
					[
						'nama' => 'Konseling',
						'url' => 'konseling',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
					],
				],
				'laboratorium' => [
					[
						'nama' => 'Perpustakaan',
						'url' => 'perpustakaan',
						'icon' => 'edit',
						'aksi' => 'Edit',
					],
					[
						'nama' => 'Judul Skripsi',
						'url' => 'judul',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
					],
					[
						'nama' => 'Abstraksi Skripsi',
						'url' => 'abstraksi',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
					],
				],
				'pengumuman' => [
					[
						'nama' => 'Beasiswa',
						'url' => 'beasiswa',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
					],
					[
						'nama' => 'Kegiatan Kami',
						'url' => 'kegiatan',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
					],
					[
						'nama' => 'Lowongan Kerja',
						'url' => 'lowongan',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
					],
				],
				'hmj' => [
					[
						'nama' => 'Hima TH',
						'url' => 'th',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
					],
					[
						'nama' => 'Hima TH',
						'url' => 'fa',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
					],
					[
						'nama' => 'Hima PA',
						'url' => 'pa',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
					],
					[
						'nama' => 'Hima TP',
						'url' => 'tp',
						'icon' => 'android-add',
						'aksi' => 'Tambah',
					],
				],
			],
		);
		$this->load->view('admin/wrapper', $data);
	}
}
