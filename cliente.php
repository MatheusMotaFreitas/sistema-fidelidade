<!DOCTYPE html>
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
                    <img src="img/logo.jpg" style="padding-left: 17%"/>
                    <h2 class="text-center">Digite o CPF OU TELEFONE</h2>
		    <form class="login-form" action="consultacliente.php" method="post" placeholder="Digite apenas numeros como 11122233344 ou 85997994595">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">CPF OU TELEFONE</label>
    <input type="text" class="form-control" name="cpf" placeholder="Digite apenas numeros como 11122233344 ou 85997994595" required />
    
  </div>
   
    <div class="form-check">
    
        <button type="submit" class="btn btn-login float-right" style="margin-left: 8px">Consultar</button>
    <a href="cadastro.php" class="btn btn-login float-right">Cadastrar</a>  
  </div>
  
</form>
                    
<div class="copy-text"></div>
		</div>
		<div class="col-xs-10 col-sm-10 col-md-7 banner-sec1">
            
	</div>
</div>
    </div>
</section>
    </body>
</html>