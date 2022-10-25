<?php
session_start();
include("conexao.php");


$email = $_POST['email'];
$senha = $_POST['senha'];

//$_SESSION['email'] = $email;

//$logado = $_SESSION['nome'];

$sql = "SELECT * FROM cliente WHERE Email = '$email' AND Senha = '$senha'";

$verifica = $conexao->query($sql);

if(mysqli_num_rows($verifica) > 0){
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header("Location: ../inicio.php");
    //echo $_SERVER['HTTP_REFERER'];
    //$sql = "SELECT * FROM cliente ORDER BY nome DESC";
    //echo "<h1>$logado</h1>";

}else{
    //echo "Vc não é um cliente";
    header("Location: ../login.html");
}