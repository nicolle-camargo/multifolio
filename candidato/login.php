<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

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
      height: 240px;
      width: 600px;
      border-radius: 5%;
    }

  </style>
</head>

<body>
  <center>
<div class="box">
  <h1>  Login de Candidato</h1>
  <p>  </p> 
  <form class="row g-10" method="GET" action='crudcandidato.php'>
    <div class="col-md-10">
      <label for="" class="form-label">*Email:</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" required placeholder="Digite seu e-mail" maxlenght="100">
    </div>

    <p> </p>

    <div class="col-md-10">
      <label for="inputState"  class="form-label">*Senha:</label>
      <input type="password" name="senha" maxlenght="45" required placeholder="Digite sua senha">
    </div>
   
   </center>
    <p>  </p>

    <center><button type="submit" style= "border-radius: 5%; background-color: #842983; color: white; font-size: 20px;" class="btn" name="login" value="login">Entrar</button> 
    </center>

    </div>
   
  </div>
  </form>
  
</body>

</html> 


