<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	public function __construct (){
		parent::__construct ();
		$this->load->helper(array("getmenu", "url"));
	}

	public function index(){
		$this->load->view("head");
		$this->load->view("navbar", $data);
		$this->load->view("registro");
		$this->load->view("footer");
	}
	
}