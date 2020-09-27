<?php 
session_start();
// session_start inicia a sessão
include_once "../../login/conexao.php";

// as variáveis recebem os dados digitados na página anterior
$siape = filter_input(INPUT_POST, 'siape', FILTER_SANITIZE_STRING);
$setor = filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_STRING);
$portaria = filter_input(INPUT_POST, 'portaria', FILTER_SANITIZE_STRING);
$inicio_vigencia = date('Y-m-d', strtotime($_POST['vigencia']));
	
	$servidor = mysqli_query($con, "SELECT * FROM servidor where siape=$siape");
	$row_servidor = mysqli_num_rows($servidor);
	$chefia = mysqli_query($con, "SELECT * FROM chefia where siape=$siape OR setor=$setor");
	$row_chefia = mysqli_num_rows($chefia);

	if($row_servidor < 1){
		 $_SESSION['msg'] = "<p style='color:red'>Este Servidor não existe!</p>";
		header('Location:chefia.php?erro');
	}
		else if($row_chefia > 0){
 			 $_SESSION['msg'] = "<p style='color:red'>Esta chefia já foi cadastrada anteriormente!</p>";
 			header('Location:chefia.php?erro');
 		}else{
  			mysqli_query($con, "INSERT INTO chefia (siape, setor, portaria, inicio_vigencia) VALUES ('$siape', '$setor', '$portaria', '$inicio_vigencia')");
 			$_SESSION['msg'] = "<p style='color:green'>Chefia cadastrada!</p>";
 			header('Location:chefia.php?registeredsuccessfully');			
 		}
 	
?>