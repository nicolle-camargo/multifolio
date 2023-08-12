<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Cadastro</title>

  <style>
    body{
      background-color: white;
      padding: 50px;
      font-size: 20px;
      font-family: sans-serif;
    }

    h1{
      color: #842983;
    }

    .box{
      padding-top:10px;
      background-color: #f1f1f1;
      height: 420px;
      width: 600px;
      border-radius: 5%;
    }

  </style>
</head>

<body>
  <center>
<div class="box">
  <h1>  Cadastro de Candidato</h1>
  <p>  </p> 
  <form class="row g-10" method="GET" action='crudcandidato.php'>
    <div class="col-md-10">
      <label for="" class="form-label">*Nome:</label>
      <input type="text" name="nome" class="form-control" id="inputEmail10" required placeholder="Digite seu nome completo" maxlength="100">
    </div>

    <p> </p>

    <div class="col-md-10">
      <label for="" class="form-label">*Email:</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" required placeholder="Digite seu e-mail" maxlenght="100">
    </div>

    <p> </p>

    <div class="col-md-10">
      <label for="inputState" name="senha" class="form-label">*Senha:</label>
      <input type="password" maxlenght="45" required placeholder="Digite sua senha">
    </div>

    <p> </p>

    

    <div class="col-md-10">
      <label for="" class="form-label">Endereço:</label>
      <input type="text" name="endereco" class="form-control" id="inputEmail4" placeholder="Digite seu endereço" maxlength="50">
    </div>

    <p> </p>

    <div class="col-md-10">
      <label for="" class="form-label">*CPF:</label>
      <input type="text" name="cpf" class="form-control" id="inputEmail4" required placeholder="Digite seu CPF" maxlength="14" minlenght="14">
    </div>

    <p> </p>

    <div class="col-md-10">
      <label for="" class="form-label">Telefone:</label>
      <input type="text" name="telefone" class="form-control" id="inputEmail4" maxlenght="20" placeholder="Digite seu telefone">
    </div>
<p> </p>
    <a href="login.php">  Fazer login</a>


    
   </center>

    <div class="col-12">
    <p>  </p>

    <center><button type="submit" style= "border-radius: 5%; background-color: #842983; color: white; font-size: 20px;" class="btn" name="cadastrar" value="cadastrar">Cadastrar</button> 
    </center>

    </div>
   
  </div>
  </form>

  <?php


   

?>
  
</body>

</html> 
