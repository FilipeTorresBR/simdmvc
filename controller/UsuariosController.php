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
		$idusuario = filter_input(INPUT_POST, 'idusuario', FILTER_SANITIZE_NUMBER_INT);
		$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
		$usuario = filter_input(INPUT_POST, 'usuarios', FILTER_SANITIZE_STRING);
		$senha = md5(filter_input(INPUT_POST, 'confirm-pass', FILTER_SANITIZE_STRING));
		$tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);

		header("Location: https://google.com");
		}
}

?>

