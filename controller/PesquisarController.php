<?php
require_once "model/Pesquisar.php";
require_once "model/Servidores.php";
require_once "model/Setor.php";
require_once "model/Lotacao.php";
require_once "model/Cargo.php";
require_once "controller/ProbatorioController.php";

class PesquisarController{
	private $model;
	private $servidores;
	private $setor;
	private $lotacao;
	private $cargo;
	private $probatorio;


	public function __CONSTRUCT(){
		$this->model = new Pesquisar();
		$this->servidores = new Servidores();
		$this->setor = new Setor();
		$this->lotacao = new Lotacao();
		$this->cargo = new Cargo();
		$this->probatorio = new ProbatorioController();
	}	

	public function Index(){
		require_once "view/nav.php";
		require_once "view/pesquisar/pesquisar.php";
		require_once "view/servidores/editar.php";
	}
}
?>