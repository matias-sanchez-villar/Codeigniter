<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	public function index(){
		$this->load->view("head");
		$this->load->view("navbar");
		$this->load->view("registro");
		$this->load->view("footer");
	}
}