<?php
session_start();
if(!isset($_SESSION["nome"]) || !isset($_SESSION["senha"])) {
	header ("Location: ../login/login.php?erro-insira-seu-login");
}
if ($_SESSION['tipo'] == "Comum") {
	$display = "false";
}else{
	$display = "true";
}
include_once "../login/conexao.php";
include_once "../redirect.php";
include_once "../nav.php";

$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);   
$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;


if(!empty($_GET['choose-results'])){
  $qnt_result_pg = filter_input(INPUT_GET,'choose-results', FILTER_SANITIZE_NUMBER_INT);  
}else{
  $qnt_result_pg = 20;
}

$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
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
if(!empty($_GET['search'])){
  $pesquisar = $_GET['search'];
}else{
  $pesquisar = $_POST['search'];
}

$query = mysqli_query($con, "SELECT s.id, s.nome AS Servidor, s.siape, c.nome AS Cargo, s.regime, s.quadro, s.escolaridade, s.id_lotacao, s.id_cargo, s.id_setor, l.nome AS Lotacao, se.nome AS Setor, s.data_posse, s.data_exercicio, s.rg, s.cpf, s.titulo_eleitor, s.data_nascimento, s.mae, s.pai, s.email, s.estado, s.cidade, s.bairro, s.rua, s.numero, s.cep, s.telefone1, s.telefone2, s.modificacao, s.criacao 
  FROM servidor AS s
  JOIN cargo AS c ON c.id=s.id_cargo
  JOIN lotacao AS l ON l.id=s.id_lotacao
  JOIN setor AS se ON se.id=s.id_setor 
  WHERE s.nome LIKE '%$pesquisar%' OR s.siape LIKE '%$pesquisar%' ORDER BY(s.nome) LIMIT $inicio, $qnt_result_pg");

  $query_pg = mysqli_query($con, "SELECT COUNT(id) AS num_result FROM servidor WHERE nome LIKE '%$pesquisar%' OR siape LIKE '%$pesquisar%'");


$count = mysqli_num_rows($query)
?>
<div class="list-options-position">
	<form>
		<a href="pesquisa.php?search=<?php echo $pesquisar ?>" class="btn-pattern blue">Mostrar dados Institucionais</a>
		<label for="choose-results"></label>
		<select name="choose-results" class="choose-results" required>
			<option value="20" <?php if($qnt_result_pg == "20"){echo "selected";}?>>Exibir 20 resultados</option>
			<option value="30" <?php if($qnt_result_pg == "30"){echo "selected";}?>>Exibir 30 resultados</option>
			<option value="50" <?php if($qnt_result_pg == "50"){echo "selected";}?>>Exibir 50 resultados</option>
		</select>
		<button type="submit" class="btn-pattern blue">IR</button>
	</form>
<span><strong><?php echo $count; ?></strong> Resultados encontrados para: <strong><?php echo $pesquisar;?><strong></span>
</div>
<table class="content-table">
	<thead>
		<tr>
			<th id="<?php echo $display; ?>">Ação</th>
			<th> # </th>
			<th class="thsticky">Servidor</th>
			<th>SIAPE</th>
			<th>RG</th>
			<th>CPF</th>
			<th>Titulo de Eleitor</th>
			<th>Data de Nascimento</th>
			<th>Mãe</th>
			<th>Pai</th>
			<th>E-mail</th>
			<th>Estado</th>
			<th>Cidade</th>
			<th>Bairro</th>
			<th>Rua</th>
			<th>Nº</th>
			<th>Telefone Principal</th>
			<th>Telefone Secundário</th>
      <th>Modificado em</th>
      <th>Cadastrado em</th>
		</tr>
	</thead>
	<tbody>
    <?php 
      $x = $inicio; 
      while ($row = mysqli_fetch_assoc($query)){
      $x ++;
    ?>
		<tr>
    	<td id="<?php echo $display; ?>">
    		<div class="tooltip green">
    			<span class="tooltiptext">Editar dados</span>
					<a href="#" data-servidor="<?php echo $row['Servidor']; ?>" data-rg="<?php echo $row['rg']; ?>" data-cpf="<?php echo $row['cpf']; ?>" data-titulo_eleitor="<?php echo $row['titulo_eleitor']; ?>" data-mae="<?php echo $row['mae']; ?>" data-pai="<?php echo $row['pai']; ?>" data-data_nascimento="<?php echo $row['data_nascimento']; ?>" data-escolaridade="<?php echo $row['escolaridade']; ?>" data-email="<?php echo $row['email']; ?>" data-estado="<?php echo $row['estado']; ?>" data-cidade="<?php echo $row['cidade']; ?>" data-bairro="<?php echo $row['bairro']; ?>" data-rua="<?php echo $row['rua']; ?>" data-numero="<?php echo $row['numero']; ?>" data-siape="<?php echo $row['siape']; ?>" data-data_posse="<?php echo $row['data_posse']; ?>" data-data_exercicio="<?php echo $row['data_exercicio']; ?>" data-telefone1="<?php echo $row['telefone1']; ?>" data-telefone2="<?php echo $row['telefone2']; ?>" data-lotacao="<?php echo $row['id_lotacao']; ?>" data-quadro="<?php echo $row['quadro']; ?>" data-cargo="<?php echo $row['id_cargo']; ?>" data-regime="<?php echo $row['regime']; ?>" data-setor="<?php echo $row['id_setor']; ?>" edit-servidor="tem certeza?" class="btn-pattern green">
    				<i class="fa fa-pencil-alt"></i>
    			</a>
    		</div>
        <div class="tooltip blue">
          <span class="tooltiptext">Estágio Probatório</span>
          <a href="../probatorio/list.php?siape=<?php echo $row['siape'];?>" class="btn-pattern blue">
            <i class="fa fa-file"></i>
          </a>
        </div>
    	</td>
    	<td><?php echo $x; ?></td>
			<td class="tdsticky"><?php echo $row['Servidor']; ?></td>
			<td><?php echo $row['siape']; ?></td>
			<td><?php echo $row['rg']; ?></td>
			<td><?php echo $row['cpf']; ?></td> 
			<td><?php echo $row['titulo_eleitor'] ?></td>
			<td><?php echo date("d/m/Y", strtotime($row['data_nascimento'])); ?></td>
			<td><?php echo $row['mae']; ?></td>
			<td><?php echo $row['pai']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['estado']; ?></td>
			<td><?php echo $row['cidade']; ?></td>
			<td><?php echo $row['bairro']; ?></td>
			<td><?php echo $row['rua']; ?></td>
			<td><?php echo $row['numero']; ?></td>
			<td><?php echo $row['telefone1']; ?></td>
			<td><?php echo $row['telefone2']; ?></td>
			<td><?php echo date("d/m/Y H:i:s", strtotime($row['modificacao'])); ?></td>
			<td><?php echo date("d/m/Y H:i:s", strtotime($row['criacao'])); ?></td>
		</tr>
<?php } ?>
	</tbody>
</table>
<?php 
include_once "../pagination.php";
?>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/modal.js"></script>
<script type="text/javascript" src="../js/chosen.jquery.js"></script>
<script type="text/javascript">

const cpf = document.querySelector("#cpf");

cpf.addEventListener("keyup", () => {
  let value = cpf.value.replace(/[^0-9]/g, "").replace(/^([\d]{3})([\d]{3})?([\d]{3})?([\d]{2})?/, "$1.$2.$3-$4");
  
  cpf.value = value;
});

const cpfadd = document.querySelector("#cpf-edit");

cpfadd.addEventListener("keyup", () => {
  let value = cpfadd.value.replace(/[^0-9]/g, "").replace(/^([\d]{3})([\d]{3})?([\d]{3})?([\d]{2})?/, "$1.$2.$3-$4");
  
  cpfadd.value = value;
});

</script>
</body>
</html>
