<style>
  .navbar{
    height:100px;
    padding-top:30px;
    padding-left:6%;
    padding-right:6%;
    box-shadow: 0px -30px 80px #222;
  }

  .navbar-header{
    width:30%;
    margin-top:-10px;
  }
  #imgLogo{
    width:60%;
  }

  a{
    display: inline;
    color:#888;
    font-size:15px;
  }
  a:hover{
    background:#fff!important;
  }

  #boxBuscar{
    height:40px;
    border-radius:20px;
  }

  #bntBuscar{
    border:none;
    margin-left:-50px;
  }

  #user{
    width:32px;
    margin-top:-2px;
  }

  #btnAdm{
    margin:-26px 20px 0px 20px;
  }
</style>
<nav class="navbar navbar">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="index.php"><img id="imgLogo" src="img/Logo_TimeFashion01.png"></a>
    </div>


    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="lancamento.php">Novidades</a></li>
        <li><a href="#">Contato</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="cat.php?cate=Feminino">Feminino</a></li>
            <li><a href="cat.php?cate=Masculino">Masculino</a></li>
            <li><a href="cat.php?cate=Calça">Calça</a></li>
			      <li><a href="cat.php?cate=Acessórios">Acessórios</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">

      <form class="navbar-form navbar-left" role="search">
        <div class="form-group" >
          <input type="text" class="form-control" placeholder="O que você deseja?" id="boxBuscar">
        </div>
        <button type="submit" class="btn btn-default" id="bntBuscar"><span class="glyphicon glyphicon-search"></button>
      </form>
		
		<?php if(empty($_SESSION['ID'])) { ?>
		<li><a href="formlogon.php"><img src="img/user.png" id="user"></a></li>
        <?php } else {
			
	    if ($_SESSION['Status'] == 0){
	        $consulta_usuario = $cn->query("select nome_Usur from tb_user where cod_Usur = '$_SESSION[ID]'");
		    $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
		    ?>
		    <li><a href="#"> <?php echo $exibe_usuario['nome_Usur'];?> </a></li>
            <li><a href="formlogoff.php">Sair </a></li>
             
	    <?php } else { ?>
		
		    <li><a href="adm.php"> <button class="btn btn-sm btn-danger" id="btnAdm"> Admin </a></li>
            <li><a href="formlogoff.php">Sair </a></li>
            
		<?php } } ?>
		
	  </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>