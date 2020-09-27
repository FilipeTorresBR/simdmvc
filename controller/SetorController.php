<?php
require_once "model/Setor.php";

class SetorController{
	private $model;

	public function __CONSTRUCT(){
		$this->model = new Setor();
	}
	public function Index(){
		require_once "view/nav.php";
		require_once "view/setor/setor.php";
	}
	public function Listar(){
		$this->model->Listar();
	}
}

?>