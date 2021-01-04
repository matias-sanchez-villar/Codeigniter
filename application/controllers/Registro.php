<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	public function __construct (){
		parent::__construct ();
		$this->load->helper(array("menu"));
		$this->load->model("Users");
		$this->load->library(array('form_validation'));
	}

	public function index(){
		$data["Menu"]=main_menu();
		$this->load->view("head");
		$this->load->view("navbar", $data);
		$this->load->view("registro");
		$this->load->view("footer");
		$query= $this->db->get("usuario");
	}

	public function create(){
		$Name= $this->input->post("Nombre");
		$LastName= $this->input->post("Apellido");
		$BirthDate= $this->input->post("FechaNacimiento");
		$Email= $this->input->post("email");
		$Pasword= $this->input->post("Pasword");
		
		///validando form_validation
		$config = array(
			array(
				'field' => 'Nombre',
				'label' => 'Nombre de usuario',
				'rules' => 'required|alpha_numeric',
				'errors' => array(
						'required' => 'Error Nombre del usuario invalido.',
					),
			),
			array(
				'field' => 'Apellido',
				'rules' => 'required|alpha_numeric',
				'errors' => array(
						'required' => 'Error Apellido del usuario invalido.',
					),
			),
			array(
				'field' => 'FechaNacimiento',
				'rules' => 'required',
				'errors' => array(
						'required' => 'Error Fecha Nacimiento invalido.',
					),
			),
			array(
				'field' => 'email',
				'rules' => 'required|alpha_numeric',
				'errors' => array(
							'required' => 'Error Email invalido.',
						),
			),
			array(
				'field' => 'Pasword',
				'rules' => 'required',
				'errors' => array(
							'required' => 'Error Contraseña invalida.',
						),
			),
		);
	
		$this->form_validation->set_rules($config);

		if ($this->form_validation->run() == FALSE){
			$this->load->view('registro');
		}
		else{
			$datos= array(
				"ID"=>"auto",
				"Nombre"=> $Name,
				"Apellido"=> $LastName,
				"Email"=> $Email,
				"Password"=> $Pasword,
				"Estado"=> TRUE,
				"FechaNacimiento"=> $BirthDate,
			);

			$this->user->Creater($datos);
		}
	}
}