<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct (){
		parent::__construct ();
		$this->load->helper(array("menu", "url"));
	}
	
	public function index(){
		$data["Menu"]=main_menu();
		$this->load->view("head");
		$this->load->view("navbar", $data);
		$this->load->view("login");
		$this->load->view("footer");
	}
}