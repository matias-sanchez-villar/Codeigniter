<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		$this->load->view("head");
		$this->load->view("navbar");
		$this->load->view("Inicio");
		$this->load->view("footer");
	}
}