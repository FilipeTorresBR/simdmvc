<?php 
class Usuarios {
	private $pdo;

	public function __CONSTRUCT() {
		try{
			$this->pdo = Conexao::Conectar();
		}catch(Throwable $t){
			die($t->getMessage());
		}
	}

	public function Listar(){
		try{
			$sql = $this->pdo->prepare("SELECT id, nome, usuario, administrador FROM usuario ORDER BY(nome)");
			$sql->execute();
			return $sql->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function alterarInformacoes($nome, $usuario, $administrador, $id){
		try{
			$sql = $this->pdo->prepare("UPDATE usuario SET 
				nome          = ?, 
				usuario       = ?, 
				administrador = ? 
				WHERE id      = ?");

			$sql->execute(array($nome, $usuario, $administrador, $id));
		}catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function adicionarUsuario($nome, $usuario, $senha, $administrador){
		try{
			$sql = $this->pdo->prepare("INSERT INTO usuario (nome, usuario, senha, administrador) VALUES (?, ?, ?, ?)");

			$sql->execute(array($nome, $usuario, $senha, $administrador));

		}catch(Exception $e){
			die($e->getMessage());
		}
	}
	public function excluirUsuario($id, $nome, $usuario){
		try{
			$sql = $this->pdo->prepare("DELETE FROM usuario WHERE 
				id = ? AND 
				nome = ? AND 
				usuario = ?");

			$sql->execute(array($id, $nome, $usuario));
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
}
?>
