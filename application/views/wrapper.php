<?php
$this->load->view('common/start');
$this->load->view('common/header');
if ($single === true) {
	$this->load->view('single');
} else {
	$this->load->view($pages);
}
$this->load->view('common/footer');
$this->load->view('common/end');
