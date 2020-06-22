<?php
class M_akun extends CI_Model
{
	public function list()
	{
		return $this->db->get('account')->result();
	}
}
