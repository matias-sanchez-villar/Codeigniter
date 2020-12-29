<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function vistas(){
		$data["titulo"]="Primera vez con un framework";
		$this->load->view("head", $data);
		$this->load->view("navbar");
		$this->load->view("vistas");
		$this->load->view("footer");
	}
}