<?php $pesquisar = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING); ?>
<?php echo $pesquisar; ?>
<?php if ($count == "0") { ?>
  <span id="found-zero-emote">( - _ - )</span><br>
  <span id="found-zero-text">Não foi encontrado nenhum resultado para <strong><?php echo $pesquisar; ?></strong></span>
<?php die(); } ?>
<div class="list-options-position">
  <form>
    <a href="pessoal.php?search=<?php echo $pesquisar ?>" class="btn-pattern blue">Mostrar dados Pessoais</a>
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
      <th <?php echo $display;?>>Ação</th>
      <th class="thsticky">Nome do servidor</th>
      <th>SIAPE</th> 
      <th>Cargo</th>
      <th>Regime</th>
      <th>Escolaridade</th>
      <th>Quadro</th>
      <th>Lotação</th>
      <th>Setor</th>
      <th>Empossado em</th>
      <th>Exercendo desde</th>
      <th>Modificado em</th>
      <th>Cadastrado em</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($this->model->Pesquisar('%'.$pesquisar.'%', '%'.$pesquisar.'%') as $r): 
      if($r->siape){
        $display = "false";
    }?>
    <tr>
      <td class="icon" id="<?php echo $display;?>">
        <div class="tooltip green">
          <span class="tooltiptext">Editar dados</span>
          <a href="#" data-id="<?php echo $r->id; ?>" data-nome="<?php echo $r->Servidor; ?>" data-rg="<?php echo $r->rg; ?>" data-cpf="<?php echo $r->cpf; ?>" data-titulo_eleitor="<?php echo $r->titulo_eleitor; ?>" data-mae="<?php echo $r->mae; ?>" data-pai="<?php echo $r->pai; ?>" data-data_nascimento="<?php echo $r->data_nascimento; ?>" data-escolaridade="<?php echo $r->escolaridade; ?>" data-email="<?php echo $r->email; ?>" data-estado="<?php echo $r->estado; ?>" data-cidade="<?php echo $r->cidade; ?>" data-bairro="<?php echo $r->bairro; ?>" data-rua="<?php echo $r->rua; ?>" data-numero="<?php echo $r->numero; ?>" data-siape="<?php echo $r->siape; ?>" data-data_posse="<?php echo $r->data_posse; ?>" data-data_exercicio="<?php echo $r->data_exercicio; ?>" data-telefone1="<?php echo $r->telefone1; ?>" data-telefone2="<?php echo $r->telefone2; ?>" data-lotacao="<?php echo $r->id_lotacao; ?>" data-quadro="<?php echo $r->quadro; ?>" data-cargo="<?php echo $r->id_cargo; ?>" data-regime="<?php echo $r->regime; ?>" data-setor="<?php echo $r->id_setor; ?>" edit-servidor="tem certeza?" class="btn-pattern green">
            <i class="fa fa-pencil-alt"></i>
          </a>
        </div>
        <div class="tooltip blue">
          <span class="tooltiptext">Estágio Probatório</span>
          <a href="?c=<?php echo base64_encode("Probatorio"); ?>&a=<?php echo base64_encode("selecionado") ?>&s=<?php echo base64_encode("$r->siape") ?>" class="btn-pattern blue">
            <i class="fa fa-file"></i>
          </a>
        </div>
      </td>
      <td class="tdsticky"><?php echo $r->Servidor; ?></td>
      <td><?php echo $r->siape . "$count";?></td>
      <td><?php echo $r->Cargo;?></td> 
      <td><?php echo $r->regime;?></td>  
      <td><?php echo $r->escolaridade;?></td> 
      <td><?php echo $r->quadro;?></td>
      <td><?php echo $r->Lotacao;?></td>
      <td><?php echo $r->Setor;?></td>
      <td><?php echo date("d/m/Y", strtotime($r->data_posse));?></td>
      <td><?php echo date("d/m/Y", strtotime($r->data_exercicio));?></td>
      <td><?php echo date("d/m/Y H:i:s", strtotime($r->modificacao));?></td>
      <td><?php echo date("d/m/Y H:i:s", strtotime($r->criacao));?></td>
    </tr>   
    <?php endforeach; ?>   
  </tbody>
</table> 
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
