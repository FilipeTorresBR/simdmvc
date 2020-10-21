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
		require_once "view/cargo/cadastrar.php";
	}
	public function Listar(){
		$this->model->Listar();
	}
	public function cadastrar(){
		$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

		$this->model->cadastrar($nome);
	}
}

?>