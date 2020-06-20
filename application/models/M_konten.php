<?php
class M_konten extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function save($content)
	{
		return $this->db->insert('konten', $content);
	}

	public function wrp($kategori, $topic, $section, $at, $single = false)
	{
		$part = $at;
		if ($at == 1) $at = $at - 1;
		else if ($at > 1) $at = ($at - 1) * 4;


		$data = array(
			'single' => $single,
			'pages' => 'common/content',
			'content' => 'list_topic',
			'kategori' => $kategori,
			'topic' => $topic,
			'section' => $section,
			'data' => $this->M_konten->content($topic, $at),
			'recent' => $this->M_konten->recent($topic),
			'jumlah' => $this->M_konten->part($topic),
			'at' => $at,
			'part' => $part,
		);
		$this->load->view('wrapper', $data);
	}

	public function visitor()
	{
		$ip    = $this->input->ip_address();
		$date  = date("Y-m-d");
		$waktu = time();
		$timeinsert = date("Y-m-d H:i:s");
		$s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
		$ss = isset($s) ? ($s) : 0;
		if ($ss == 0) {
			$this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
		} else {
			$this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
		}
		$pengunjunghariini  = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows();
		$dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();
		$totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0;
		$bataswaktu = time() - 300;
		$pengunjungonline  = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows();

		$pengunjung = array(
			'today' => $pengunjunghariini,
			'total' => $totalpengunjung,
			'online' => $pengunjungonline,
		);
		return $pengunjung;
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		if ($this->db->delete('konten')) {
			return true;
		} else {
			return false;
		}
	}

	public function update($id, $content)
	{
		$this->db->where('id', $id);
		return $this->db->replace('konten', $content);
	}

	public function content($column, $offset = 0)
	{
		$this->db->order_by('date', 'desc');
		$this->db->where('topic', $column);
		$this->db->limit(4, $offset);
		return $this->db->get('konten')->result();
	}

	public function list($column)
	{

		$this->db->order_by('date', 'asc');
		$this->db->where('topic', $column);
		return $this->db->get('konten')->result();
	}

	public function single($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('konten')->row();
	}

	public function recent($column, $limit = 7)
	{
		$this->db->where('topic !=', $column);
		$this->db->order_by('id', 'RANDOM');
		$this->db->limit($limit);
		return $this->db->get('konten')->result();
	}

	public function part($column)
	{
		$this->db->where('topic', $column);
		return $this->db->count_all_results('konten');
	}

	public function pages($column, $limit = 2)
	{
		$this->db->order_by('date', 'asc');
		$this->db->where('topic', $column);
		$this->db->limit($limit);
		return $this->db->get('konten')->result();
	}

	public function get_topic($id)
	{
		$this->db->select('topic');
		$this->db->where('id', $id);
		return $this->db->get('konten')->row();
	}

	public function get_category($id)
	{
		$this->db->select('category');
		$this->db->where('id', $id);
		return $this->db->get('konten')->row();
	}

	public function content_cat($category)
	{
		$this->db->where('category', $category);
		$this->db->limit(9);
		return $this->db->get('konten')->result();
	}
}
