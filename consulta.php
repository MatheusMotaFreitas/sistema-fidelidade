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
<script>function mostrar(){
	document.getElementById('onde-vai-mostrar').innerHTML = '<form method="post" action="pontuar.php"><input type="hidden" name="cpf2" value="<?php echo $array['cpf']?>"/><label for="exampleInputEmail1" class="text-uppercase">Numero de Pontos a Serem Computados</label><select class="form-control" name="ponto"><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option><option>09</option><option>10</option></select><button type="submit" class="btn btn-login float-right">Pontuar</button></form>';
        }</script>
<script>function mostrar2(){
	document.getElementById('onde-vai-mostrar').innerHTML = '<form method="post" action="usar.php"><input type="hidden" name="cpf2" value="<?php echo $array['cpf']?>"/><label for="exampleInputEmail1" class="text-uppercase">Numero de Pontos a Serem Computados</label><select class="form-control" name="ponto"><option>10</option><option>20</option><option>30</option><option>40</option><option>50</option><option>60</option><option>70</option><option>80</option><option>90</option><option>100</option></select><button type="submit" class="btn btn-login float-right">Usar Bonus</button></form>';
        }</script>
    </head>
    <body>
 
<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-xs-10 col-sm-10 col-md-5 login-sec">
                    <h3 class="panel-title">Consulta</h3>
                    <A href="editar2.php" >Editar Informações</A>       
       <br>
<p class=" text-info"><?php echo strftime( '%d-%m-%Y %H:%M:%S', strtotime('today') );?></p>
<br>

                    <table class="table-user-information">
                    <tbody>
                      <tr>
                        <td>Nome:</td>
                        <td><?php echo $array['nome']?></td>
                      </tr>
                      <tr>
                        <td>CPF OU TELEFONE:</td>
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
                        <td>Telefone</td>
                        <td><?php echo $array['telefone']?></td>
                           
                      </tr>
                     </tr>
                        <td>Pontos</td>
                        <td><?php echo $array['pontos']?></td>
                           
                      </tr>
                    </tbody>
                  </table>
    
<div id="onde-vai-mostrar"></div><br><br>
                  <button class="btn btn-primary"onclick="mostrar2()">Usar Bonus</button>
                  <button class="btn btn-primary"onclick="mostrar()">Pontuar</button>
                  <a href="index.php" class="btn btn-primary">Nova Consulta</a>
 
<div class="copy-text"></div>
		</div>
		<div class="col-xs-10 col-sm-10 col-md-7 banner-sec1">
            
	</div>
</div>
    </div>
</section>
    </body>
</html>
