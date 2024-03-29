<?php

class Upload extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index() {
		$this->load->view('upload-form', array('error' => ''));
	}

	public function do_upload() {
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload', $config);

		if(!$this->upload->do_upload('userfile')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('upload-form', $error);
		} else {
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('upload-success', $data);
		}
	}
}