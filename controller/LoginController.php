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
	public function Logout(){
		$_SESSION['id'] = "";
		$_SESSION['nome'] = "";
		$_SESSION['usuario'] = "";
		$_SESSION['administrador'] = "";

		header("Location: ?c=".base64_encode('Login')."&a=".base64_encode('loadingOff'));
	}
	public function loadingOn(){
		require_once "view/login/loading_on.php";
	}
	public function loadingOff(){
		require_once "view/login/loading_off.php";
	}
}
?>