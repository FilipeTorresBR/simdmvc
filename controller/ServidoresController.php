<?php
require_once "model/Servidores.php";

class ServidoresController{
	private $model;

	public function __CONSTRUCT(){
		$this->model = new Servidores();
	}
	public function Index(){
		require_once "view/nav.php";
		require_once "view/servidores/servidores.php";
	}
	public function Listar(){
		$this->model->Listar();
	}
}

?>