<?php
session_start();
require ("../login/conexao.php");

	$nome = $_POST['nomecompleto-add'];
	$usuario = $_POST['usuario-add'];
	$senha = md5($_POST['pass-add']);
	$confirmasenha = md5($_POST['confirm-pass-add']);
	$tipo = $_POST['tipo-add'];

	$query = mysqli_query($con, "SELECT nomecompleto, nome FROM usuario WHERE nomecompleto = '$nome' AND nome = '$usuario'");
	$row = mysqli_num_rows($query);


	if($nome == "" || $usuario == "" || $senha == ""){
		$_SESSION['msg'] = "<p style='color:red'>Por favor, preencha todos os campos acima.</p>";
		header('Location:cadas.php?enterusernameandpassword');
 		
 		}elseif ($row > 0){
 			$_SESSION['msg'] = "<p style='color:red'>Usuário existente</p>";
 			header('Location:cadas.php?existinguser');

 		}elseif ($senha != $confirmasenha) {
 			$_SESSION['msg'] = "<p style='color:red'>As senhas devem ser coincidentes.</p>";
 			header ('Location:cadas.php?passwordmismatch');

 		}else{
 			$sql = mysqli_query($con, "INSERT INTO usuario (nomecompleto, nome, senha, tipo) VALUES ('$nome', '$usuario', '$senha', '$tipo')");
 			$_SESSION['msg'] = "<p style='color:green'>Usuário cadastrado!</p>";
 			header('Location:index.php?registeredsuccessfully');
 		}

	
?>