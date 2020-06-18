<?php
class M_konten extends CI_Model
{
	public function save($content)
	{
		return $this->db->insert('konten', $content);
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

	public function content_cat($category)
	{
		$this->db->where('category', $category);
		$this->db->limit(9);
		return $this->db->get('konten')->result();
	}
}
