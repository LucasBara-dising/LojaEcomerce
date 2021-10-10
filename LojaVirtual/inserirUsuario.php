<?php

    include 'conexao.php';
	
	$nome = $_POST['txtnome'];
	$email = $_POST['txtemail']; 
	$senha = $_POST['txtsenha'];
	$end = $_POST['txtendereco'];
	$cidade = $_POST['txtcidade'];
	$cep = $_POST['txtcep'];

    $consulta = $cn->query("select email_Usur from tb_user where email_Usur='$email'");
	$exibe = $consulta ->fetch(PDO::FETCH_ASSOC);
	
	if($consulta->rowCount() == 1){
		header('location:erro1.php');
	}
	else{
		$incluir = $cn->query("
		    insert into tb_user(nome_Usur, email_Usur, senha_Usur, status_Usur, endereco_Usur, cidade_Usur, cep_Usur)
			values('$nome','$email','$senha','0','$end','$cidade','$cep')");
			header('location:ok.php');
	}

?>