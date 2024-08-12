<?php
/* DEVE ALTERAR OS VALORES DE CONEXAO COMO NOME DO USUARIO,NOME DO BD E A SENHA*/ 
try{

    $conexao = new PDO ("pgsql:host=localhost;dbname=nusalen", "postgres", "raposo");

}catch(PDOException $e ){

    echo $e->getMessage();}

?>
