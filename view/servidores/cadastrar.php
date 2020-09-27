<?php 
session_start();
include_once "../login/conexao.php";
$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$titulo_eleitor = $_POST['titulo_eleitor'];
$data_nascimento = date('Y-m-d', strtotime($_POST['data_nascimento']));
$siape = $_POST['siape'];
$setor = $_POST['setor'];
$escolaridade = $_POST['escolaridade'];
$regime = $_POST['regime'];
$quadro = $_POST['quadro'];
$lotacao = $_POST['lotacao'];
$cargo = $_POST['cargo'];
$data_posse = date('Y-m-d', strtotime($_POST['data_posse']));
$data_exercicio = date('Y-m-d', strtotime($_POST['data_exercicio']));
$mae = $_POST['mae'];
$pai = $_POST['pai'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$cep = $_POST['cep'];
$telefone1 = $_POST['fone1'];
$telefone2 = $_POST['fone2'];
$email = $_POST['email'];
$ini1 = date('Y-m-d', strtotime($_POST['data_probatorio'])); 
$fim1 = date("Y-m-d", strtotime('+8 months', strtotime($ini1)));
$ini2 = date("Y-m-d", strtotime('+ 1 day', strtotime($fim1)));
$fim2 = date("Y-m-d", strtotime('+8 months', strtotime($ini2)));
$ini3 = date("Y-m-d", strtotime('+ 1 day', strtotime($fim2)));
$fim3 = date("Y-m-d", strtotime('+8 months', strtotime($ini3)));
$ini4 = date("Y-m-d", strtotime('+ 1 day', strtotime($fim3)));
$fim4 = date("Y-m-d", strtotime('+8 months', strtotime($ini4)));

	$query = mysqli_query($con, "SELECT * FROM servidor WHERE siape = '$siape'");
	$row = mysqli_num_rows($query);


	if ($row > 0){
 		$_SESSION['msg'] = "<p style='color:red'>Este Servidor já foi cadastrado anteriormente</p>";
 		header('Location:index.php?existente');
 		}else{
 			mysqli_query($con, "INSERT INTO servidor (nome, rg, cpf, titulo_eleitor, data_nascimento, siape, regime, quadro, escolaridade, id_lotacao, id_cargo, id_setor, data_posse, data_exercicio, mae, pai, email, estado, cidade, bairro, rua, numero, cep, telefone1, telefone2) values ('$nome', '$rg', '$cpf', '$titulo_eleitor', '$data_nascimento', '$siape', '$regime', '$quadro', '$escolaridade', '$lotacao', '$cargo', '$setor', '$data_posse', '$data_exercicio', '$mae', '$pai', '$email', '$estado', '$cidade', '$bairro', '$rua', '$numero', '$cep', '$telefone1', '$telefone2') ");

			mysqli_query($con, "INSERT INTO probatorio (siape, ini1, fim1, ini2, fim2, ini3, fim3, ini4, fim4) VALUES ('$siape', '$ini1', '$fim1', '$ini2', '$fim2', '$ini3', '$fim3', '$ini4', '$fim4')");

 			$_SESSION['msg'] = "<p style='color:green'>Servidor cadastrado!</p>";
 			header('Location:index.php?registeredsuccessfully');
 		}

?>