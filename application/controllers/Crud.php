<?php

class Crud extends CI_Controller {
	public function index() {
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('form');
		$this->show_customer();
	}

	public function save_customer() {		
		$this->load->helper('url');
		$name = $this->input->post("txtName");
		$phone = $this->input->post("txtPhone");
		$address = $this->input->post("txtAddress");
		// echo "$name, $phone, $address";
		$this->db->query("insert into customer(name, phone, address) values('$name', '$phone', '$address')");

		redirect("crud");
	}

	public function show_customer() {
		$query = $this->db->query("select name, phone, address from customer");
		$this->load->view("show-customer", array("customers" => $query));
	}
}
