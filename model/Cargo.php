<?php 
class Cargo {
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
			$sql = $this->pdo->prepare("SELECT id, nome, criacao, modificacao FROM cargo ORDER BY(nome)");
			$sql->execute();
			return $sql->fetchAll(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
	public function cadastrar($nome){
		try{
			$sql = $this->pdo->prepare("INSERT INTO cargo (nome) VALUES (?)");
			$sql->execute(array($nome));
			$_SESSION['msg'] = '<div class="notificacao"><div class="notificacao_texto"><p>O cargo ' . $nome . ' foi adicionado.</p></div>';
			header("Location: ?c=".base64_encode("Cargo"));
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
}
?>
