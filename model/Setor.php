<?php 
class Setor {
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
			$sql = $this->pdo->prepare("SELECT id, nome, criacao, modificacao FROM setor ORDER BY(nome)");
			$sql->execute();
			return $sql->fetchAll(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
	public function cadastrar($nome){
		try{
			$sql = $this->pdo->prepare("INSERT INTO setor (nome) VALUES (?)");
			$sql->execute(array($nome));
			$_SESSION['msg'] = '<div class="notificacao"><div class="notificacao_texto"><p>O setor de ' . $nome . ' foi adicionado.</p></div>';
			header("Location: ?c=".base64_encode("Setor"));
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
}
?>
