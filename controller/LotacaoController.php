<?php
require_once "model/Lotacao.php";

class LotacaoController{
	private $model;

	public function __CONSTRUCT(){
		$this->model = new Lotacao();
	}
	public function Index(){
		require_once "view/nav.php";
		require_once "view/lotacao/lotacao.php";
		require_once "view/lotacao/cadastrar.php";
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