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
		require_once "view/probatorio/editar.php";
	}
	public function Listar(){
		$this->model->Listar();
	}
	public function editar(){
		$siape = filter_input(INPUT_POST, 'siape', FILTER_SANITIZE_NUMBER_INT);
		$ini1 = filter_input(INPUT_POST, 'ini1', FILTER_SANITIZE_NUMBER_INT);
		$fim1 = filter_input(INPUT_POST, 'fim1', FILTER_SANITIZE_NUMBER_INT);
		$ini2 = filter_input(INPUT_POST, 'ini2', FILTER_SANITIZE_NUMBER_INT);
		$fim2 = filter_input(INPUT_POST, 'fim2', FILTER_SANITIZE_NUMBER_INT);
		$ini3 = filter_input(INPUT_POST, 'ini3', FILTER_SANITIZE_NUMBER_INT);
		$fim3 = filter_input(INPUT_POST, 'fim3', FILTER_SANITIZE_NUMBER_INT);
		$ini4 = filter_input(INPUT_POST, 'ini4', FILTER_SANITIZE_NUMBER_INT);
		$fim4 = filter_input(INPUT_POST, 'fim4', FILTER_SANITIZE_NUMBER_INT);

	$this->model->editar($ini1, $fim1, $ini2, $fim2, $ini3, $fim3, $ini4, $fim4, $siape);
	}
	public function cadastrar($siape, $data_probatorio){
		$ini1 = date('Y-m-d', strtotime($data_probatorio)); 
		$fim1 = date("Y-m-d", strtotime('+8 months', strtotime($ini1)));
		$ini2 = date("Y-m-d", strtotime('+ 1 day', strtotime($fim1)));
		$fim2 = date("Y-m-d", strtotime('+8 months', strtotime($ini2)));
		$ini3 = date("Y-m-d", strtotime('+ 1 day', strtotime($fim2)));
		$fim3 = date("Y-m-d", strtotime('+8 months', strtotime($ini3)));
		$ini4 = date("Y-m-d", strtotime('+ 1 day', strtotime($fim3)));
		$fim4 = date("Y-m-d", strtotime('+8 months', strtotime($ini4)));
		$this->model->cadastrar($siape, $ini1, $fim1, $ini2, $fim2, $ini3, $fim3, $ini4, $fim4);
	}
	public function selecionado(){
		require_once "view/nav.php";
		require_once "view/probatorio/selecionado.php";
	}
	public function ficha(){
		require_once "view/probatorio/cabecalho.php";
		require_once "view/probatorio/ficha.php";
	}
}

?>