<?php
session_start();
include("conexao.php");
echo "Olá";
//echo $_GET['id_cliente'];

/*
$sqlId = "SELECT id_cliente FROM cliente WHERE id_cliente = '$_GET[id_cliente]'";
$result = $conexao->query($sqlId);
*/

$idPedido = "SELECT * FROM pedido WHERE id_cliente = '$_GET[id_cliente]'";
$rIdPedido = $conexao->query($idPedido);
//print_r($rIdPedido);

while($pedido = mysqli_fetch_assoc($rIdPedido)){
        $pedidoId = $pedido['id_pedido'];
        echo "$pedidoId, ";

        $dPagamento = "DELETE FROM pagamento WHERE id_pedido = '$pedidoId'";
        $delPagamento = $conexao->query($dPagamento);
}

/*
$sqlPagamento = "SELECT * FROM pagamento WHERE id_pedido = '$pedidoId'";
$resultp = $conexao->query($sqlPagamento);

while($pagamento = mysqli_fetch_assoc($resultp)){

        $sqlDeletar = "DELETE FROM pagamento WHERE id_pedido = '$pagamento[id_pagamento]'";
        $deletar = $conexao->query($sqlDeletar);
}
*/

/*
if($rIdPedido->num_rows > 0){
        

        //$sqlDeletar = "DELETE FROM cliente,   WHERE id_cliente = '$_GET[id_cliente]'";
        //$deletar = $conexao->query($sqlDeletar);
        
        //$sqlDeletar = "DELETE FROM cliente INNER JOIN pedido ON cliente.id_cliente = pedido.id_cliente WHERE cliente.id_cliente = '$_GET[id_cliente]'";
        
        //print_r($deletar);




        while($id_pedido = mysqli_fetch_assoc($rIdPedido)){
           $sqlDeletar = "DELETE FROM pagamento WHERE id_pedido = '$id_pedido[id_pedido]'";
            $deletar = $conexao->query($sqlDeletar);
            echo " ID : $id_pedido[id_pedido] DELETADO|";
            print_r($deletar);
        }

}
*/