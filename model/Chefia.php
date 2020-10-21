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
			$sql = $this->pdo->prepare("SELECT se.id AS id_setor, s.siape, s.nome AS Servidor, se.nome AS Setor, c.id AS id_chefia, c.portaria, c.inicio_vigencia, c.modificacao, c.criacao
  FROM chefia AS c
  JOIN servidor AS s ON s.siape=c.siape
  JOIN setor AS se ON se.id=c.setor ORDER BY(s.nome)");
			$sql->execute();
			return $sql->fetchAll(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
	public function editar($setor, $siape, $inicio_vigencia, $portaria, $id){
		try{
			$sql = $this->pdo->prepare("UPDATE chefia SET 
				setor           = ?, 
				siape           = ?, 
				inicio_vigencia = ?, 
				portaria        = ? 
				WHERE id        = ?");

			$sql->execute(array($setor, $siape, $inicio_vigencia, $portaria, $id));
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
	public function cadastrar($setor, $siape, $inicio_vigencia, $portaria){
		try{
			$sql = $this->pdo->prepare("INSERT INTO chefia (setor, siape, inicio_vigencia, portaria) VALUES (?, ?, ?, ?)");
			$sql->execute(array($setor, $siape, $inicio_vigencia, $portaria));
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
}
?>
