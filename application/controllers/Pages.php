<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_konten');
		$this->load->library('session');
	}

	public function index()
	{

		$ip    = $this->input->ip_address(); // Mendapatkan IP user
		$date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
		$waktu = time(); //
		$timeinsert = date("Y-m-d H:i:s");
		$s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
		$ss = isset($s) ? ($s) : 0;
		if ($ss == 0) {
			$this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
		} else {
			$this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
		}
		$pengunjunghariini  = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows(); // Hitung jumlah pengunjung
		$dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();
		$totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0; // hitung total pengunjung
		$bataswaktu = time() - 300;
		$pengunjungonline  = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows(); // hitung pengunjung online
		$pengunjung = array(
			'today' => $pengunjunghariini, 'total' => $totalpengunjung,
			'online' => $pengunjungonline,
		);

		$data = array(
			'single' => false,
			'pages' => 'home/index',
			'data' => $this->M_konten->content('berita'),
			'berita' => $this->M_konten->content('berita'),
			'dekan' => $this->M_konten->pages('dekan'),
			'wadek' => $this->M_konten->pages('wadek'),
			'dosen' => $this->M_konten->pages('dosen'),
			'alumni' => $this->M_konten->pages('alumni'),
			'mahasiswa' => $this->M_konten->pages('mahasiswa'),
			'buku' => $this->M_konten->pages('buku', 4),
			'akademik' => $this->M_konten->content('dekan'),
			'pengumuman' => $this->M_konten->content_cat('pengumuman'),
			'kegiatan' => $this->M_konten->content('kegiatan'),
			'sambutan' => $this->M_konten->single('sambutan'),
			'pengunjung' => $pengunjung,
			'highlight' => $this->M_konten->content('kegiatan'),
		);

		$this->load->view('wrapper', $data);
	}
}
