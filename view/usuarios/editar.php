<div id="edit-modal" class="w3-modal" style="z-index: 10;">
  <div class="w3-modal-content" style="width: 600px; background: #dedede;" >
  <header class="w3-container green" style="color: white; background-color: #00c952; cursor: default;">
	<span id="sair" class="w3-button w3-display-topright">&times;</span>
	<h2>Editar Dados Usuário</h2>
  </header>
	<div class="w3-contant" style="margin-left:70px;">
	  <form class="box" action="?c=<?php echo base64_encode("Usuarios"); ?>&a=<?php echo base64_encode("alterarInformacoes") ?>" method="post" enctype="multipart/form-data">
		  <input type="hidden" name="id" id="id">
		<label for="nomecompleto">Nome Completo:</label><br>
		  <input type="text" name="nome" id="nome" placeholder="Nome completo" required /><br>
		<label for="usuario">Usuário:</label><br>
		  <input type="text" name="usuario" id="usuario" placeholder="nome.sobrenome" required/><br>
		<label for="administrador">Nível de Acesso:</label><br>
		  <input type="radio" name="administrador" id="comum" value="0"> Comum
		  <input type="radio" name="administrador" id="adm" value="1"> Administrador 
	</div>
		<footer class="w3-container" style="padding-bottom: 20px;">
		  <button type="submit" class="btn-pattern green" id="editConfirmOK">Editar</button>
		  <button type="button" class="btn-pattern blue" id="cancelar" data-dismiss="modal">Cancelar</button>
		  <a href="#" style="float: right;" class="btn-pattern blue" change-pass="Tem Certeza?" id="change-pass">Alterar Senha</a>
		</footer>
	  </form>
  </div>
</div>

<div id="change-pass-modal" class="w3-modal" style="z-index: 10;">
  <div class="w3-modal-content" style="width: 600px; background: #dedede;" >
  <header class="w3-container" style="color: white; background-color: #00c952; cursor: default;">
	<span id="sair" class="w3-button w3-display-topright">&times;</span>
	<h2>Alterar Senha do Usuário</h2>
  </header>
	<div class="w3-contant" style="margin-left:70px;">
	  <form class="box" action="editar/change-user-pass.php" method="post">
		  <input type="hidden" name="idusuario-pass" id="idusuario-pass">
		<label for="nomecompleto-pass">Nome Completo do Servidor:</label><br>
		  <input readonly="readonly" type="text" name="nomecompleto-pass" id="nomecompleto-pass" placeholder="Nome completo" required></input><br>
		<label for="confirm-pass">Nova Senha:</label><br>
		  <input type="password" name="change-pass" minlength="8" id="change-pass" placeholder="Digite sua nova senha" required/><br>
		<label for="change-pass-confirm">Confirme a Nova Senha:</label><br>
		  <input type="password" name="change-pass-confirm" minlength="8" id="change-pass-confirm" placeholder="Digite sua nova senha" required/>
		<br>      
	</div>
		<footer class="w3-container" style="padding-bottom: 20px;">
		  <button type="submit" class="btn-pattern green" id="confirm-change-pass">Editar</button>
		  <button type="button" class="btn-pattern blue" id="cancel-change-pass" data-dismiss="modal">Cancelar</button>
		</footer>
	  </form>
  </div>
</div>