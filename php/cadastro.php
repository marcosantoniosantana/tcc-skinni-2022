<?php

include("conexao.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$data_nasc = $_POST['idade'];
$telefone = $_POST['telefone'];
$genero = $_POST['genero'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if(isset($_POST['nome']) || isset($_POST['cpf']) || isset($_POST['endereco']) || isset($_POST['numero']) || isset($_POST['idade']) || isset($_POST['telefone']) || isset($_POST['email']) || isset($_POST['senha'])){

    $sql = "SELECT * FROM cliente WHERE Nome = '$nome' AND CPF = '$cpf' AND Endereco = '$endereco' AND Numero = '$numero' AND Data_Nasc = '$data_nasc' AND Telefone = '$telefone' AND Email = '$email' AND Senha = '$senha'";

    $verifica = $conexao->query($sql);

    if(mysqli_num_rows($verifica) > 0){
        //header("Location: 404.html");
        echo"Dados já existentes";
    }else{
        //mysqli_query($conexao, "INSERT INTO cliente VALUES ('$nome', '$cpf', '$endereco', '$numero', '$data_nasc', '$telefone', '$email', '$senha')");
        mysqli_query($conexao, "INSERT INTO cliente VALUES (0, '$nome','$cpf','$endereco','$numero','$data_nasc','$telefone','$genero','$email','$senha')");

        header("Location: ../login.html");
    }
}