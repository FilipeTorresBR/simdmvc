$(document).ready(function(){

  $('a[delete-confirm]').click(function(){
    $('#cancelar').click(function() {
      $('#excluir-usuario').css('display','none');
    });
    $('#sair').click(function() {
      $('#excluir-usuario').css('display','none');
    });

    $('#excluir-usuario').css('display','block');

    var button = $(this);
    var valorId = button.data('id');
    var valorNome = button.data('nome');
    var valorUsuario = button.data('usuario');

    var modal = $(document);   
    modal.find('#nome-del').text(valorNome);
    modal.find('#usuario-del').text(valorUsuario);
    modal.find('#id-input').val(valorId);
    modal.find('#nome-input').val(valorNome);
    modal.find('#usuario-input').val(valorUsuario);
  });

  $('a[edit-confirm]').click(function(event){
    $('#cancelar').click(function() {
      $('#edit-modal').css('display','none');
    });
    $('#sair').click(function() {
      $('#edit-modal').css('display','none');
    });

    $('#edit-modal').css('display','block');
      var button = $(this);
      var valorId = button.data('id');
      var valorNome = button.data('nome');
      var valorUsuario = button.data('usuario');
      var valorTipo = button.data('administrador');

      var modal = $(document);   
      modal.find('#id').val(valorId);
      modal.find('#nome').val(valorNome);
      modal.find('#usuario').val(valorUsuario);
      modal.find('#administrador').val(valorTipo);

      if (valorTipo == "1") {
        modal.find('#adm').prop("checked", true);
        modal.find('#adm').val(valorTipo);
      }else{
        modal.find('#comum').prop("checked", true);
        modal.find('#comum').val(valorTipo);
      } 

    $('a[change-pass]').click(function(event){

      $('#edit-modal').css('display','none');

      $('#cancel-change-pass').click(function() {
        $('#change-pass-modal').css('display','none');
      });
      
      $('#sair').click(function() {
        $('#change-pass-modal').css('display','none');
      });
      
      $('#change-pass-modal').css('display','block');

        modal.find('#idusuario-pass').val(valorId);
        modal.find('#nomecompleto-pass').val(valorNomeCompleto);

    });
  });


  $('#true').click(function(event) {
    $('#add-user-modal').css('display','block');
    
    $('#cancelar-add').click(function() {
      $('#add-user-modal').css('display','none');
    });
    $('#sair-add').click(function() {
      $('#add-user-modal').css('display','none');
    });
  });

  $('.cadastro_btn').click(function(event){
    $('#add-worker-modal').css('display','block');
    
    $('#cancelar-add').click(function() {
      $('#add-worker-modal').css('display','none');
    });
    $('#sair-add').click(function() {
      $('#add-worker-modal').css('display','none');
    });
  });

document.onkeydown = function(evt) {
    evt = evt || window.event;
    var isEscape = false;
    if ("key" in evt) {
        isEscape = (evt.key === "Escape" || evt.key === "Esc");
    } else {
        isEscape = (evt.keyCode === 27);
    }
    if (isEscape) {
      $('.w3-modal').css('display','none');
    }
};
  $('a[edit-servidor]').click(function(event){
    $('#cancelar-edit').click(function() {
      $('#edit-worker-modal').css('display','none');
    });
    $('#sair-edit').click(function() {
      $('#edit-worker-modal').css('display','none');
    });

    $('#edit-worker-modal').css('display','block');


      var button = $(this);
      var valorServidor = button.data('servidor');
      var valorRg = button.data('rg');
      var valorCpf = button.data('cpf');
      var valorTituloEleitor = button.data('titulo_eleitor');
      var valorMae = button.data('mae');
      var valorPai = button.data('pai');
      var valorDataNascimento = button.data('data_nascimento');
      var valorEstado = button.data('estado');
      var valorCidade = button.data('cidade');
      var valorBairro = button.data('bairro');
      var valorRua = button.data('rua');
      var valorNumero = button.data('numero');
      var valorTelefone1 = button.data('telefone1');
      var valorTelefone2 = button.data('telefone2');
      var valorSiape = button.data('siape');
      var valorEmail = button.data('email');
      var valorEscolaridade = button.data('escolaridade');
      var valorSetor = button.data('setor');
      var valorLotacao = button.data('lotacao');
      var valorQuadro = button.data('quadro');
      var valorCargo = button.data('cargo');
      var valorRegime = button.data('regime');
      var valorDataPosse = button.data('data_posse');
      var valorDataExercicio = button.data('data_exercicio');

      var modal = $(document);   
      modal.find('#id-edit').val(valorSiape);
      modal.find('#servidor-edit').val(valorServidor);
      modal.find('#rg-edit').val(valorRg);
      modal.find('#cpf-edit').val(valorCpf);
      modal.find('#titulo_eleitor-edit').val(valorTituloEleitor);
      modal.find('#mae-edit').val(valorMae);
      modal.find('#pai-edit').val(valorPai);
      modal.find('#data_nascimento-edit').val(valorDataNascimento);
      modal.find('#estado-edit').val(valorEstado);
      modal.find('#cidade-edit').val(valorCidade);
      modal.find('#bairro-edit').val(valorBairro);
      modal.find('#rua-edit').val(valorRua);
      modal.find('#numero-edit').val(valorNumero);
      modal.find('#telefone1-edit').val(valorTelefone1);
      modal.find('#telefone2-edit').val(valorTelefone2);
      modal.find('#siape-edit').val(valorSiape);
      modal.find('#email-edit').val(valorEmail);
      modal.find('#escolaridade-edit').val(valorEscolaridade);
      $( "#escolaridade-edit" ).chosen();
      modal.find('#setor-edit').val(valorSetor);
      $( "#setor-edit" ).chosen();
      modal.find('#lotacao-edit').val(valorLotacao);
      $( "#lotacao-edit" ).chosen();
      modal.find('#quadro-edit').val(valorQuadro);
      $( "#quadro-edit" ).chosen();
      modal.find('#cargo-edit').val(valorCargo);
      $( "#cargo-edit" ).chosen();
      modal.find('#regime-edit').val(valorRegime);
      $( "#regime-edit" ).chosen();
      modal.find('#data_posse-edit').val(valorDataPosse);
      modal.find('#data_exercicio-edit').val(valorDataExercicio);
  });

  $('a[add-institucional]').click(function(event){
    $('#cancelar-add').click(function() {
      $('#add-institucional-modal').css('display','none');
    });
    $('#sair-add').click(function() {
      $('#add-institucional-modal').css('display','none');
    });

    $('#add-institucional-modal').css('display','block');
  });

  $('a[edit-probative]').click(function(event){
/*     $('#cancelar').click(function() {
      $('#edit-modal').css('display','none');
    });
    $('#sair').click(function() {
      $('#edit-modal').css('display','none');
    });
*/
    $('#probative').css('display','block');
      var button = $(this);
      var valorNome = button.data('caralho');
      var valorSiape = button.data('siape');
      var valorIni1 = button.data('ini1');
      var valorFim1 = button.data('fim1');
      var valorIni2 = button.data('ini2');
      var valorFim2 = button.data('fim2');
      var valorIni3 = button.data('ini3');
      var valorFim3 = button.data('fim3');
      var valorIni4 = button.data('ini4');
      var valorFim4 = button.data('fim4');

      var modal = $(document);   
      modal.find('#nome').val(valorNome);
      modal.find('#siape').val(valorSiape);
      modal.find('#ini1').val(valorIni1);
      modal.find('#fim1').val(valorFim1);
      modal.find('#ini2').val(valorIni2);
      modal.find('#fim2').val(valorFim2);
      modal.find('#ini3').val(valorIni3);
      modal.find('#fim3').val(valorFim3);
      modal.find('#ini4').val(valorIni4);
      modal.find('#fim4').val(valorFim4);
  });

});

