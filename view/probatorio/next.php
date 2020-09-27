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
include_once "../login/conexao.php";
include_once "../pages.php";
include_once "../default.php";
$hoje = date("Y-m-d");
$amanha = date("Y-m-d", strtotime($hoje, '+1 day'));
$depois = date("Y-m-d", strtotime($amanha, '+1 day'));
?>

<!DOCTYPE html>
<html>
<head>
  <title>SIMD</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="../img/fav.ico" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="../css/usuario.css">
  <link rel="stylesheet" type="text/css" href="../css/css.css">
  <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.css">
</head>
</style>
<body>  
<br><br><br>
<?php
$sql_hoje = ("SELECT p.siape, p.ini1, p.fim1, p.ini2, p.fim2, p.ini3, p.fim3, p.ini4, p.fim4, s.nome, s.siape 
FROM probatorio AS p JOIN servidor AS s ON p.siape = s.siape 
WHERE p.fim1 = CURRENT_DATE() 
OR p.fim2 = CURRENT_DATE()
OR p.fim3 = CURRENT_DATE()
OR p.fim4 = CURRENT_DATE() ORDER BY (s.nome)");

$sql_amanha = ("SELECT p.siape, p.ini1, p.fim1, p.ini2, p.fim2, p.ini3, p.fim3, p.ini4, p.fim4, s.nome, s.siape 
FROM probatorio AS p JOIN servidor AS s ON p.siape = s.siape 
WHERE p.fim1 = CURRENT_DATE() + 1
OR p.fim2 = CURRENT_DATE() +1
OR p.fim3 = CURRENT_DATE() +1 
OR p.fim4 = CURRENT_DATE() +1 ORDER BY (s.nome)");

$sql_depois = ("SELECT p.siape, p.ini1, p.fim1, p.ini2, p.fim2, p.ini3, p.fim3, p.ini4, p.fim4, s.nome, s.siape 
FROM probatorio AS p JOIN servidor AS s ON p.siape = s.siape 
WHERE p.fim1 = CURRENT_DATE() +2
OR p.fim2 = CURRENT_DATE() +2
OR p.fim3 = CURRENT_DATE() +2
OR p.fim4 = CURRENT_DATE() +2 ORDER BY (s.nome)");
   
?>
<br><br><br>
<span style="font-weight: bold;margin-top: 50px;margin-left: 20%;">Avaliações para Hoje</span>
<table>
  <thead>
    <tr>
      <th>Ações</th>
      <th class="thsticky">Nome</th>
      <th>SIAPE</th>
      <th colspan="2">Primeira Avaliação <br>(0 - 8 meses)</th>
      <th colspan="2">Segunda Avaliação <br>(8 - 16 meses)</th>
      <th colspan="2">Terceira Avaliação <br>(16 - 24 meses)</th>
      <th colspan="2">Quarta Avaliação <br>(24 - 32 meses)</th>
    </tr>
  </thead>
<?php
  if ($result_hoje = $con->query($sql_hoje)){

      while ($row_hoje = $result_hoje->fetch_object()){

      if (strtotime($hoje) < strtotime($row_hoje->fim1)) {$cor1 = 'red';}else{$cor1 = 'green';}
      if (strtotime($hoje) < strtotime($row_hoje->fim2)) {$cor2 = 'red';}else{$cor2 = 'green';}
      if (strtotime($hoje) < strtotime($row_hoje->fim3)) {$cor3 = 'red';}else{$cor3 = 'green';}
      if (strtotime($hoje) < strtotime($row_hoje->fim4)){$cor4 = 'red';}else{$cor4 = 'green';}
            echo
            '<tr>',
           '<td id="'. $display . '"><div class="tooltip g"><span class="tooltiptext">Editar dados</span><a href="editar/index.php?q=', $row_hoje->siape, '" class="edit"><i class="fa fa-pencil-alt"></i></a></div> 
            <div class="tooltip f"><span class="tooltiptext">Estágio Probatório</span><a href="list.php?siape=',$row_hoje->siape,'" class="edit f"><i class="fa fa-file"></i></a></div></td>',
            '<td class="tdsticky">',$row_hoje->nome,'</td>',
            '<td>',$row_hoje->siape,'</td>',  
            '<td id=',$cor1,'>',date('d/m/Y', strtotime($row_hoje->ini1)), '</td>',
            '<td id=',$cor1,'>',date('d/m/Y', strtotime($row_hoje->fim1)), '</td>',  


            '<td id=',$cor2,'>',date('d/m/Y', strtotime($row_hoje->ini2)), '</td>',
            '<td id=',$cor2,'>',date('d/m/Y', strtotime($row_hoje->fim2)), '</td>',  
  
            '<td id=',$cor3,'>',date('d/m/Y', strtotime($row_hoje->ini3)),'</td>', 
            '<td id=',$cor3,'>',date('d/m/Y', strtotime($row_hoje->fim3)),'</td>', 

            '<td id=',$cor4,'>',date('d/m/Y', strtotime($row_hoje->ini4)), '</td>', 
            '<td id=',$cor4,'>',date('d/m/Y', strtotime($row_hoje->fim4)), '</td>', 
            '</tr>';
        
          
    }    
}
?>
</table>
<br><br><br>
<span style="font-weight: bold;margin-top: 50px;margin-left: 20%;">Avaliações para Amanhã</span>
<table>
  <thead>
    <tr>
      <th>Ações</th>
      <th class="thsticky">Nome</th>
      <th>SIAPE</th>
      <th colspan="2">Primeira Avaliação <br>(0 - 8 meses)</th>
      <th colspan="2">Segunda Avaliação <br>(8 - 16 meses)</th>
      <th colspan="2">Terceira Avaliação <br>(16 - 24 meses)</th>
      <th colspan="2">Quarta Avaliação <br>(24 - 32 meses)</th>
    </tr>
  </thead>
<?php
if ($result_amanha = $con->query($sql_amanha)){
      while ($row_amanha = $result_amanha->fetch_object()){
        if (strtotime($amanha) < strtotime($row_amanha->fim1)) {$cor1 = 'red';}else{$cor1 = 'green';}
        if (strtotime($amanha) < strtotime($row_amanha->fim2)) {$cor2 = 'red';}else{$cor2 = 'green';}
        if (strtotime($amanha) < strtotime($row_amanha->fim3)) {$cor3 = 'red';}else{$cor3 = 'green';}
        if (strtotime($amanha) < strtotime($row_amanha->fim4)){$cor4 = 'red';}else{$cor4 = 'green';}
            echo
            '<tr>',
           '<td id="'. $display . '"><div class="tooltip g"><span class="tooltiptext">Editar dados</span><a href="editar/index.php?q=', $row_amanha->siape, '" class="edit"><i class="fa fa-pencil-alt"></i></a></div> 
            <div class="tooltip f"><span class="tooltiptext">Estágio Probatório</span><a href="list.php?siape=',$row_amanha->siape,'" class="edit f"><i class="fa fa-file"></i></a></div></td>',
            '<td class="tdsticky">',$row_amanha->nome,'</td>',
            '<td>',$row_amanha->siape,'</td>',  
            '<td id=',$cor1,'>',date('d/m/Y', strtotime($row_amanha->ini1)), '</td>',
            '<td id=',$cor1,'>',date('d/m/Y', strtotime($row_amanha->fim1)), '</td>',  


            '<td id=',$cor2,'>',date('d/m/Y', strtotime($row_amanha->ini2)), '</td>',
            '<td id=',$cor2,'>',date('d/m/Y', strtotime($row_amanha->fim2)), '</td>',  
  
            '<td id=',$cor3,'>',date('d/m/Y', strtotime($row_amanha->ini3)),'</td>', 
            '<td id=',$cor3,'>',date('d/m/Y', strtotime($row_amanha->fim3)),'</td>', 

            '<td id=',$cor4,'>',date('d/m/Y', strtotime($row_amanha->ini4)), '</td>', 
            '<td id=',$cor4,'>',date('d/m/Y', strtotime($row_amanha->fim4)), '</td>', 
            '</tr>';
        
          
    }    
}
?>
</table>

<br><br><br>
<span style="font-weight: bold;margin-top: 50px;margin-left: 20%;">Avaliações para Hoje</span>
<table>
  <thead>
    <tr>
      <th>Ações</th>
      <th class="thsticky">Nome</th>
      <th>SIAPE</th>
      <th colspan="2">Primeira Avaliação <br>(0 - 8 meses)</th>
      <th colspan="2">Segunda Avaliação <br>(8 - 16 meses)</th>
      <th colspan="2">Terceira Avaliação <br>(16 - 24 meses)</th>
      <th colspan="2">Quarta Avaliação <br>(24 - 32 meses)</th>
    </tr>
  </thead>
<?php
if ($result_depois = $con->query($sql_depois)){
      while ($row_depois = $result_depois->fetch_object()){
      if (strtotime($depois) < strtotime($row_depois->fim1)) {$cor1 = 'red';}else{$cor1 = 'green';}
      if (strtotime($depois) < strtotime($row_depois->fim2)) {$cor2 = 'red';}else{$cor2 = 'green';}
      if (strtotime($depois) < strtotime($row_depois->fim3)) {$cor3 = 'red';}else{$cor3 = 'green';}
      if (strtotime($depois) < strtotime($row_depois->fim4)){$cor4 = 'red';}else{$cor4 = 'green';}
            echo
            '<tr>',
           '<td id="'. $display . '"><div class="tooltip g"><span class="tooltiptext">Editar dados</span><a href="editar/index.php?q=', $row_depois->siape, '" class="edit"><i class="fa fa-pencil-alt"></i></a></div> 
            <div class="tooltip f"><span class="tooltiptext">Estágio Probatório</span><a href="list.php?siape=',$row_depois->siape,'" class="edit f"><i class="fa fa-file"></i></a></div></td>',
            '<td class="tdsticky">',$row_depois->nome,'</td>',
            '<td>',$row_depois->siape,'</td>',  
            '<td id=',$cor1,'>',date('d/m/Y', strtotime($row_depois->ini1)), '</td>',
            '<td id=',$cor1,'>',date('d/m/Y', strtotime($row_depois->fim1)), '</td>',  


            '<td id=',$cor2,'>',date('d/m/Y', strtotime($row_depois->ini2)), '</td>',
            '<td id=',$cor2,'>',date('d/m/Y', strtotime($row_depois->fim2)), '</td>',  
  
            '<td id=',$cor3,'>',date('d/m/Y', strtotime($row_depois->ini3)),'</td>', 
            '<td id=',$cor3,'>',date('d/m/Y', strtotime($row_depois->fim3)),'</td>', 

            '<td id=',$cor4,'>',date('d/m/Y', strtotime($row_depois->ini4)), '</td>', 
            '<td id=',$cor4,'>',date('d/m/Y', strtotime($row_depois->fim4)), '</td>', 
            '</tr>';
        
          
    }    
}
?>
</table>
</body>
</html>
