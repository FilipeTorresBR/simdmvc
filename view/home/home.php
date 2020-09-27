<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/bemvindo.css">
	<link rel="stylesheet" type="text/css" href="assets/css/simd.css">
</head>
<body>
<?php
/*
$probatorio = mysqli_query($con, "select p.siape, p.ini1, p.fim1, p.ini2, p.fim2, p.ini3, p.fim3, p.ini4, p.fim4, s.nome, s.siape 
FROM probatorio as p JOIN servidor as s on p.siape = s.siape 
where p.fim1 between curdate() and (DATE_ADD(CURDATE(), INTERVAL 3 DAY)) 
OR p.fim2 between curdate() and (DATE_ADD(CURDATE(), INTERVAL 3 DAY))
OR p.fim3 between curdate() and (DATE_ADD(CURDATE(), INTERVAL 3 DAY))
OR p.fim4 between curdate() and (DATE_ADD(CURDATE(), INTERVAL 3 DAY))");

$count = mysqli_num_rows($probatorio);

*/
?>
<br><br><br><br><br>


<h2>Olá, <?php echo $_SESSION['nomecompleto'].'!';?>

</h2>
<p>Bem vindo(a) ao Sistema Interno de Manipulação de Dados<br> (SIMD). </p>
<?php
/*
$oi = date('Y-m-d');
if($count > 0){
echo "'<div class='button'><a href ='probatorio/proximos.php'>
<div class='linetext'> Alguns servidores deverão passar por avaliação de Estágio Probatorio nos próximos três dias.</div></a></div>'";
}*/
?>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
	$('.home').addClass('clicked');
</script>
</body>
</html>