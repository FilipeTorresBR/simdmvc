<?php
require_once "model/Pesquisar.php";

class PesquisarController{
	private $model;

	public function __CONSTRUCT(){
		$this->model = new Pesquisar();
	}	

	public function Index(){
		require_once "view/nav.php";
		require_once "view/pesquisar/pesquisar.php";
	}
}
?>