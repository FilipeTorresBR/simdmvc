<?php 

// session_start inicia a sessão
session_start();
require ("../../login/conexao.php");

// as variáveis recebem os dados digitados na página anterior
$idSIAPE = $_GET['q'];

$ini1 = date('Y-m-d', strtotime($_POST['ini1']));
$fim1 = date('Y-m-d', strtotime($_POST['fim1']));
$ini2 = date('Y-m-d', strtotime($_POST['ini2']));
$fim2 = date('Y-m-d', strtotime($_POST['fim2']));
$ini3 = date('Y-m-d', strtotime($_POST['ini3']));
$fim3 = date('Y-m-d', strtotime($_POST['fim3']));
$ini4 = date('Y-m-d', strtotime($_POST['ini4']));
$fim4 = date('Y-m-d', strtotime($_POST['fim4']));


$query = mysqli_query($con, "UPDATE probatorio SET ini1 = '$ini1', fim1 = '$fim1', ini2 = '$ini2', fim2 = '$fim2', ini3 = '$ini3', fim3 = '$fim3', ini4 = '$ini4', fim4 = '$fim4' WHERE siape = '$idSIAPE'");

if(mysqli_insert_id($con)) {
		$_SESSION['msg'] = "<p style='color:red;'> Não foi possível alterar os dados do usuário.</p>";
		header("Location: index.php?q=$idSIAPE");
	}else{
		$_SESSION['msg'] = "<p style='color:green;'> Os dados do usuário foram atualizados com sucesso!</p>";
		header("Location: index.php?q=$idSIAPE");
}
?>	