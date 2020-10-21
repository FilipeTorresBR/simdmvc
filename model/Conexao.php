<?php
class Conexao {
	
	public static function Conectar() {
	$pdo= new PDO('mysql:host=localhost;
	dbname=simd;charset=utf8', 'root', '123');

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $pdo;
	}
}
?>