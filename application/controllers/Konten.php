
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konten extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_konten');
		$this->load->library('upload');
	}

	public function index()
	{
		$data = array(
			'error' => ''
		);
		$this->load->view('plain', $data);
	}


	public function simpan()
	{
		$config['upload_path']          = 'assets/uploads/';
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

			$gbr = $this->upload->data();
			$file_name = $gbr['file_name'];

			$id = date('ymdhi');
			$thumbnail = $file_name;
			$date = $this->input->post('date');
			$author = $this->input->post('author');
			$topic = $this->input->post('topic');
			$category = $this->input->post('category');
			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$content = $this->input->post('content');

			$Content = array(
				'id' => $id,
				'date' => $date,
				'author' => $author,
				'topic' => $topic,
				'category' => $category,
				'title' => $title,
				'thumbnail' => $thumbnail,
				'description' => $description,
				'content' => $content,
			);

			$this->M_konten->save($Content);
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('upload_success', $data);
		}
	}

	public function cek()
	{
		print_r($_POST);
		print_r($this->upload->data());
	}
}
