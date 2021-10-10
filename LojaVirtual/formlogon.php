<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<title>Login do usuário</title>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	
<style>

.navbar{
	margin-bottom: 0;
}
	
.row{
	margin-top:5%;
	margin-bottom:5%;
}

.btn-link{
	margin-left:80px;
}
	
</style>

</head>
<body>

<?php
	
	include 'conexao.php';	
	include 'nav.php';
	?>
	
	
	<div class="container-fluid">
		<div class="row">	
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2 class="text-center">Login de Usuário</h2>
				<form name="frmusuario" method="post" action="validausuario.php">
				
					<div class="form-group">
						<label for="email">Email</label>
						<input name="txtemail" type="email" class="form-control" required id="email">
					</div>
				
					<div class="form-group">				
						<label for="senha">Senha</label>
						<input name="txtsenha" type="password" class="form-control" required id="senha">
					</div>
								
				<button type="submit" class="btn btn-lg btn-info">Entrar</button>
				
				<a href="formusuario.php">
					<button type="button" class="btn btn-lg btn-link">Ainda não sou cadastrado</button>
				</a>
				</form>			
			</div>
		</div>
	</div>
	
	<?php include 'footer.html' ?>
</body>
</html>