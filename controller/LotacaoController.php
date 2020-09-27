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
	}
	public function Listar(){
		$this->model->Listar();
	}
}

?>