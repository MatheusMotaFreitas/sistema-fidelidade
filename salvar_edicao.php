<?php 
$nome = $_POST['nome'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$email = $_POST['email'];
$cpf = $_POST['cpf2'];
include 'conexao.php';
$sql = "SELECT * FROM usuario WHERE cpf = '$cpf'";
$select = mysqli_query($connect,$sql);
$array = mysqli_fetch_array($select, MYSQLI_ASSOC);
$logarray = $array['cpf'];
if($nome == "" || $nome == null){
      echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.php';</script>";

      }else{
        if($logarray == $cpf){
          $query = "UPDATE usuario SET nome = '$nome', dia = '$dia', mes = '$mes', email = '$email' WHERE cpf = '$cpf'";
          $insert = mysqli_query($connect,$query);
        }if($insert){
            echo"<script language='javascript' type='text/javascript'>alert('Dados Atualizados com sucesso!');window.location.href='index.php'</script>";
        } else{
            echo '$cpf';
            echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário $cpf');window.location.href='index.php'</script>";
          }
        }
      
  ?>