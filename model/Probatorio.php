<?php 
class Probatorio {
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
			$sql = $this->pdo->prepare("SELECT p.siape, p.ini1, p.fim1, p.ini2, p.fim2, p.ini3, p.fim3, p.ini4, p.fim4, s.nome, s.siape FROM probatorio AS p JOIN servidor as s ON p.siape = s.siape ORDER BY(s.nome)");
			$sql->execute();
			return $sql->fetchAll(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
}
?>
