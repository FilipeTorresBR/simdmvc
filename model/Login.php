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
			$sql = $this->pdo->prepare("SELECT * FROM usuario WHERE nome = ? AND senha = ?");
			$sql->execute(array($usuario, $senha));
			return $sql->fetch(PDO::FETCH_OBJ);
		}catch(Throwable $t){
			die($t->getMessage());
		}
	}
	public function Sessao($entrar){
		try{
			if ($entrar != null) {
				$_SESSION['id'] = $entrar->idusuario;
				$_SESSION['nome'] = $entrar->nome;
				$_SESSION['nomecompleto'] = $entrar->nomecompleto;
				$_SESSION['tipo'] = $entrar->tipo;

				if ($entrar->tipo) {
					header("Location: ?c=".base64_encode('Home'));

				}else{
					header("Location: ?c=".base64_encode('Login'));

				}
			}
		}catch(Throwable $t){
			die($t->getMessage());
		}
	}
}

?>