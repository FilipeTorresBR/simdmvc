<?php
require_once "model/Cargo.php";

class CargoController{
	private $model;

	public function __CONSTRUCT(){
		$this->model = new Cargo();
	}
	public function Index(){
		require_once "view/nav.php";
		require_once "view/cargo/cargo.php";
	}
	public function Listar(){
		$this->model->Listar();
	}
}

?>