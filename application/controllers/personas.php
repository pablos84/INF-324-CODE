<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personas extends CI_Controller {

	public function index()
	{
		$this->load->model ("Mibasepabloquisbert_model");
		$filas = $this->Mibasepabloquisbert_model->personas();
		$datos["filas"]=$filas;	
		$this->load->view('cabecera');
		$this->load->view('vista_personas', $datos);
		$this->load->view('pie');
	}

	public function eliminar()
	{
		$this->load->model("Mibasepabloquisbert_model");
		$filas = $this->Mibasepabloquisbert_model->eliminar();
		$filas = $this->Mibasepabloquisbert_model->personas();
		$datos["filas"] = $filas;
		$this->load->view('cabecera');
		$this->load->view('vista_personas', $datos);
		$this->load->view('pie');
	}

	public function editar()
	{
		$this->load->model("Mibasepabloquisbert_model");
		$filas = $this->Mibasepabloquisbert_model->editar();
		$datos["filas"] = $filas;
		$this->load->view('cabecera');
		$this->load->view('vista_edicion', $datos);
		$this->load->view('pie');
	}
	
	public function editarg()
	{
		$this->load->model("Mibasepabloquisbert_model");
		$filas = $this->Mibasepabloquisbert_model->editarg();
		$filas = $this->Mibasepabloquisbert_model->personas();
		$datos["filas"] = $filas;	
		header("Location: ../personas");
	}
	
	public function registrar()
	{
		$this->load->view('cabecera');
		$this->load->view('vista_registrar');
		$this->load->view('pie');
	}

	public function registrarg()
	{
		$this->load->model("Mibasepabloquisbert_model");
		$this->Mibasepabloquisbert_model->registrarg();
		header("Location: ../personas");
	}
}
