<div id="add-institucional-modal" class="w3-modal" style="z-index: 10;">
  <div class="w3-modal-content" style="width: 600px; background: #dedede;" >
    <header class="w3-container green" style="color: white; background-color: #00c952; cursor: default;">
      <span id="sair" class="w3-button w3-display-topright">&times;</span>
      <h2>Adicionar um Setor</h2>
    </header>
    <div class="w3-contant" style="margin-left:70px;">
      <div class="box formcad">
        <form action="?c=<?php echo base64_encode("Setor"); ?>&a=<?php echo base64_encode("cadastrar") ?>" method="post">
        <label for="nome">Nome do Setor:</label><br>
          <input type="text" name="nome" id="nome" placeholder="nome" required /><br>
      </div>
    </div>
    <footer class="w3-container" style="padding-bottom: 20px;">
      <button type="submit" class="btn-pattern green">Salvar</button>
      <button type="button" class="btn-pattern blue" id="cancelar">Cancelar</button>
    </footer>
    </form>
  </div>
</div>