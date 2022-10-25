<?php
session_start();
include("conexao.php");

$nome = $_GET['nome'];
$telefone = $_GET['telefone'];
$cpf = $_GET['cpf'];

$endereco = $_GET['endereco'];
$bairro = $_GET['bairro'];
$numero = $_GET['numero'];
$complemento = $_GET['complemento'];
$cep = $_GET['cep'];
$cidade = $_GET['cidade'];
$estado = $_GET['estado'];

//echo "$nome <br> $telefone <br> $cpf <br> $endereco <br> $bairro <br> $numero <br> $complemento <br> $cep <br> $cidade <br> $estado <br> DADOS DO PRODUTO: <br>";

$selectid = "SELECT id_cliente FROM cliente WHERE email = '$_SESSION[email]' AND senha = '$_SESSION[senha]'";
$resultIdCliente = $conexao->query($selectid);
while($idcliente = mysqli_fetch_assoc($resultIdCliente)){

$idPedidoSql = "SELECT id_pedido FROM pedido WHERE id_cliente = '$idcliente[id_cliente]'";
$resultIdPedido = $conexao->query($idPedidoSql);

while($pedido = mysqli_fetch_assoc($resultIdPedido)){

    mysqli_query($conexao, "INSERT INTO entrega VALUES (0, '$nome', '$cpf', '$telefone', '$endereco', '$bairro', '$numero', '$complemento', '$cep', '$cidade', '$estado', '$pedido[id_pedido]')");
    
}
header("Location: ../pagamento.html");
}


//echo $_GET['modelo'];