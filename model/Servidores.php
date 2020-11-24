<?php 
class Servidores {
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
			$sql = $this->pdo->prepare("SELECT s.id, s.nome AS Servidor, s.siape, c.nome AS Cargo, s.regime, s.quadro, s.escolaridade, s.id_lotacao, s.id_cargo, s.id_setor, l.nome AS Lotacao, se.nome AS Setor, s.data_posse, s.data_exercicio, s.rg, s.cpf, s.titulo_eleitor, s.data_nascimento, s.mae, s.pai, s.email, s.estado, s.cidade, s.bairro, s.rua, s.numero, s.cep, s.telefone1, s.telefone2, s.modificacao, s.criacao 
	FROM servidor AS s
	JOIN cargo AS c ON c.id=s.id_cargo
	JOIN lotacao AS l ON l.id=s.id_lotacao
	JOIN setor AS se ON se.id=s.id_setor ORDER BY(s.nome)");
			$sql->execute();
			return $sql->fetchAll(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function atualizar($lotacao, $cargo, $setor, $regime, $quadro, $nome, $rg, $cpf, $titulo_eleitor, $data_nascimento, $mae, $pai, $escolaridade, $email, $estado, $cidade, $bairro, $rua, $numero, $siape, $data_posse, $data_exercicio, $telefone1, $telefone2, $id){
		try{
			$sql = $this->pdo->prepare("UPDATE servidor SET
				id_lotacao      = ?,
				id_cargo        = ?,
				id_setor        = ?,
				regime          = ?,
				quadro          = ?,
				nome            = ?,
				rg              = ?,
				cpf             = ?,
				titulo_eleitor  = ?,
				data_nascimento = ?,
				mae             = ?,
				pai             = ?, 
				escolaridade    = ?, 
				email           = ?, 
				estado          = ?, 
				cidade          = ?, 
				bairro          = ?, 
				rua             = ?,
				numero          = ?, 
				siape           = ?, 
				data_posse      = ?, 
				data_exercicio  = ?, 
				telefone1       = ?, 
				telefone2       = ? 
				WHERE id        = ?");

			$sql->execute(array($lotacao, $cargo, $setor, $regime, $quadro, $nome, $rg, $cpf, $titulo_eleitor, $data_nascimento, $mae, $pai, $escolaridade, $email, $estado, $cidade, $bairro, $rua, $numero, $siape, $data_posse, $data_exercicio, $telefone1, $telefone2, $id));
			$_SESSION['msg'] = '<div class="notificacao"><div class="notificacao_texto"><p>Os dados de ' . $nome . ' foram salvos.</p></div>';
			header("Location: ?c=".base64_encode("Servidores"));
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
	public function cadastrar($lotacao, $cargo, $setor, $regime, $quadro, $nome, $rg, $cpf, $titulo_eleitor, $data_nascimento, $mae, $pai, $escolaridade, $email, $estado, $cidade, $bairro, $rua, $numero, $siape, $data_posse, $data_exercicio, $telefone1, $telefone2){
		try{
			$sql = $this->pdo->prepare("INSERT INTO servidor (id_lotacao, id_cargo, id_setor, regime, quadro, nome, rg, cpf, titulo_eleitor, data_nascimento, mae, pai, escolaridade, email, estado, cidade, bairro, rua, numero, siape, data_posse, data_exercicio, telefone1, telefone2) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"); 
			$sql->execute(array($lotacao, $cargo, $setor, $regime, $quadro, $nome, $rg, $cpf, $titulo_eleitor, $data_nascimento, $mae, $pai, $escolaridade, $email, $estado, $cidade, $bairro, $rua, $numero, $siape, $data_posse, $data_exercicio, $telefone1, $telefone2));
			$_SESSION['msg'] = '<div class="notificacao"><div class="notificacao_texto"><p>Os dados de ' . $nome . ' foram salvos.</p></div>';
			header("Location: ?c=".base64_encode("Servidores"));
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
}
?>
