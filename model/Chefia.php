<?php 
class Chefia {
	private $pdo;

	public function __CONSTRUCT() {
		try{
			$this->pdo = Conexao::Conectar();
		}
		catch(Throwable $t){
			die($t->getMessage());
		}
	}

	public function Listar(){
		try{
			$sql = $this->pdo->prepare("SELECT s.siape, s.nome AS Servidor, se.nome AS Setor, c.portaria, c.inicio_vigencia, c.modificacao, c.criacao
  FROM chefia AS c
  JOIN servidor AS s ON s.siape=c.siape
  JOIN setor AS se ON se.id=c.setor ORDER BY(s.nome)");
			$sql->execute();
			return $sql->fetchAll(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
}
?>
