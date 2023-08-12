<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Formulário de Cadastro</title>

  <style>
    body{
      background-color: white;
      padding: 50px;
      font-size: 20px;
      font-family: sans-serif;
    }

    h1{
      color: #800080;
    }

    .box{
      padding-top:10px;
      background-color: #f1f1f1;
      height: 490px;
      width: 600px;
      border-radius: 5%;
    }

  </style>
</head>

<body>
  <center>
<div class="box">
  <h1>  Adicionar Portfólio</h1>
  <p>  </p> 
  <form class="row g-10" method="GET" action="crudport.php">
    <div class="col-md-10">
      <label for="" class="form-label">*Área de Atuação:</label>
      <input type="text" name="areaAtuacao" class="form-control" id="inputEmail10" placeholder="Digite a área do portfólio" required maxlength="45">
    </div>

    <p> </p>

    <div class="col-md-10">
      <label for="inputState" name="estatus" class="form-label">Formação Acadêmica:</label>
      <input type="text" id="inputState" class="form-select" name="formacaoAcad" maxlenght=45 placeholder="Digite sua formação">
    </div>

    <p> </p>

    <div class="col-md-10">
      <label for="" class="form-label">Forma de Trabalho:</label>
      <select id="inputState" class="form-select" name="formaTrabalho">
        <option>Formal</option>
        <option>Informal</option>
        <option>Voluntário</option>
        <option>Jovem Aprendiz</option>
        <option>Estágio</option>
      </select>
    </div>
    <p> </p>

    <div class="col-md-10">
      <label for="" class="form-label">Tipo de Trabalho:</label>
      <select id="inputState" class="form-select" name="tipoTrabalho">
        <option>Presencial</option>
        <option>Remoto</option>
        <option>Híbrido</option>
      </select>
    </div>

    <p> </p>

    <div class="col-md-10">
      <label for="" class="form-label">Habilidade:</label>
      <input type="text" name="habilidade" class="form-control" id="inputEmail4" placeholder="Digite seu nome completo" maxlength="30">
    </div>

    <p> </p>

    <div class="col-md-10">
      <label for="" class="form-label">Carga Horária:</label>
      <input type="text" name="ch" class="form-control" placeholder="Digite a preferência de horas diárias, ex: 8h" id="inputEmail4" maxlenght="3">
    </div>

    <p> </p>

    <div class="col-md-10">
      <label for="" class="form-label">Preferência Salarial:</label>
      <input type="text" name="prefSalarial" class="form-control" id="inputEmail4" placeholder="Digite sua preferência salarial" maxlenght="45">
    </div>

    <p> </p>

    <div class="col-md-10">
      <label for="" class="form-label">Experiência:</label>
      <input type="text" name="experiencia" class="form-control" id="inputEmail4" maxlenght="45" placeholder="Cite suas experiências na área" >
    </div>


<!-- confirmar com cpf? -->
<!-- bootstrap -->
<!-- varchar de habilidade ta baixo -->
    
   </center>

    <div class="col-12">
    <p>  </p>

    <center><button type="submit" style= "border-radius: 5%; background-color: #800080; color: white; font-size: 20px;" class="btn" name="cadastrar" value="cadastrar">Cadastrar</button> 
    </center>

    </div>
   
  </div>
  </form>
  
</body>

</html> 

