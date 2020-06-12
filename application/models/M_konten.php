<?php
class M_konten extends CI_Model
{
	public function save($content)
	{
		return $this->db->insert('konten', $content);
	}

	public function get_post()
	{
	}

	public function get_by_topic()
	{
	}

	public function get_by_category()
	{
	}
}
