<?php
require_once "model/Probatorio.php";

class ProbatorioController{
	private $model;

	public function __CONSTRUCT(){
		$this->model = new Probatorio();
	}
	public function Index(){
		require_once "view/nav.php";
		require_once "view/probatorio/probatorio.php";
	}
	public function Listar(){
		$this->model->Listar();
	}
}

?>