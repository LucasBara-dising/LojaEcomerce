<?php
 include 'conexao.php';
 
 session_start();
 
$Vemail = $_POST['txtemail'];
$Vsenha = $_POST['txtsenha'];

$consulta = $cn->query("select cod_Usur, nome_Usur, email_Usur, senha_Usur, status_Usur from tb_user where email_Usur = '$Vemail' and senha_Usur = '$Vsenha'");
if($consulta->rowCount() == 1){
   $exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);
   
   if($exibeUsuario['status_Usur'] == 0){
        $_SESSION['ID']= $exibeUsuario['cod_Usur'];
        $_SESSION['Status']=0;
        header('location:index.php');
   }
   else{
	    $_SESSION['ID']= $exibeUsuario['cod_Usur'];
        $_SESSION['Status']=1;
        header('location:index.php');
   }
}
else{
   header('location:erro.php');
}
?>