<?php
$hoje = date("Y-m-d");
/*
if ($_SESSION['tipo == "Comum") {
  $display = "false";
}else{
  $display = "true";
}

$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);   
$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

if(!empty($_GET['choose-results)){
  $qnt_result_pg = filter_input(INPUT_GET,'choose-results', FILTER_SANITIZE_NUMBER_INT);  
}else{
  $qnt_result_pg = 20;
}

$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;*/
?>
<div class="list-options-position">
  <form>
    <label for="choose-results"></label>
    <select name="choose-results" class="choose-results" required>
      <option value="20" <?php if($qnt_result_pg == "20"){echo "selected";}?>>Exibir 20 resultados</option>
      <option value="30" <?php if($qnt_result_pg == "30"){echo "selected";}?>>Exibir 30 resultados</option>
      <option value="50" <?php if($qnt_result_pg == "50"){echo "selected";}?>>Exibir 50 resultados</option>
    </select>
    <button type="submit" class="btn-pattern blue">IR</button>
  </form>
</div>
<table class="content-table">
  <thead>
    <tr>
      <th>Ação</th>
      <th> # </th>
      <th class="thsticky">Nome</th>
      <th>SIAPE</th>
      <th colspan="2">Primeira Avaliação (0 - 8 meses)</th>
      <th colspan="2">Segunda Avaliação (8 - 16 meses)</th>
      <th colspan="2">Terceira Avaliação (16 - 24 meses)</th>
      <th colspan="2">Quarta Avaliação (24 - 32 meses)</th>
    </tr>
  </thead>
  <tbody>
<?php
//$x = $inicio;
foreach($this->model->Listar() as $r):
//$x ++;

  if (strtotime($hoje) < strtotime($r->fim1)) {
    $cor1 = 'red_probatorio';
  }else{
    $cor1 = 'green_probatorio';
    }
  if (strtotime($hoje) < strtotime($r->fim2)) {
    $cor2 = 'red_probatorio';
  }else{
    $cor2 = 'green_probatorio';
  }
  if (strtotime($hoje) < strtotime($r->fim3)){
    $cor3 = 'red_probatorio';
  }else{
    $cor3 = 'green_probatorio';
  }
  if (strtotime($hoje) < strtotime($r->fim4)){
    $cor4 = 'red_probatorio';
  }else{
    $cor4 = 'green_probatorio';
  }

?>
    <tr>
      <td>
        <div class="tooltip green">
          <span class="tooltiptext green">Editar dados</span>
          <a href = "#" id="true trigger-probative" class="btn-pattern green" data-nome="<?php echo $r->nome; ?>" data-siape="<?php echo $r->siape; ?>" data-ini1="<?php echo $r->ini1; ?>" data-fim1="<?php echo $r->fim1; ?>" data-ini2="<?php echo $r->ini2; ?>" data-fim2="<?php echo $r->fim2; ?>" data-ini3="<?php echo $r->ini3; ?>" data-fim3="<?php echo $r->fim3; ?>" data-ini4="<?php echo $r->ini4; ?>" data-fim4="<?php echo $r->fim4; ?>" btn-pattern-probative>
            <i class="fa fa-pencil-alt"></i>
          </a>
        </div>
        <div class="tooltip blue">
          <span class="tooltiptext">Estágio Probatório</span>
          <a href="list.php?siape=<?php echo $r->siape; ?>" class="btn-pattern blue">
            <i class="fa fa-file"></i>
          </a>
        </div> 
      </td>
      <td><?php/* echo $x;*/ ?></td>
      <td class="tdsticky"><?php echo $r->nome; ?></td>
      <td><?php echo $r->siape; ?></td>
      <td id='<?php echo $cor1; ?>'><?php echo date('d/m/Y', strtotime($r->ini1)); ?></td>
      <td id='<?php echo $cor1; ?>'><?php echo date('d/m/Y', strtotime($r->fim1)); ?></td>
      <td id='<?php echo $cor2; ?>'><?php echo date('d/m/Y', strtotime($r->ini2)); ?></td>
      <td id='<?php echo $cor2; ?>'><?php echo date('d/m/Y', strtotime($r->fim2)); ?></td> 
      <td id='<?php echo $cor3; ?>'><?php echo date('d/m/Y', strtotime($r->ini3)); ?></td>
      <td id='<?php echo $cor3; ?>'><?php echo date('d/m/Y', strtotime($r->fim3)); ?></td>
      <td id='<?php echo $cor4; ?>'><?php echo date('d/m/Y', strtotime($r->ini4)); ?></td>
      <td id='<?php echo $cor4; ?>'><?php echo date('d/m/Y', strtotime($r->fim4)); ?></td> 
    </tr>
<?php endforeach; ?>
</table>
</body>
</html>
