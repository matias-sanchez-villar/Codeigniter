<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct (){
		parent::__construct ();
		$this->load->helper(array("menu", "url"));
	}

	public function index(){
		$data["Menu"]=main_menu();
		$data ['Nombre']  =  '' ; 
		$this->load->view("head");
		$this->load->view("navbar", $data);
		$this->load->view("Inicio", $data);
		$this->load->view("footer");
	}
}