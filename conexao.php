<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DBNAME', 'multifolio');

try{
    $conexao = new pdo('mysql:host=' . HOST . ';dbname=' . DBNAME, USUARIO, SENHA);
}

catch (PDOException $e){
    echo "Erro na conexão com o BD" . $e->getMessage();
}

// do meu: host - mysql, user - root, senha vazia e dbname PSW1
?>

