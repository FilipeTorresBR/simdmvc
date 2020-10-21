<?php
class Login{
	private $pdo;

	public function __CONSTRUCT() {
		try{
			$this->pdo = Conexao::Conectar();
		}
		catch(Throwable $t){
			die($t->getMessage());
		}
	}

	public function Entrar($usuario, $senha){
		try{
			$sql = $this->pdo->prepare("SELECT * FROM usuario WHERE usuario = ? AND senha = ?");
			$sql->execute(array($usuario, $senha));
			return $sql->fetch(PDO::FETCH_OBJ);
		}catch(Throwable $t){
			die($t->getMessage());
		}
	}
	public function Sessao($entrar){
		try{
			if (!$entrar) {
				header("Location: ?c=".base64_encode('Login'). "&m=".base64_encode("loginerrado"));
			}else{
				$_SESSION['id'] = $entrar->id;
				$_SESSION['nome'] = $entrar->nome;
				$_SESSION['usuario'] = $entrar->usuario;
				$_SESSION['administrador'] = $entrar->administrador;

				header("Location: ?c=".base64_encode('Home'));
			}
			
		}catch(Throwable $t){
			die($t->getMessage());
		}
	}
}

?>