<?php
class M_konten extends CI_Model
{
	public function save($content)
	{
		return $this->db->insert('konten', $content);
	}

	public function content($column, $offset = 0)
	{
		$this->db->order_by('date', 'desc');
		$this->db->where('topic', $column);
		$this->db->limit(4, $offset);
		return $this->db->get('konten')->result();
	}

	public function single($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('konten')->row();
	}

	public function recent($column)
	{
		$this->db->where('topic !=', $column);
		$this->db->order_by('id', 'RANDOM');
		return $this->db->get('konten')->result();
	}

	public function part($column)
	{
		$this->db->where('topic', $column);
		return $this->db->count_all_results('konten');
	}
}
