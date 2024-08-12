<?php
    include_once('conectaBD.php');

    $prodnome = $_POST['produto'];
    $tipo = $_POST['select_produto'];
    $quantidade =$_POST['quantidade'];
    $nome =$_POST['name'];
    $tipo_doador =$_POST['Pes'];

    $query = "INSERT INTO Entrada(prodnome,tipo,quantidade,nome_doador,tipo_doador) VALUES ('$prodnome','$tipo','$quantidade','$nome','$tipo_doador')";

    $conexao->query($query);

?>
