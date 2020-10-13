<?php
session_start();
include 'conexao.php';
$codigo = $_SESSION['id'];
$sql = "SELECT * FROM usuario WHERE ID = '$codigo'";
$select = mysqli_query($connect,$sql);
$array = mysqli_fetch_array($select, MYSQLI_ASSOC);

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
		<div class="col-xs-10 col-sm-10 col-md-6 login-sec">
                    <h2 class="text-center">Atualização de Cadastro</h2>
                    <form class="login-form" action="salvar_edicao.php" method="post">
  <div class="form-group">
      <label for="exampleInputEmail1" class="text-uppercase">Nome</label>
      <input type="text" class="form-control" name="nome" value="<?php echo $array['nome']?>" required /><br>
    <label for="exampleInputEmail1" class="text-uppercase">Aniversario</label>
    <div class="form-row">
        <div class="col">
        <input type="text" class="form-control" name="dia" value="<?php echo $array['dia']?>"  />
        </div>
        <div class="col">
            <input type="text" class="form-control" name="mes" value="<?php echo $array['mes']?>"  />
        </div>
    </div><br>
    <label for="exampleInputEmail1" class="text-uppercase">Email</label>
    <input type="text" class="form-control" name="email" value="<?php echo $array['email']?>" /><br>
    <input type="hidden" class="form-control" name="cpf2" value="<?php echo $array['cpf']?>"/>
      
  </div>
                        <button type="submit" class="btn btn-login float-right" style="margin-left: 8px" onClick="return confirm('Confirma a atualização dos dados?');">Atualizar</button>
    <a href="index.php" class="btn btn-login float-right">Cancelar</a>
  </div>
  
</form>
		
		<div class="col-xs-10 col-sm-10 col-md-6 banner-sec">
            
	</div>
</div>
    </div>
</section>
    </body>
</html>