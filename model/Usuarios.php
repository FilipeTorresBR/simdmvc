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
			$sql = $this->pdo->prepare("SELECT id, nome, usuario, administrador FROM usuario");
			$sql->execute();
			return $sql->fetchAll(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function alterarInformacoes($nome, $usuario, $administrador, $id){
		try{
			$sql = $this->pdo->prepare("UPDATE usuario SET nome = ?, usuario = ?, administrador = ? WHERE id = ?");
			$sql->execute(array($nome, $usuario, $administrador, $id));
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
}
?>
