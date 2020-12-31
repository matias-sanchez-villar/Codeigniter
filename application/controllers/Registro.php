<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	public function __construct (){
		parent::__construct ();
		$this->load->helper(array("menu", "url"));
	}

	public function index(){
		$data["Menu"]=main_menu();
		$this->load->view("head");
		$this->load->view("navbar", $data);
		$this->load->view("registro");
		$this->load->view("footer");
	}

	public function create(){
		$Name= $this->input->post("Nombre");
		$LastName= $this->input->post("Apellido");
		$BirthDate= $this->input->post("FechaNacimiento");
		$Email= $this->input->post("email");
		$Pasword= $this->input->post("Pasword");
		var_dump($Name . $LastName . $BirthDate);
	}
	
}