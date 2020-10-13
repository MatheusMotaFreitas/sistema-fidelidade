<?php 
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$email = $_POST['email'];
include 'conexao.php';
$sql = "SELECT cpf FROM usuario WHERE cpf = '$cpf'";
$select = mysqli_query($connect,$sql);
$array = mysqli_fetch_array($select, MYSQLI_ASSOC);
$logarray = $array['cpf'];
 
    if($cpf == "" || $cpf == null){
      echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.php';</script>";

      }else{
        if($logarray == $cpf){

          echo"<script language='javascript' type='text/javascript'>alert('Esse CPF já esta cadastrado');window.location.href='index.php';</script>";
          die();

        }else{
          $query = "INSERT INTO usuario (nome, cpf, dia, mes, email) VALUES ('$nome','$cpf','$dia','$mes','$email')";
          $insert = mysqli_query($connect,$query);

          if($insert){
            echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso! e Você ganhou 2 pontos');window.location.href='index.php'</script>";
              $query = "UPDATE `usuario` SET pontos = pontos + 2 WHERE usuario.cpf = $cpf";
              $insert = mysqli_query($connect,$query);} 
              else{
            echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.php'</script>";
          }
        }
      }
  ?>