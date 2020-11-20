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

  $accion = isset($_REQUEST['a']) ? base64_decode($_REQUEST['a']) : 'Index';
  
  require_once 'controller/'.$controller.'Controller.php';

  $controller = $controller.'Controller'; //UsuarioController

  $controller = new $controller;
  
  call_user_func(array( $controller, $accion ) );
}

?>
