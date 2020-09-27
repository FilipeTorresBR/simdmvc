<?php
class Pesquisar{
	private $pdo;

	public function __CONSTRUCT() {
		try{
			$this->pdo = Conexao::Conectar();
		}
		catch(Throwable $t){
			die($t->getMessage());
		}
	}

	public function Pesquisar($nome, $siape){
		try{
			$sql = $this->pdo->prepare("SELECT s.id, s.nome AS Servidor, s.siape, c.nome AS Cargo, s.regime, s.quadro, s.escolaridade, s.id_lotacao, s.id_cargo, s.id_setor, l.nome AS Lotacao, se.nome AS Setor, s.data_posse, s.data_exercicio, s.rg, s.cpf, s.titulo_eleitor, s.data_nascimento, s.mae, s.pai, s.email, s.estado, s.cidade, s.bairro, s.rua, s.numero, s.cep, s.telefone1, s.telefone2, s.modificacao, s.criacao 
  FROM servidor AS s
  JOIN cargo AS c ON c.id = s.id_cargo
  JOIN lotacao AS l ON l.id = s.id_lotacao
  JOIN setor AS se ON se.id = s.id_setor WHERE s.nome LIKE ? OR s.siape LIKE ?");
			$sql->execute(array($nome, $siape));
			return $sql->fetchAll(PDO::FETCH_OBJ);
		}catch(Throwable $t){
			die($t->getMessage());
		}
	}
}

?>