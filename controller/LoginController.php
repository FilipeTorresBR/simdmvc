<?php
require_once "model/Login.php";

class LoginController{
	private $model;

	public function __CONSTRUCT(){
		$this->model = new Login();
	}

	public function Index(){
		session_destroy();
		require_once "view/login/login.php";
		include_once "cu.php";
	} 
	
	public function Entrar(){
		$entrar = new Login();

		$usuario = $_REQUEST['usuario'];
		$senha = md5($_REQUEST['pass']);

		$entrar = $this->model->Entrar($usuario, $senha);

		$this->model->Sessao($entrar);
	}
}
?>