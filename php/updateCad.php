<?php

session_start();
include("conexao.php");

$nome = $_GET['nome'];
$email = $_GET['email'];
$telefone = $_GET['telefone'];
$senha = $_GET ['senha'];
$endereco = $_GET ['endereco'];
$numero = $_GET['numero'];

echo "$nome, $email, $telefone, $senha, $endereco, $numero";
/*
$sql_id_cliente = "SELECT id_cliente FROM cliente WHERE email = '$_SESSION[email]' AND senha = '$_SESSION[senha]'";
$result_id_cliente = $conexao->query($sql_id_cliente);

while($id_cliente = mysqli_fetch_assoc($result_id_cliente)){

    mysqli_query($conexao, "UPDATE cliente SET nome = '$nome', email = '$email', telefone = '$telefone', senha = '$senha', endereco = '$endereco', numero = '$numero' WHERE id_cliente = '$id_cliente'");
}
*/

$sql_id_cliente = "SELECT id_cliente FROM cliente WHERE email = '$_SESSION[email]' AND senha = '$_SESSION[senha]'";
$result_id_cliente = $conexao->query($sql_id_cliente);

while($id_cliente = mysqli_fetch_assoc($result_id_cliente)){
    
    $sqlUpdate = "UPDATE cliente SET nome = '$nome', email = '$email', telefone = '$telefone', senha = '$senha', endereco = '$endereco', numero = '$numero' WHERE id_cliente = '$id_cliente[id_cliente]'";

    $resultUpdate = $conexao->query($sqlUpdate);

    header("Location: ../index.php");

}

?>