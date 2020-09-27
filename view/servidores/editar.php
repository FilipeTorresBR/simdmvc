<?php 
session_start();
include_once ("../login/conexao.php");

$id = $_POST['id-edit'];

$nome = $_POST['servidor-edit'];
$rg = $_POST['rg-edit'];
$cpf = $_POST['cpf-edit'];
$titulo_eleitor = $_POST['titulo_eleitor-edit'];
$mae = $_POST['mae-edit'];
$pai = $_POST['pai-edit'];
$data_nascimento = date('Y-m-d', strtotime($_POST['data_nascimento-edit']));
$estado = $_POST['estado-edit'];
$cidade = $_POST['cidade-edit'];
$bairro = $_POST['bairro-edit'];
$rua = $_POST['rua-edit'];
$numero = $_POST['numero-edit'];
$telefone1 = $_POST['telefone1-edit'];
$telefone2 = $_POST['telefone2-edit'];
$siape = $_POST['siape-edit'];
$email = $_POST['email-edit'];
$escolaridade = $_POST['escolaridade-edit'];
$setor = $_POST['setor-edit'];
$lotacao = $_POST['lotacao-edit'];
$quadro = $_POST['quadro-edit'];
$cargo = $_POST['cargo-edit'];
$regime = $_POST['regime-edit'];
$data_posse = date('Y-m-d', strtotime($_POST['data_posse-edit']));
$data_exercicio = date('Y-m-d', strtotime($_POST['data_exercicio-edit']));


$query = mysqli_query($con, "UPDATE servidor SET nome = '$nome', rg = '$rg', cpf = '$cpf', titulo_eleitor = '$titulo_eleitor', mae = '$mae', pai = '$pai', data_nascimento = '$data_nascimento', estado = '$estado', cidade = '$cidade', bairro = '$bairro', rua = '$rua', numero='$numero', telefone1 = '$telefone1', telefone2 = '$telefone2', siape = '$siape', email = '$email', escolaridade = '$escolaridade', id_setor = '$setor', id_lotacao = '$lotacao', quadro = '$quadro', id_cargo = '$cargo', regime = '$regime', data_posse = '$data_posse', data_exercicio = '$data_exercicio' WHERE siape = '$id'");

$query2 = mysqli_query($con, "UPDATE probatorio SET siape = '$siape' WHERE siape = '$id'");

if(mysqli_insert_id($con)) {
		$_SESSION['msg'] = "<p style='color:red;'> Não foi possível alterar os dados do servidor.</p>";
		header("Location: edita.php?deumerda$id");
	}else{
		$_SESSION['msg'] = "<p style='color:green;'> Os dados do servidor foram atualizados com sucesso!</p>";
		header("Location: edita.php?blz$id");
}
?>	