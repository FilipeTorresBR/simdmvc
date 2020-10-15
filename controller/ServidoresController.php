<?php
require_once "model/Servidores.php";
require_once "model/Setor.php";
require_once "model/Lotacao.php";
require_once "model/Cargo.php";

class ServidoresController{
	private $model;
	private $setor;
	private $lotacao;
	private $cargo;
	
	public function __CONSTRUCT(){
		$this->model = new Servidores();
		$this->setor = new Setor();
		$this->lotacao = new Lotacao();
		$this->cargo = new Cargo();
	}
	public function Index(){
		require_once "view/nav.php";
		require_once "view/servidores/servidores.php";
		require_once "view/servidores/cadastrar.php";
		require_once "view/servidores/editar.php";
	}
	public function Listar(){
		$this->model->Listar();
	}
	public function atualizar(){
		$id = filter_input(INPUT_POST, 'id-edit', FILTER_SANITIZE_NUMBER_INT);
		$lotacao = filter_input(INPUT_POST, 'lotacao-edit', FILTER_SANITIZE_NUMBER_INT);
		$cargo = filter_input(INPUT_POST, 'cargo-edit', FILTER_SANITIZE_NUMBER_INT);
		$setor = filter_input(INPUT_POST, 'setor-edit', FILTER_SANITIZE_NUMBER_INT);
		$regime = filter_input(INPUT_POST, 'regime-edit', FILTER_SANITIZE_STRING);
		$quadro = filter_input(INPUT_POST, 'quadro-edit', FILTER_SANITIZE_STRING);
		$nome = filter_input(INPUT_POST, 'nome-edit', FILTER_SANITIZE_STRING);
		$rg = filter_input(INPUT_POST, 'rg-edit', FILTER_SANITIZE_NUMBER_INT);
		$cpf = filter_input(INPUT_POST, 'cpf-edit', FILTER_SANITIZE_NUMBER_INT);
		$titulo_eleitor = filter_input(INPUT_POST, 'titulo_eleitor-edit', FILTER_SANITIZE_NUMBER_INT);
		$data_nascimento = filter_input(INPUT_POST, 'data_nascimento-edit', FILTER_SANITIZE_NUMBER_INT);
		$mae = filter_input(INPUT_POST, 'mae-edit', FILTER_SANITIZE_STRING);
		$pai = filter_input(INPUT_POST, 'pai-edit', FILTER_SANITIZE_STRING);
		$escolaridade = filter_input(INPUT_POST, 'escolaridade-edit', FILTER_SANITIZE_STRING);
		$email = filter_input(INPUT_POST, 'email-edit', FILTER_SANITIZE_EMAIL);
		$estado = filter_input(INPUT_POST, 'estado-edit', FILTER_SANITIZE_STRING);
		$cidade = filter_input(INPUT_POST, 'cidade-edit', FILTER_SANITIZE_STRING);
		$bairro = filter_input(INPUT_POST, 'bairro-edit', FILTER_SANITIZE_STRING);
		$rua = filter_input(INPUT_POST, 'rua-edit', FILTER_SANITIZE_STRING);
		$numero = filter_input(INPUT_POST, 'numero-edit', FILTER_SANITIZE_NUMBER_INT);
		$siape = filter_input(INPUT_POST, 'siape-edit', FILTER_SANITIZE_NUMBER_INT);
		$data_posse = filter_input(INPUT_POST, 'data_posse-edit', FILTER_SANITIZE_NUMBER_INT);
		$data_exercicio = filter_input(INPUT_POST, 'data_exercicio-edit', FILTER_SANITIZE_NUMBER_INT);
		$telefone1 = filter_input(INPUT_POST, 'telefone1-edit', FILTER_SANITIZE_NUMBER_INT);
		$telefone2 = filter_input(INPUT_POST, 'telefone2-edit', FILTER_SANITIZE_NUMBER_INT);

		$this->model->atualizar($lotacao, $cargo, $setor, $regime, $quadro, $nome, $rg, $cpf, $titulo_eleitor, $data_nascimento, $mae, $pai, $escolaridade, $email, $estado, $cidade, $bairro, $rua, $numero, $siape, $data_posse, $data_exercicio, $telefone1, $telefone2, $id);

	}
	public function cadastrar(){
		$lotacao = filter_input(INPUT_POST, 'lotacao', FILTER_SANITIZE_NUMBER_INT);
		$cargo = filter_input(INPUT_POST, 'cargo', FILTER_SANITIZE_NUMBER_INT);
		$setor = filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_NUMBER_INT);
		$regime = filter_input(INPUT_POST, 'regime', FILTER_SANITIZE_STRING);
		$quadro = filter_input(INPUT_POST, 'quadro', FILTER_SANITIZE_STRING);
		$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
		$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_NUMBER_INT);
		$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
		$titulo_eleitor = filter_input(INPUT_POST, 'titulo_eleitor', FILTER_SANITIZE_NUMBER_INT);
		$data_nascimento = filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_NUMBER_INT);
		$mae = filter_input(INPUT_POST, 'mae', FILTER_SANITIZE_STRING);
		$pai = filter_input(INPUT_POST, 'pai', FILTER_SANITIZE_STRING);
		$escolaridade = filter_input(INPUT_POST, 'escolaridade', FILTER_SANITIZE_STRING);
		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
		$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
		$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
		$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
		$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
		$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_NUMBER_INT);
		$siape = filter_input(INPUT_POST, 'siape', FILTER_SANITIZE_NUMBER_INT);
		$data_posse = filter_input(INPUT_POST, 'data_posse', FILTER_SANITIZE_NUMBER_INT);
		$data_exercicio = filter_input(INPUT_POST, 'data_exercicio', FILTER_SANITIZE_NUMBER_INT);
		$telefone1 = filter_input(INPUT_POST, 'telefone1', FILTER_SANITIZE_NUMBER_INT);
		$telefone2 = filter_input(INPUT_POST, 'telefone2', FILTER_SANITIZE_NUMBER_INT);

		$this->model->cadastrar($lotacao, $cargo, $setor, $regime, $quadro, $nome, $rg, $cpf, $titulo_eleitor, $data_nascimento, $mae, $pai, $escolaridade, $email, $estado, $cidade, $bairro, $rua, $numero, $siape, $data_posse, $data_exercicio, $telefone1, $telefone2);		
	}
}

?>