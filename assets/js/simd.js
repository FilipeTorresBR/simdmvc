function MostrarInst() {
  $('.inst-drop').css('display', 'block');
  $('.inst-drop').addClass('animate-top');
}
function OcultarInst() {
  $('.inst-drop').removeClass('animate-top');
  $('.inst-drop').css('display', 'none');
}
function MostrarUser() {
  $('.user-drop').css('display', 'block');
  $('.user-drop').addClass('animate-top');
}
function OcultarUser() {
  $('.user-drop').removeClass('animate-top');
  $('.user-drop').css('display', 'none');
}
setTimeout(function(){
	$('.notificacao').remove();
}, 5000);