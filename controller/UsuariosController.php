<?php
require_once "model/Usuarios.php";
require_once "model/Setor.php";

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
		require_once "view/usuarios/excluir.php";
	}
	
	public function alterarInformacoes(){
		$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
		$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
		$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
		$administrador = filter_input(INPUT_POST, 'administrador', FILTER_SANITIZE_STRING);

		$this->model->alterarInformacoes($nome, $usuario, $administrador, $id);
		}

	public function adicionarUsuario(){
		$nome = filter_input(INPUT_POST, 'nome-add', FILTER_SANITIZE_STRING);
		$usuario = filter_input(INPUT_POST, 'usuario-add', FILTER_SANITIZE_STRING);
		$senha = md5(filter_input(INPUT_POST, 'pass-add', FILTER_SANITIZE_STRING));
		$administrador = filter_input(INPUT_POST, 'administrador-add', FILTER_SANITIZE_STRING);

		$this->model->adicionarUsuario($nome, $usuario, $senha, $administrador);
	}
	public function excluirUsuario(){
		$id = filter_input(INPUT_POST, 'id-input', FILTER_SANITIZE_STRING);
		$nome = filter_input(INPUT_POST, 'nome-input', FILTER_SANITIZE_STRING);
		$usuario = filter_input(INPUT_POST, 'usuario-input', FILTER_SANITIZE_STRING);

		$this->model->excluirUsuario($id, $nome, $usuario);
	}
}
?>