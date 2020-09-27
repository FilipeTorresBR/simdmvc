<?php 
session_start();
include_once "../../login/conexao.php";

$id = $_POST['id'];
$siape = filter_input(INPUT_POST, 'siape', FILTER_SANITIZE_STRING);
$setor = filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_STRING);
$portaria = filter_input(INPUT_POST, 'portaria', FILTER_SANITIZE_STRING);
$inicio_vigencia = date('Y-m-d', strtotime($_POST['vigencia']));


$query = mysqli_query($con, "UPDATE chefia SET siape = '$siape', setor = '$setor', portaria = '$portaria', inicio_vigencia = '$inicio_vigencia' WHERE siape = '$id'");

if(mysqli_insert_id($con)){
	$_SESSION['msg'] = "<p style='color:red'>Ocorreu um erro ao alterar os dados</p>";
	header("Location:edicao_chefia.php?q=$siape");
}else{
	$_SESSION['msg'] = "<p style='color:green'>Dados da chefia foram alterados!</p>";
	header("Location:edicao_chefia.php?q=$siape");
}

?>