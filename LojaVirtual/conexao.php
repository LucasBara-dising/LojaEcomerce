<?php

    $servidor = "Localhost"; 
	$usuario = "user";
	$senha = "123456";
	$banco = "BD_LojaEcomerce";
	
	$cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

?>