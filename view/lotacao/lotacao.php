<div class="list-options-position">
  <form>
    <a id="<?php echo $display; ?>" href="#" class="btn-pattern green" cadastrar-lotacao>Cadastrar um Lotação</a>
    <label for="choose-results"></label>
    <select style="opacity: 0;" name="choose-results" class="choose-results" required>
      <option value="20" <?php if($qnt_result_pg == "20"){echo "selected";}?>>Exibir 15 resultados</option>
      <option value="30" <?php if($qnt_result_pg == "30"){echo "selected";}?>>Exibir 30 resultados</option>
      <option value="50" <?php if($qnt_result_pg == "50"){echo "selected";}?>>Exibir 50 resultados</option>
    </select>
    <button style="opacity: 0;" type="submit" class="btn-pattern blue">IR</button>
  </form>
</div>
<table class="content-table">
  <thead>
    <tr>
      <th>Nome do Lotação</th>
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
<script type="text/javascript">
  $('.instituicao').addClass('clicked');
</script>
<?php 
if (isset($_SESSION['msg'])) {
  echo $_SESSION['msg'];
  unset($_SESSION['msg']);
}
?>