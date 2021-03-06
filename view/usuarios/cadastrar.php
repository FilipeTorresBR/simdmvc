<div id="cadastrar-usuario-modal" class="w3-modal" style="z-index: 10;">
  <div class="w3-modal-content" style="width: 600px; background: #dedede;" >
  <header class="w3-container green" style="color: white; background-color: #00c952; cursor: default;">
	<span class="w3-button w3-display-topright" sair>&times;</span>
	<h2>Cadastrar Usuário</h2>
  </header>
	<div class="w3-contant" style="margin-left:70px;">
	  <form class="box" action="?c=<?php echo base64_encode("Usuarios"); ?>&a=<?php echo base64_encode("adicionarUsuario") ?>" method="post" autocomplete="off">
		<label for="nomecompleto-add">Nome Completo:</label><br>
		  <input type="text" name="nome-add" id="nome-add" placeholder="Nome completo"  required /><br>
		<label for="usuario-add">Usuário:</label><br>
		  <input type="text" name="usuario-add" id="usuario-add" placeholder="nome.sobrenome" required/><br>
		<label for="pass-add">Senha:</label><br>
		  <input type="password" name="pass-add" minlength="8" id="pass-add" placeholder="Digite sua senha" required/><br>
		<label for="confirm-pass-add">Confirmar Senha:</label><br>
		  <input type="password" name="confirm-pass-add" minlength="8" id="confirm-pass-add" onchange="validatepass();" placeholder="Digite novamente sua senha" required/><br>
		<label for="tipo-add">Nível de Acesso:</label><br>
		  <input type="radio" name="administrador-add" id="comum-add" value="0" required> Comum
		  <input type="radio" name="administrador-add" id="adm-add" value="1" required> Administrador 
	</div>
		<footer class="w3-container" style="padding-bottom: 20px;">
		  <button style="float: right;" type="submit" class="btn-pattern green" confirmar>Cadastrar</button>&nbsp;
		  <button style="float: right;" type="button" class="btn-pattern blue" cancelar>Cancelar</button>&nbsp;
		</footer>
	  </form>
  </div>
</div>