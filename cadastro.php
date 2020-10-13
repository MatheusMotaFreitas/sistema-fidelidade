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
		<div class="col-xs-10 col-sm-10 col-md-7 login-sec">
                    <h2 class="text-center">Cadastro</h2>
		    <form class="login-form" action="cadastrar.php" method="post">
  <div class="form-group">
      <label for="exampleInputEmail1" class="text-uppercase">Nome</label>
    <input type="text" class="form-control" name="nome" placeholder="Digite o nome" required /><br>
    <label for="exampleInputEmail1" class="text-uppercase">CPF OU TELEFONE</label>
    <input type="number" class="form-control" name="cpf" max="99999999999" placeholder="Digite apenas numeros como 11122233344 ou 85997994595" required /><br>
    <label for="exampleInputEmail1" class="text-uppercase">Aniversario</label>
    <div class="form-row">
        <div class="col">
        <select class="form-control" name="dia">
  <option></option><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option>
  <option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option>
  <option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option>
  <option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option>
  <option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option>
  <option>31</option>
</select>
        </div>
        <div class="col">
            <select class="form-control" name="mes">
  <option></option><option>Janeiro</option><option>Fevereiro</option><option>Março</option><option>Abril</option><option>Maio</option><option>Junho</option>
  <option>Julho</option><option>Agosto</option><option>Setembro</option><option>Outubro</option><option>Novembro</option><option>Dezembro</option>
  
</select>
        </div>
    </div><br>
    <label for="exampleInputEmail1" class="text-uppercase">Email</label>
    <input type="text" class="form-control" name="email" placeholder="Digite o Email"/><br>
    
      
  </div>
                        <button type="submit" class="btn btn-login float-right" style="margin-left: 8px">Cadastrar</button>
    <a href="index.php" class="btn btn-login float-right">Cancelar</a>
  </div>
  
</form>
		
		<div class="col-xs-10 col-sm-10 col-md-5 banner-sec2">
            
	</div>
</div>
    </div>
</section>
    </body>
</html>