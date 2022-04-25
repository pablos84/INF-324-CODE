<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fisica extends CI_Controller {

	public function index()
	{
		$this->load->view('cabecera');
		$this->load->view('Fisica');
		$this->load->view('pie');
	}
}
