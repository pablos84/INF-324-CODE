<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mibasepabloquisbert_model extends CI_Model {

	public function __construct()
	{
		parent::__construct() ;
		$this->load->database();
	}
	
	public function personas()
	{
		$query = $this->db->query("select * from persona");
		return $query->result();
	}
	
	public function eliminar()
	{
		$id = $_GET["id"];
		$this->db->query("delete from persona where id='$id'");
	}
	
	public function editar()
	{
		$id = $_GET["id"];
		$query = $this->db->query("select * from persona where id='$id'");
		return $query->result();
	}

	public function editarg()
	{
		$id = $_GET["id"];
		$CI = $_GET["CI"];
		$Nombre_completo = $_GET["Nombre_completo"];
		$Fecha_de_nacimiento = $_GET["Fecha_de_nacimiento"];
		$departamento = $_GET["departamento"];
		$this->db->query("update persona set CI = '" . $CI . "',Nombre_completo = '" . $Nombre_completo . "', Fecha_de_nacimiento = '" . $Fecha_de_nacimiento . "', departamento = '" . $departamento ."' where id='" . $id . "'");	
	}

	public function registrarg()
	{
		$CI = $_POST["CI"];
		$Nombre_completo = $_POST["Nombre_completo"];
		$Fecha_de_nacimiento = $_POST["Fecha_de_nacimiento"];
		$departamento = $_POST["departamento"];
		$rol = "estudiante";
		$data= array(
			'CI' => $CI, 
			'Nombre_completo' => $Nombre_completo, 
			'Fecha_de_nacimiento' => $Fecha_de_nacimiento,
			'departamento'=> $departamento, 
			'rol' => $rol
		);
		$this->db-> INSERT("persona", $data);
		
		$Usuario = $_POST["Nombre_completo"];
		$Password = md5($_POST["CI"]);
		$data = array(
			'CI' => $CI,
			'Usuario' => $Usuario,
			'Password' => $Password
		);
		$this->db->INSERT("acceso", $data);
	}
}
?>