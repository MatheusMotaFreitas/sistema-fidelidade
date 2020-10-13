<?php 
  $usuario = $_POST['usuario'];
  $entrar = $_POST['entrar'];
  $senha = ($_POST['senha']);
  include 'conexao.php';
     if (isset($entrar)) {
             
      $verifica = mysqli_query($connect,"SELECT * FROM admin WHERE usuario = '$usuario' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysqli_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
          die();
        }else{
          setcookie("login",$usuario);
          header("Location:homeloja.php");
        }
    }
?>