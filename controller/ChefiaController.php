<?php
require_once "model/Chefia.php";
require_once "model/Servidores.php";
require_once "model/Setor.php";

class ChefiaController{
	private $model;
	private $servidores;
	private $setor;

	public function __CONSTRUCT(){
		$this->model = new Chefia();
		$this->servidores = new Servidores();
		$this->setor = new Setor();
	}
	public function Index(){
		require_once "view/nav.php";
		require_once "view/chefia/chefia.php";
		require_once "view/chefia/editar.php";
		require_once "view/chefia/cadastrar.php";
	}
	public function Listar(){
		$this->model->Listar();
	}
	public function editar(){
		$setor = filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_NUMBER_INT);
		$siape = filter_input(INPUT_POST, 'siape', FILTER_SANITIZE_NUMBER_INT);
		$inicio_vigencia = filter_input(INPUT_POST, 'inicio_vigencia', FILTER_SANITIZE_STRING);
		$portaria = filter_input(INPUT_POST, 'portaria', FILTER_SANITIZE_STRING);
		$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

		$this->model->editar($setor, $siape, $inicio_vigencia, $portaria, $id);
	}
	public function cadastrar(){
		$setor = filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_NUMBER_INT);
		$siape = filter_input(INPUT_POST, 'siape', FILTER_SANITIZE_NUMBER_INT);
		$inicio_vigencia = filter_input(INPUT_POST, 'inicio_vigencia', FILTER_SANITIZE_STRING);
		$portaria = filter_input(INPUT_POST, 'portaria', FILTER_SANITIZE_STRING);

		$this->model->cadastrar($setor, $siape, $inicio_vigencia, $portaria);	
	}
}

?>