<div id="add-institucional-modal" class="w3-modal" style="z-index: 10;">
  <div class="w3-modal-content" style="width: 600px; background: #dedede;" >
    <header class="w3-container green" style="color: white;">
      <span id="sair-add" class="w3-button w3-display-topright">&times;</span>
      <h2>Adicionar um Cargo</h2>
  </header>
  <div class="w3-contant" style="margin-left:70px;">
    <form class="box" action="cadastro/add-cargo.php" method="post">
    <label for="nome">Nome do Cargo:</label><br>
      <input type="text" name="nome" id="nome" placeholder="Nome do Cargo" required /><br>
  </div>
    <footer class="w3-container" style="padding-bottom: 20px;">
      <button type="submit" class="edit green" id="addConfirm">Salvar</button>
      <button type="button" class="edit blue" id="cancelar-add" data-dismiss="modal">Cancelar</button>
    </footer>
    </form>
  </div>
</div>

<div class="list-options-position">
  <form>
    <a id="<?php echo $display; ?> modal-trigger" add-institucional="Tem certeza?" href="#" class="btn-pattern green">Cadastrar um Cargo</a>
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
      <th>Nome do Cargo</th>
      <th>Data de Criação</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($this->model->Listar() as $r): ?>
    <tr>
      <td><?php echo $r->nome; ?></td>
      <td><?php echo date("d/m/Y H:i:s", strtotime($r->criacao)); ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>