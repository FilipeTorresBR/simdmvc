<?php 

// session_start inicia a sessão
session_start();

require ("../../login/conexao.php");

$idusuario = $_GET['q'];
$query_del = mysqli_query($con, "SELECT * FROM usuario WHERE idusuario = '$idusuario'");
$del = mysqli_fetch_assoc($query_del);
$user = mysqli_query($con, "SELECT * FROM usuario WHERE tipo = 'Administrador'");
$roots = mysqli_num_rows($user);

if($roots == '1' && $del['tipo'] == 'Administrador') {
		$_SESSION['msg'] = "<p style='color:red;'> Não foi possível excluir o usuário. Deve existir no mínimo um usuário Administrador.</p>";
		header("Location: ../index.php");
	}else{
		$query = mysqli_query($con, "DELETE FROM usuario WHERE idusuario = '$idusuario'"); 
		$_SESSION['msg'] = "<p style='color:green;'> O usuário foi excluido com sucesso!</p>";
		header("Location: ../index.php");
		}

?>
