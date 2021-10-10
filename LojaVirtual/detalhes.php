<!doctype html>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Minha Loja</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Oxygen&display=swap');
	.navbar{
		margin-bottom: 0;
	}

	.row{
		margin-top:5%;
		margin-bottom:5%;
	}

	p{
		font-family: 'Poppins', sans-serif;
	}

	h1{
		font-family: 'Oxygen', sans-serif;
	}

	#preco{
		font-size:20px;
		font-family: 'Oxygen', sans-serif;
		margin-top:3%;
	}

	h5{
		color:#888;
		margin-top:4%;
		margin-bottom:4%;
	}

	#BtnComprar{
		width: 25%;
		height:60px;
		border-radius:10px;
		margin-top:4%;
		background-color:#DE4F28;
		border:none;
	}

	#BtnComprar:hover{
		background-color:#d1461f;
	}
	
	</style>	
</head>

<body>	
	<?php
	session_start();
	
	include 'conexao.php';	
	include 'nav.php';
	
	if(!empty($_GET['cod'])){

	$cod_Roupa = $_GET['cod'];
	
	$consulta = $cn ->query("select * from vw_Roupa where cod_Roupa='$cod_Roupa'");
	$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
	
	} else{
		header("location:index.php");
    }
	
	?>
	
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-1">
			<img src="img/<?php echo $exibe['desc_imagem'];?>.jpg" class="img-responsive" style="width:100%;">
		</div>
		
				
 		 <div class="col-sm-7"><h1><?php echo $exibe['nome_Roupa'];?></h1>

		  <p id="preco"><b>R$ <?php echo number_format ($exibe['valor_Roupa'],2,',','.'); ?><b></p>
		
		  <h5><?php echo $exibe['desc_Roupa'];?></h5>

		  <p><b>Tamanho: </b><?php echo $exibe['tamanho_Roupa'];?></p>
		  <p><b>Cor: </b><?php echo $exibe['cor'];?></p>
		  <p><b>Marca: </b><?php echo $exibe['nome_Marca'];?></p>
	 
		<button class="btn btn-lg btn-success" id="BtnComprar">Comprar</button>
				
	</div>		
	
</div>
	
	<?php include 'footer.html';?>	
</body>
</html>