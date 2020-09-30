<?php
require_once "model/Usuarios.php";

class UsuariosController{
	private $model;

	public function __CONSTRUCT(){
		$this->model = new Usuarios();
	}
	public function Index(){
		require_once "view/nav.php";
		require_once "view/usuarios/usuarios.php";
		require_once "view/usuarios/cadastrar.php";
		require_once "view/usuarios/editar.php";
	}
	
	public function alterarInformacoes(){
		$dados = new Usuarios();

		$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
		$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
		$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
		$administrador = filter_input(INPUT_POST, 'administrador', FILTER_SANITIZE_STRING);

		$dados = $this->model->alterarInformacoes($nome, $usuario, $administrador, $id);
		}
}

?>