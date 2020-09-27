<?php
session_start();
require_once "model/Conexao.php";

$controller = "Login";

if (!isset($_REQUEST['c'])) {
	require_once 'controller/'.$controller.'Controller.php';
	
	$controller = $controller.'Controller';

	$controller = new $controller;

	$controller->Index();
}else{
  $controller = base64_decode($_REQUEST['c']);

  //verificamos si se envía también una a "acción/método" y de decodifica
  //si no se envía entonces la acción que se tomará será Index
  $accion = isset($_REQUEST['a']) ? base64_decode($_REQUEST['a']) : 'Index';
  
  //incluimos el controlador
  require_once 'controller/'.$controller.'Controller.php';

  //Da un formato igual al nombre de la clase del controlador enviado
  $controller = $controller.'Controller'; //UsuarioController

  //instanciar la clase controlador UsuarioController
  $controller = new $controller;
  
  //esta función llama el nombre del controlador y la acción solicitadas
  //de modo que se acceda al archivo controlador y se ejecute la 
  //acción correspondiente
  call_user_func(array( $controller, $accion ) );
}

?>
