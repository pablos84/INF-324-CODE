<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informatica extends CI_Controller {

	public function index()
	{
		$this->load->view('cabecera');
		$this->load->view('informatica');
		$this->load->view('pie');
	}
}
