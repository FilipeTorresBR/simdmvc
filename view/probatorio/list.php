<?php
session_start();
if(!isset($_SESSION["nome"]) || !isset($_SESSION["senha"])) {
	header ("Location: ../login/login.php");
}
if ($_SESSION['tipo'] == "Comum") {
	$display = "false";
}else{
	$display = "true";
}
$hoje = date("Y-m-d");
include_once "../login/conexao.php";
include_once "../redirect.php";
include_once "../nav.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>SIMD</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../img/fav.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="../css/w3.css">
	<link rel="stylesheet" type="text/css" href="../css/chosen.css">
	<link rel="stylesheet" type="text/css" href="../css/cadas.css"> 
	<link rel="stylesheet" type="text/css" href="../css/usuario.css">
	<link rel="stylesheet" type="text/css" href="../css/simd.css">
	<link rel="stylesheet" type="text/css" href="../fontawesome/css/all.css">
</head>
<body>  
<?php
if(!empty($_GET['siape'])){
	$siape = $_GET['siape'];
	}else{
		$siape = $_POST['siape'];
	}

$query = mysqli_query($con, "SELECT p.siape, p.ini1, p.fim1, p.ini2, p.fim2, p.ini3, p.fim3, p.ini4, p.fim4, s.nome, s.siape FROM probatorio AS p JOIN servidor AS s ON p.siape = s.siape WHERE s.siape = '$siape' ORDER BY(s.nome)");

include_once "edit-probatorio.php";
?>
<table class="content-table">
	<thead>
		<tr>
			<th>Editar</th>
			<th class="thsticky">Nome do servidor</th>
			<th>SIAPE</th>
			<th colspan="2">Primeira Avaliação (0 - 8 meses)</th>
			<th colspan="2">Segunda Avaliação (8 - 16 meses)</th>
			<th colspan="2">Terceira Avaliação (16 - 24 meses)</th>
			<th colspan="2">Quarta Avaliação (24 - 32 meses)</th>
		</tr>
	</thead>

<?php
while ($row = mysqli_fetch_assoc($query)){

	if (strtotime($hoje) < strtotime($row['fim1'])) {
		$cor1 = 'red_probatorio';
	}else{
			$cor1 = 'green_probatorio';
		}
	if (strtotime($hoje) < strtotime($row['fim2'])) {
		$cor2 = 'red_probatorio';
	}else{
			$cor2 = 'green_probatorio';
	}
	if (strtotime($hoje) < strtotime($row['fim3'])){
		$cor3 = 'red_probatorio';
	}else{
			$cor3 = 'green_probatorio';
		}
	if (strtotime($hoje) < strtotime($row['fim4'])){
		$cor4 = 'red_probatorio';
	}else{
			$cor4 = 'green_probatorio';
	}
?>
	<tbody>
		<tr>
			<td>
				<div class="tooltip green">
					<span class="tooltiptext green">Editar dados</span>
					<a href = "#" id="true trigger-probative" class="btn-pattern green" data-caralho="<?php echo $row['nome']; ?>" data-siape="<?php echo $row['siape']; ?>" data-ini1="<?php echo $row['ini1']; ?>" data-fim1="<?php echo $row['fim1']; ?>" data-ini2="<?php echo $row['ini2']; ?>" data-fim2="<?php echo $row['fim2']; ?>" data-ini3="<?php echo $row['ini3']; ?>" data-fim3="<?php echo $row['fim3']; ?>" data-ini4="<?php echo $row['ini4']; ?>" data-fim4="<?php echo $row['fim4']; ?>" edit-probative>
						<i class="fa fa-pencil-alt"></i>
					</a>
				</div>
			</td>
			<td class="tdsticky"><?php echo $row['nome'] ?></td>
			<td><?php echo $row['siape'] ?></td>' 
			<td id='<?php echo $cor1; ?>'><?php echo date('d/m/Y', strtotime($row['ini1']))?></td>
			<td id='<?php echo $cor1; ?>'><?php echo date('d/m/Y', strtotime($row['fim1']))?></td>
			<td id='<?php echo $cor2; ?>'><?php echo date('d/m/Y', strtotime($row['ini2']))?></td>
			<td id='<?php echo $cor2; ?>'><?php echo date('d/m/Y', strtotime($row['fim2']))?></td> 
			<td id='<?php echo $cor3; ?>'><?php echo date('d/m/Y', strtotime($row['ini3']))?></td>
			<td id='<?php echo $cor3; ?>'><?php echo date('d/m/Y', strtotime($row['fim3']))?></td>
			<td id='<?php echo $cor4; ?>'><?php echo date('d/m/Y', strtotime($row['ini4']))?></td>
			<td id='<?php echo $cor4; ?>'><?php echo date('d/m/Y', strtotime($row['fim4']))?></td> 
		</tr>
		<tr>
			<td colspan="3">
<?php
if ($cor1 == "red_probatorio") {
	echo '<td colspan="2">','<span id=',$cor1,' href="probatorio.php?siape=',$siape,'&ini=ini1&fim=fim1" target="_blank">','Ainda não está no prazo</span>','</td>';
}else{
	echo '<td colspan="2">','<a id=',$cor1,' href="probatorio.php?siape=',$siape,'&ini=ini1&fim=fim1" target="_blank">','Gerar Primeira Avaliação','</a>','</td>';
}
if ($cor2 == "red_probatorio") {
	echo '<td colspan="2">','<span id=',$cor2,' href="probatorio.php?siape=',$siape,'&ini=ini1&fim=fim1" target="_blank">','Ainda não está no prazo</span>','</td>';
}else{
	echo '<td colspan="2">','<a id=',$cor2,' href="probatorio.php?siape=',$siape,'&ini=ini2&fim=fim2" target="_blank">','Gerar Segunda Avaliação','</a>','</td>';
}
if ($cor3 == "red_probatorio") {
	echo '<td colspan="2">','<span id=',$cor3,' href="probatorio.php?siape=',$siape,'&ini=ini1&fim=fim1" target="_blank">','Ainda não está no prazo</span>','</td>';
}else{
	echo '<td colspan="2">','<a id=',$cor3,' href="probatorio.php?siape=',$siape,'&ini=ini3&fim=fim3" target="_blank">','Gerar Terceira Avaliação','</a>','</td>';
}
if ($cor4 == "red_probatorio") {
	echo '<td colspan="2">','<span id=',$cor4,' href="probatorio.php?siape=',$siape,'&ini=ini1&fim=fim1" target="_blank">','Ainda não está no prazo</span>','</td>';
}else{
	echo '<td colspan="2">','<a id=',$cor4,' href="probatorio.php?siape=',$siape,'&ini=ini4&fim=fim4" target="_blank">','Gerar Quarta Avaliação','</a>','</td>';
}
 } ?>    
		</tr>
	</tbody>
</table>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/modal.js"></script>
<script type="text/javascript" src="../js/chosen.jquery.js"></script>
<script type="text/javascript">
 $('.probatorio').addClass('clicked');
</script>
</body>
</html>
