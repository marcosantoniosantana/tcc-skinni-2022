<?php
session_start();
include("./php/conexao.php");

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
	unset($_SESSION['email']);
	unset($_SESSION['senha']);
	header("Location: ./login.html");
}

$sqlIdCliente = "SELECT id_cliente FROM cliente WHERE email = '$_SESSION[email]' AND senha = '$_SESSION[senha]'";

$resultIdCliente = $conexao->query($sqlIdCliente);

//print_r($resultIdCliente);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos comprados</title>
    <link rel="stylesheet" href="./css/comprados.css">

    <link rel="shortcut icon" type="image/x-icon" href="./imagens/imagens_pagina/icone_titulo.png">

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300&family=Merriweather+Sans&display=swap" rel="stylesheet">

	<style>

		.conteiner{
			background-color: transparent;
			display: flex;
		    flex-direction: column-reverse;
		}

		.produto-card{
			margin: 3% 0;
		}

		.titulo-produto a{
	    color: #e5e32b;
    	font-family: 'Merriweather Sans';
	    font-weight: 100;
		font-size: 2.3rem;
		text-decoration: none;
		}

		.cancelar-area{
			position: fixed;
		}

		.on{
				width: 15px;
				height: 15px;
				background-color: #14c914;
				border-radius: 50px;
				position: fixed;
   				margin: 2.5% 0% 0 1.9%;
			}

			.usuario{
				/*margin-top: 72px;*/
			}

			.login-menu{
				display: flex;
			    flex-direction: column;
			    align-items: center;
				position: relative;
			}

			.menu-list{
				display: none;
				background-color: #00ff00;
				position: relative;
				margin: 0px 0px -70px -64px;
				text-align: center;
				
			}

			.login-menu:hover .menu-list{
				display: flex;
			}

			.login-menu:hover .on{
				display: none;
			}

			.menu-list ul{
				width: 150px;
				padding: 5px 10px;
				list-style: none;
				display: flex;
				flex-direction: column;
				background-color: #2c0e50;
			    box-shadow: 0 0 23px rgb(0 0 0 / 50%);
				overflow: hidden;
			}

			.menu-list ul li{
				background-color: #8586a1;
				margin: 5px 0 5px 0;
				padding: 4px;
				width: fit-content;
			}

			.menu-list ul li a{
				font-family: sans-serif;
				color: #dad829;
				text-decoration: none;
				font-weight: bold;
				padding: 3px 61px;
			}
			.itens-cabecalho a{
				text-decoration: none;
			}
	</style>

</head>
<body>

    <header class="cabecalho">
		<div class="itens-cabecalho">


			<a href="index.php">
				<div class="logo">
					<h1 class="titulo-logo">Skinni</h1>
				</div>
			</a>

			<form class="barra-pesquisa" method="GET" action="pesquisa.php">
				<button type="submit" style="background: transparent; border: 0; outline: 0;">
					<i class="fas fa-search pesquisar-icon"></i>
				</button>
				<input type="text" class="pesquisa" id="pesquisa" placeholder="Pesquisar..." name="pesquisa">
			</form>

			<div class="icones">

				<a href="comprados.php">
					<div class="compras">
						<i class="fas fa-shopping-bag"></i>
					</div>
				</a>

				<?php
						if(isset($_SESSION['email']) || isset($_SESSION['senha'])){
							//echo "Feijão";
							echo '				<div class="login-menu">

					
							<div class="usuario">
								<i class="fas fa-user"></i>
							</div>
							<figure class="on"></figure>
							
							<figure class="menu-list">
								<ul class="list">
									<li><a href="perfil.php">Perfil</a></li>
									<li><a href="./php/sair.php">Sair</a></li>
								</ul>
							</figure>
		
						</div>';
						}else{
							echo'				<a href="login.html" class="user">
							<div class="usuario">
								<i class="fas fa-user"></i>
							</div>
						</a>';
						}
						?>
			</div>

		</div>

			<div id="menu-bar" class="menu-bar">
				<i class="fa-solid cor fa-bars"></i>
			</div>

		<nav class="menu">
			
			<ul>

				<li><h5 class="link-menu">Conta</h5>
					<ul class="submenu">
						<li><a href="../login/login.html" class="link-menu">Login</a></li>
						<li><a href="../cadastro/cadastro.html" class="link-menu">Criar conta</a></li>
					</ul>
				</li>

				<li><a href="index.php" class="link-menu"><span>Novidades</span></a></li>
				<li><a href="feminino.php" class="link-menu"><span>Feminino</span></a></li>
				<li><a href="masculino.php" class="link-menu"><span>Masculino</span></a></li>
				<li><a href="infantil.php" class="link-menu"><span>Infantil</span></a></li>
				<li><a href="moletons.php" class="link-menu"><span>Moletons</span></a></li>
				<li><a href="acessorios.html" class="link-menu"><span>Acessórios</span></a></li>
			</ul>
			<section class="subMenu-inferior"></section>
		</nav>
	</header>

    <section class="conteiner">
		<!--
        <div class="produto-card">

			<div class="pruduct-infs">

	            <figure class="imagem">
    	            <img src="../imagens/produtos/quadros/Jogos/Pôster - Hollow Knight.png" alt="">
        	    </figure>

	            <aside class="dados">
	                <div class="titulo-produto">
    	                <h4>Pôster -  Hollow Knight</h4>
        	        </div>
            	    <div class="preco">
                	    <span>R$ 50,00</span>
	                </div>
    	        </aside>

			</div>
			
			<div class="data-entrega">
				<h4>Data de entrega: <span> 23/10/2022</span></h4>
				<h4>Forma de pagamento: <span> Pix</span></h4>
				<h4>Quantidade: <span> 1</span></h4>
			</div>

			<button type="button" class="cancel-btn" onclick=(a())><span>Cancelar compra</span></button>

		</div>
	-->
	<?php
	
	while($idClient = mysqli_fetch_assoc($resultIdCliente)){

		$sqlIdPedido = "SELECT id_pedido FROM pedido WHERE id_cliente = '$idClient[id_cliente]'";
		$resultIdPedido = $conexao->query($sqlIdPedido);
	
		//print_r($resultIdPedido);

		while($idPedido = mysqli_fetch_assoc($resultIdPedido)){
			//print_r($idPedido);

			$sqlIdProduto = "SELECT id_produto FROM pedido WHERE id_pedido = '$idPedido[id_pedido]'";
			$resultIdProduto = $conexao->query($sqlIdProduto);
			//print_r($resultIdProduto);
			
			while($idProduto = mysqli_fetch_assoc($resultIdProduto)){
				
				//print_r($idProduto['id_produto']);
				
				$sqlProduto = "SELECT * FROM produto WHERE id_produto = '$idProduto[id_produto]'";
				//$sqlProduto = "SELECT * FROM produto INNER JOIN pagamento ON produto.id_produto = pagamento.id_pedido WHERE id_produto = '$idProduto[id_produto]'";
				$resultProduto = $conexao->query($sqlProduto);

				while($produto = mysqli_fetch_assoc($resultProduto)){

					//$innerjoinPedido = "SELECT pedido.id_pedido, pagamento.id_pedido FROM pedido INNER JOIN pagamento ON pedido.id_pedido = pagamento.id_pedido;";
					//$resultInnerJoin = $conexao->query($innerjoinPedido);
					
					echo '<div class="produto-card">';
					echo '<div class="pruduct-infs">';
		
						echo '<figure class="imagem">';
							echo '<img src="'.$produto['url'].'" alt="">';
						echo '</figure>';
		
						echo'<aside class="dados">';
							echo '<div class="titulo-produto">';
								echo "<a href='./pgCompra.php?id_produto=$produto[id_produto]'>".$produto['nome_produto'].'</a>';
							echo '</div>';
							echo '<div class="preco">';
								echo '<span>'.$produto['preco'].'</span>';
							echo '</div>';
						echo '</aside>';
		
					echo '</div>';
					
					
					echo '<div class="data-entrega">';
						echo '<h4>Data de entrega: <span> 23/10/2022</span></h4>';
						echo '<h4>Forma de pagamento: <span>boleto</span></h4>';
						echo '<h4>Quantidade: <span> 1</span></h4>';
					echo '</div>';
		
					echo '<button type="button" class="cancel-btn"><span>Cancelar compra</span></button>';
		
				echo '</div>';

				}


			}

		}
	}
	?>

    </section>


	<div id="cancelar-compra">

	</div>

	<script>

		let cancel = document.querySelectorAll(".cancel-btn")
		cancel.forEach(cancel =>{
			cancel.addEventListener("click", ()=>{
				a()
			})
		})
		function a(){
			//console.log("Olá mundo")

			let areaCancelar = document.querySelector("#cancelar-compra")

			areaCancelar.classList.toggle("cancelar-area")
			
			areaCancelar.innerHTML =`
			<div class="area">
			<h3>Deseja realmente cancelar essa compra?</h3>

			<div class="opcoes">

				<button type="button" class="botao" id="cancel">Não</button>
				<button type="button" class="botao" id="apagar">Sim</button>

			</div>

		</div>
			`

			let cancel = document.querySelector("#cancel")
			cancel.addEventListener("click", ()=>{
				areaCancelar.classList.toggle("cancelar-area")
				areaCancelar.innerHTML = ""
			})

			let apagar = document.querySelector("#apagar")
			apagar.addEventListener("click", ()=>{
				let q = document.querySelectorAll(".produto-card")
				q.forEach(q=>{
					//console.log(q.classList)
					console.log(q.classList.length)
				})
			})
		}
	</script>

</body>
</html>