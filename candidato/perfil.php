<?php 
 require_once('../conexao.php');
   
  $retorno = $conexao->prepare('SELECT * FROM Candidato');
  $retorno->execute();
?> 

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Página Inicial</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            font-size: 18px;
            margin: 0px;
            padding: 0px;
            background-color: white;
        }

        .header {
            background-color: #f1f1f1;
            padding: 30px;
            text-align: left;
            height: 150px;
            display:flex;
        }

        img{
            width:100%;
            border-radius: 4px;
            margin-bottom:10px;
        }

        section{
            padding:10px;
            column-count:3;
            column-gap:10px;
            width:75%;
        }



        .footer {
            background-color: #f1f1f1;
            padding: 10px;
            text-align: center;
        }

        /*deixando responsivo*/
        @media (max-width: 600px) {
            .row {
                -webkit-flex-direction: column;
                flex-direction: column;
            }
        }
.menu{
    display:flex;
    padding-top:50px;
}

.filters{
    width:23%;
    padding-left:20px;
}

.tipoT{
    padding-top:5px;
}

.highlight {
  background-color: yellow;
}
        
    </style>
</head>

<body>
    <div class="header">
        <h2>Perfil</h2>  
</div>

<?php foreach($retorno->fetchall() as $value) { ?>
<div class="conteudo">
<div class="dados">
    <div class="nome">
    <label><?php echo $value['nome']?></label><br>
    <input type="checkbox" class="filter-checkbox" data-filter="categoria1"> Formal</input> <br>
    <p> </p>
<input type="checkbox" class="filter-checkbox" data-filter="categoria1"> Informal</input> <br>
    <p> </p>
<input type="checkbox" class="filter-checkbox" data-filter="categoria1"> Voluntário</input> <br>
    <p> </p>
<input type="checkbox" class="filter-checkbox" data-filter="categoria1"> Jovem Aprendiz</input> <br>
    <p> </p>
<input type="checkbox" class="filter-checkbox" data-filter="categoria1"> Estágio</input> <br>
    </div><br>
    <div class="tipoT">
    <label>Por Tipo de Trabalho:</label><br>
    <input type="checkbox" class="filter-checkbox" data-filter="categoria1"> Presencial</input> <br>
    <p> </p>
<input type="checkbox" class="filter-checkbox" data-filter="categoria1"> Remoto</input> <br>
    <p> </p>
<input type="checkbox" class="filter-checkbox" data-filter="categoria1"> Híbrido</input> <br>
    </div><br>

    <div class="prefSalario">
    <label>Por Preferência Salarial:</label><br>
    <input type="checkbox" class="filter-checkbox" data-filter="categoria1"> <1000 </input> <br>
    <p> </p>
<input type="checkbox" class="filter-checkbox" data-filter="categoria1"> 1000 a 2000</input> <br>
    <p> </p>
<input type="checkbox" class="filter-checkbox" data-filter="categoria1"> 2000 a 3000</input> <br>
    <p> </p>
    <input type="checkbox" class="filter-checkbox" data-filter="categoria1"> 3000 a 4000</input> <br>
    <p> </p>
    <input type="checkbox" class="filter-checkbox" data-filter="categoria1"> >4000 </input> <br>
    <br>
    </div>

    <div class="formAcad">
    <label>Por Formação Acadêmica:</label><br>
    <input type="checkbox" class="filter-checkbox" data-filter="categoria1"> Graduação</input> <br>
    <p> </p>
<input type="checkbox" class="filter-checkbox" data-filter="categoria1"> Técnico</input> <br>
    <p> </p>
    <input type="checkbox" class="filter-checkbox" data-filter="categoria1"> Tecnológico</input> <br>
    <p> </p>
<input type="checkbox" class="filter-checkbox" data-filter="categoria1"> Pós-graduação</input> <br>
    <p> </p>
    <input type="checkbox" class="filter-checkbox" data-filter="categoria1"> Mestrado</input> <br>
    <p> </p>
    <input type="checkbox" class="filter-checkbox" data-filter="categoria1"> Doutorado</input> <br>
    <br>
    </div>

    <button class="filter-btn" data-filter="all">Filtrar</button>
</div>
        
    <section class="portfolio">
  <a href="../pagina1.php"><img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y29udGFkb3J8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=1000&q=60" alt="">
  <p>Contador </p>
  <a href='../pagina2.php'><img src="https://images.unsplash.com/photo-1544717305-2782549b5136?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8ZW5nbGlzaCUyMHRlYWNoZXJ8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="">
  <p>Tradutora </p>
  <a href="../pagina3.php"><img src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8ZGV2fGVufDB8fDB8fHww&auto=format&fit=crop&w=1000&q=60" alt="">
  <p>Desenvolvedor </p>
  <a href="../pagina4.php"><img src="https://plus.unsplash.com/premium_photo-1684356819140-e82e7446b600?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8bWFya2V0aW5nfGVufDB8fDB8fHww&auto=format&fit=crop&w=1000&q=60" alt="">
  <p>Marketing </p>
  <a href="../pagina5.php"><img src="https://images.unsplash.com/photo-1661956602116-aa6865609028?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxzZWFyY2h8MXx8ZGVzaWdufGVufDB8fDB8fHww&auto=format&fit=crop&w=1000&q=60" alt="">
  <p>Designer </p>
  <a href="../pagina6.php"><img src="https://images.unsplash.com/photo-1526218626217-dc65a29bb444?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y2FudG9yfGVufDB8fDB8fHww&auto=format&fit=crop&w=1000&q=60" alt="">
  <p>Cantor </p>
  <a href="../pagina7.php"><img src="https://plus.unsplash.com/premium_photo-1661768055500-45bf4357bb85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bWFxdWlhZG9yYXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=1000&q=60" alt="">
  <p>Maquiadora </p>
  <a href="../pagina8.php"><img src="https://images.unsplash.com/photo-1553173975-2b5eca89c41f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHBpbnRvcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=1000&q=60" alt="">
  <p>Pintor </p>
  <a href="../pagina9.php"><img src="https://images.unsplash.com/photo-1560869713-7d0a29430803?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Y2FiZWxlbGVpcm98ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=1000&q=60" alt="">
  <p>Cabeleleira </p>
   </section>
   </div>
   <?php  }  ?>
   <!-- colocar um "voltar" embaixo -->
    <div class="footer">
        <p><h4>2023</h4></p>
    </div>
</body>
</html>