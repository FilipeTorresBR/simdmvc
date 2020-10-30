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
	public function editar($ini1, $fim1, $ini2, $fim2, $ini3, $fim3, $ini4, $fim4, $siape){
		try{
			$sql = $this->pdo->prepare("UPDATE probatorio SET
				ini1        = ?,
				fim1        = ?,
				ini2        = ?,
				fim2        = ?,
				ini3        = ?,
				fim3        = ?,
				ini4        = ?,
				fim4        = ?
				WHERE siape = ?");
			$sql->execute(array($ini1, $fim1, $ini2, $fim2, $ini3, $fim3, $ini4, $fim4, $siape));
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
/*	public function editarsiape($siape, $id){
		try{
			$sql = $this->pdo->prepare("UPDATE probatorio SET siape = ? WHERE id = ?");
		}
	}*/
	public function cadastrar($siape, $ini1, $fim1, $ini2, $fim2, $ini3, $fim3, $ini4, $fim4){
		try{
			$sql = $this->pdo->prepare("INSERT INTO probatorio (siape, ini1, fim1, ini2, fim2, ini3, fim3, ini4, fim4) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
			$sql->execute(array($siape, $ini1, $fim1, $ini2, $fim2, $ini3, $fim3, $ini4, $fim4));
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
	public function selecionado($siape){
		try{
			$sql = $this->pdo->prepare("SELECT s.nome, p.siape, p.ini1, p.fim1, p.ini2, p.fim2, p.ini3, p.fim3, p.ini4, p.fim4 FROM probatorio as p JOIN servidor as s ON s.siape = p.siape WHERE p.siape = ?");
			$sql->execute(array($siape));

			return $sql->fetchAll(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
	public function ficha($siape){
		try{
			$sql = $this->pdo->prepare("SELECT s.nome AS Servidor, p.ini1, p.fim1, p.ini2, p.fim2, p.ini3, p.fim3, p.ini4, p.fim4, l.nome AS Lotacao, c.nome AS Cargo, s.siape AS SIAPE, s.data_posse, s.data_exercicio 
    FROM servidor AS s
    JOIN cargo AS c ON c.id=s.id_cargo
    JOIN probatorio as p on s.siape = p.siape
    JOIN lotacao AS l ON l.id=s.id_lotacao WHERE s.siape = ?");
			$sql->execute(array($siape));
			return $sql->fetchAll(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
}
?>
