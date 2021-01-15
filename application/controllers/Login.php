<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct (){
		parent::__construct ();
		$this->load->helper(array("menu", "url", 'autentificacion/login'));
		$this->load->library('form_validation');
	}

	public function index(){
		$data["Menu"]=main_menu();
		$this->load->view("head");
		$this->load->view("navbar", $data);
		$this->load->view("login");
		$this->load->view("footer");
	}

	public function validate(){
		$rules=getLogin();
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run()===FALSE){
			$this->load->view("login");
		}else {
			$this->index();
		}
	}
}