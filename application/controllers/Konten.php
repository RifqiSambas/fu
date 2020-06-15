
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konten extends CI_Controller
{
	public $category = "";
	public $topic = "";

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_konten');
		$this->load->library('upload');
	}

	public function index()
	{
		$data = array(
			'error' => '',
			'topic' => $_POST['topic'],
			'category' => $_POST['category'],
		);
		$this->load->view('admin/add', $data);
	}

	public function simpan()
	{
		$config['upload_path']          = 'assets/uploads/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
		$config['max_size']             = 10000;
		$config['encrypt_name'] 				= TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);

		if (!$this->upload->do_upload('thumbnail')) {
			$data = array(
				'error' => $this->upload->display_errors(),
				'category' => $this->category,
				'topic' => $this->topic,
			);
			$this->load->view('plain', $data);
		} else {

			$gbr = $this->upload->data();
			$file_name = $gbr['file_name'];

			$id = date('ymdhis');
			$thumbnail = $file_name;
			$date = $this->input->post('date');
			$author = $this->input->post('author');
			$topic = $this->input->post('topic');
			$category = $this->input->post('category');
			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$content = $this->input->post('content');

			$this->category = $category;
			$this->topic = $topic;

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
			$data = array(
				'upload_data' => $this->upload->data(),
				'category' => $this->category,
				'topic' => $this->topic,
			);
			$this->load->view('upload_success', $data);
		}
	}

	public function cek()
	{
		print_r($_POST);
		print_r($this->upload->data());
	}

	public function view($id)
	{
		$data = array(
			'data' => $this->M_konten->single($id),
			'recent' => $this->M_konten->recent($id),
		);
		$this->load->view('single', $data);
	}

	public function asset()
	{
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
		$config['upload_path']          = 'assets/uploads/';
		$config['max_size']             = 10000;
		$config['encrypt_name'] 				= TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		$this->category = $this->input->post('category');
		$this->topic = $this->input->post('topic');

		if (!$this->upload->do_upload('asset')) {
			$data = array(
				'error' => $this->upload->display_errors(),
				'category' => $this->category,
				'topic' => $this->topic,
			);
			$this->load->view('plain', $data);
		} else {

			$data = array(
				'upload_data' => $this->upload->data(),
				'category' => $this->category,
				'topic' => $this->topic,
				'aset' => true,
			);
			$this->load->view('upload_success', $data);
		}
	}
}
