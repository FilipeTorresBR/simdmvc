<div id="cadastrar-cargo-modal" class="w3-modal" style="z-index: 22;">
  <div class="w3-modal-content" style="width: 600px; background: #dedede;" >
    <header class="w3-container green" style="color: white; background-color: #00c952; cursor: default;">
      <span class="w3-button w3-display-topright" sair>&times;</span>
      <h2>Adicionar um Cargo</h2>
    </header>
    <div class="w3-contant" style="margin-left:70px;">
      <div class="box formcad">
        <form action="?c=<?php echo base64_encode("Cargo"); ?>&a=<?php echo base64_encode("cadastrar") ?>" method="post">
        <label for="nome">Nome do Cargo:</label><br>
          <input type="text" name="nome" id="nome" placeholder="nome" required /><br>
      </div>
    </div>
    <footer class="w3-container" style="padding-bottom: 20px;">
      <button type="submit" class="btn-pattern green">Salvar</button>
      <button type="button" class="btn-pattern blue" cancelar>Cancelar</button>
    </footer>
    </form>
  </div>
</div>