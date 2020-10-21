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
		require_once "view/setor/cadastrar.php";
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