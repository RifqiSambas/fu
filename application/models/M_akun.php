<?php
class M_akun extends CI_Model
{
	public function list()
	{
		return $this->db->get('account')->result();
	}

	public function add($data)
	{
		if ($this->db->insert('account', $data)) {
			return true;
		} else {
			return false;
		}
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		if ($this->db->delete('account')) {
			return true;
		} else {
			return false;
		}
	}

	public function update($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->set($data);
		if ($this->db->update('account')) {
			return true;
		} else {
			return false;
		}
	}

	public function get($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('account')->row_array();
	}
}
