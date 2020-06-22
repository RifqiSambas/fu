<?php
class M_auth extends CI_Model
{
	public function index()
	{
	}

	public function register($data)
	{
		if ($this->db->insert('account', $data)) {
			return true;
		} else {
			return false;
		}
	}

	public function login($email, $password)
	{
		$query = $this->db->get_where('account', array('email' => $email, 'password' => md5($password)));

		if ($query->num_rows() == 1) {
			$this->db->where('email', $email);
			return $this->db->get('account')->row();
		} else {
			return false;
		}
	}
}
