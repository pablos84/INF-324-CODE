<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('cabecera');
		$this->load->view('index');
		$this->load->view('pie');	
	}

	/*public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function index2()
	{
		$datos["Nombre"] = "Pablo";
		$datos["Apellido"] = "Quisbert";
		$datos["minombre"] = $_GET["minombre"];
		$this->load->view('welcome_message2', $datos);
		$this->load->view('welcome_message');
	}*/
	
}
