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
	} 
	
	public function Entrar(){
		$entrar = new Login();

		$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
		$senha = md5(filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING));

		if ($usuario == "" || $senha == "") {
			header('Location: ?m='.base64_encode('campovazio'));
			die();
		}else{
			$entrar = $this->model->Entrar($usuario, $senha);
			$this->model->Sessao($entrar);
		}
	}
}
?>