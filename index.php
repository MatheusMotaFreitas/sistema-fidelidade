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
<script>function logar(){
	document.getElementById('onde-vai-mostrar').innerHTML = '<form method="post" action="login.php"><input type="text" class="form-contact-input" name="usuario" placeholder="Usuario" style="width: 40%" required /><input type="password" class="form-contact-input" name="senha" placeholder="Senha" style="width: 40%; margin-left:5px" required /><button type="submit" name="entrar" value="entrar" class="btn btn-login float-right">Entrar</button></form>';
        }</script>    
    </head
    <body>
 
<section class="login-block">
    <div class="container">
	<div class="row">
            <div class="col-xs-10 col-sm-10 col-md-5 login-sec" >
                    
                <h2 class="text-center" style="margin-bottom: 10px">Seja Bem Vindo</h2>
                    <a href="cliente.php" style="width: 100%; display: block; position:relative; left:50%; top:10%; transform: translate(-50%, -30%);"><img src="img/cliente.png" style="width: 40%; display: block; position:relative; left: 30%; "/></a>
                    <center><a href="cliente.php" class="btn btn-login" style="color: white; margin-bottom: 30px">Usuario</a></center>
                    <a onclick="logar()" style="width: 100%; display: block; position:relative; left:50%; top:10%; transform: translate(-50%, -40%);"><img src="img/loja.png" style="width: 40%; display: block; position:relative; left: 30%; "/></a>
                    <center><a onclick="logar()" class="btn btn-login" style="color: white;">Loja</a></center>
                    <div id="onde-vai-mostrar"></div><br>
                    
<div class="copy-text"></div>
		</div>
		<div class="col-xs-10 col-sm-10 col-md-7 banner-sec">
            
	</div>
</div>
    </div>
</section>
    </body>
</html>
