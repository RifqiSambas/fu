
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Asset extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_konten');
		$this->load->library('upload');
	}

	public function simpan()
	{
		$config['upload_path']          = 'assets/kcfinder/upload';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		$config['encrypt_name'] 				= TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);

		if (!$this->upload->do_upload('thumbnail')) {
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('plain', $error);
		} else {

			$data = array('upload_data' => $this->upload->data());
			$this->load->view('upload_success', $data);
		}
	}
}
