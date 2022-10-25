<?php
session_start();
include("conexao.php");

$pagamento = $_GET['pagamento'];
$nCartao = $_GET['numeroCartao'];
$codCartao = $_GET['codCartao'];


$emailUser = $_SESSION['email'];

$sqlDadosUser = "SELECT * FROM cliente WHERE email = '$emailUser'";
$result = $conexao->query($sqlDadosUser);



//Dados do formulário
while($user_data = mysqli_fetch_assoc($result)){
    
    //Não editavéis
	$id = $user_data['id_cliente'];
    $nome = $user_data['nome'];
    $telefone = $user_data['telefone'];
	$senha = $user_data['senha'];
    $endereco = $user_data['endereco'];
    $numero = $user_data['numero'];
}

if(isset($_GET['pagamento'])){
    
   $nCartaoFormat = str_replace(" ", "", $nCartao);
    echo $nCartaoFormat;
    
    if(!isset($_GET['numeroCartao'])){
        echo "Sem cartão";
        mysqli_query($conexao, "INSERT INTO pagamento VALUES (0, '$pagamento', 0, 0, 20.95, '$id')");
    }else{
        mysqli_query($conexao, "INSERT INTO pagamento VALUES (0, '$pagamento', '$nCartaoFormat', '$codCartao', 20.95, '$id')");
    }

    header("Location: ../concluido.html");

}