<?php
session_start();
include 'conexao.php';
$cpf = $_POST['cpf'];
$sql = "SELECT * FROM usuario WHERE cpf = '$cpf'";
$select = mysqli_query($connect,$sql);
$array = mysqli_fetch_array($select, MYSQLI_ASSOC);
$id = $array['ID'];
$_SESSION['id'] = $id;



if (mysqli_num_rows($select)<=0){
          echo"<script language='javascript' type='text/javascript'>window.location.href='cadastrar.php';</script>";
          die();
        }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
 
<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-xs-10 col-sm-10 col-md-5 login-sec">
                    <h3 class="panel-title">Consulta</h3>
                    <a href=editar.php>Editar Informações</a>       
       <br>
<p class=" text-info"><?php echo strftime( '%d-%m-%Y %h:%m:%s', strtotime('today') );?></p>
<br>

                    <table class="table-user-information">
                    <tbody>
                      <tr>
                        <td>Nome:</td>
                        <td><?php echo $array['nome']?></td>
                      </tr>
                      <tr>
                        <td>CPF:</td>
                    <td><?php echo $array['cpf']?></td>
                      </tr>
                      <tr>
                        <td>Aniversario</td>    
                        <td><?php echo $array['dia']." de ".$array['mes']?></td>
                      </tr>
                        
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:<?php echo $array['email']?>"><?php echo $array['email']?></a></td>
                      </tr>
                           
                      </tr>
                     </tr>
                        <td>Pontos</td>
                        <td><?php echo $array['pontos']?></td>
                           
                      </tr>
                    </tbody>
                    </table><br>
                    <a href="cliente.php" class="btn btn-primary">Nova Consulta</a>
 
<div class="copy-text"></div>
		</div>
		<div class="col-xs-10 col-sm-10 col-md-7 banner-sec1">
            
	</div>
</div>
    </div>
</section>
    </body>
</html>
