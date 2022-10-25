<?php

session_start();
include("conexao.php");

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
	unset($_SESSION['email']);
	unset($_SESSION['senha']);
	header("Location: ../login.html");
}

$sql = "SELECT id_cliente FROM cliente WHERE email = '$_SESSION[email]' AND senha = '$_SESSION[senha]'";
//$result = $conexao->query($sql);
$query = $conexao->query($sql);
while ($result = mysqli_fetch_assoc($query)) {

$id = $_GET['id'];
$tamanho = $_GET['tamanho'];
$modelo = $_GET['modelo'];
$quantidade = $_GET['quantidade'];

//                          INSERT INTO pedido VALUES(0, 'p', 'masculino', '3', '2', '1');
//mysqli_query($conexao, "INSERT INTO pedido VALUES (0, '$tamanho', '$modelo', $quantidade, '$id', $resultid)");
mysqli_query($conexao, "INSERT INTO pedido VALUES (0, '$tamanho', '$modelo', '$quantidade', '$id', '$result[id_cliente]')");

header("Location: ../entrega.php?id_produto=$id&tamanho='$tamanho'&modelo='$modelo'&quantidade='$quantidade'");
}