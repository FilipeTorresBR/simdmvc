<?php
require_once "model/Chefia.php";

class ChefiaController{
	private $model;

	public function __CONSTRUCT(){
		$this->model = new Chefia();
	}
	public function Index(){
		require_once "view/nav.php";
		require_once "view/chefia/chefia.php";
	}
	public function Listar(){
		$this->model->Listar();
	}
}

?>