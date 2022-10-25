<?php
session_start();
include("./php/conexao.php");

if(!empty($_GET['id_produto'])){
	$id_produto = $_GET['id_produto'];

	$sqlSelect = "SELECT * FROM produto WHERE id_produto=$id_produto";

	$result = $conexao->query($sqlSelect);
	$resultImg = $conexao->query($sqlSelect);
	$resultName = $conexao->query($sqlSelect);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de compra</title>

    <link rel="stylesheet" href="./css/pgComprar.css">
    <link rel="shortcut icon" href="./imagens/imagens_pagina/icone_titulo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300&family=Merriweather+Sans&display=swap"
		rel="stylesheet">

		<style>

			.container{
				height: fit-content;
				padding-bottom: 5px;
				margin-top: 1.5%;
				background-color: #0b0c42;
			}

			.tituloItem, .preco, label[for="quantidade"], label[for="z"]{
				color: #000;
			}

			.descricao-input{
				color: #e5e32b;
			}

			.tituloItem, .preco{
				color: #e5e32b;
			}

			.separacoes select, .quantidade-caixa, .frete-caixa, .quantidade, .frete-caixa input{
				border-color: #e5e32b;
				color: #000;
				background-color: #cacaca;
			}

			.quantidade-caixa > input:focus + label{
				top: 0;
			}

			.frete-caixa > input:required + label, .frete-caixa > input:not(:placeholder-shown) + label, .quantidade-caixa > input:required + label, .quantidade-caixa > input:not(:placeholder-shown) + label {
			    top: 3px;
			}

			.frete-caixa > input:focus:required + label,
			.frete-caixa > input:not(:placeholder-shown) + label, .quantidade-caixa > input:focus:required + label,
			.quantidade-caixa > input:not(:placeholder-shown) + label {
			    top: -20px;
				color: #e5e32b;
			}

			.quantidade-caixa > input:focus:required + label,
			.frete-caixa input:focus:required + label{
				top: -20px;
				color: #e5e32b;
			}

			.frete-caixa > input:focus:required + label, .input-format > input:not(:placeholder-shown) + label {
	    		top: -30px;
		    	color: #e5e32b;
			}

			.comprar, .calcularFrete{
				background-color: #32278b;
			}

			.comprar:hover, .calcularFrete:hover{
				background-color: #4c1970;
			}

			.containerImagem{
				margin: 0;
			}

			.imagens-list{
				width: 30%;
			    height: 100%;
				display: flex;
				flex-direction: column;
				justify-content: center;
				margin-right: 32px;
			}

			.imagens-visualizar{
				width: fit-content;
				height: fit-content;
				background: #dad4e1;
			}

			.imagens-visualizar img{
				width: 100%;
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
						<li><a href="login.html" class="link-menu"><span>Login</span></a></li>
						<li><a href="cadastro.html" class="link-menu"><span>Criar conta</span></a></li>
					</ul>
				</li>

				<li class="opMenu"><a href="index.php" class="link-menu"><span>Novidades</span></a></li>
				<li class="opMenu"><a href="feminino.php" class="link-menu"><span>Feminino</span></a></li>
				<li class="opMenu"><a href="masculino.php" class="link-menu"><span>Masculino</span></a></li>
				<li class="opMenu"><a href="infantil.php" class="link-menu"><span>Infantil</span></a></li>
				<li class="opMenu"><a href="moletons.php" class="link-menu"><span>Moletons</span></a></li>
				<li class="opMenu"><a href="acessorios.html" class="link-menu"><span>Acessórios</span></a>
				</li>
			</ul>
			<!--
			<section class="subMenu-inferior"></section>
			-->
		</nav>
	</header>
	<article id="sombra-menu"></article>

    <article class="container">

		<div class="imagens-list">

			<?php
				while($user_data = mysqli_fetch_assoc($resultImg)){
					echo "<figure class='imagens-visualizar'>";
					echo "<img src=".$user_data['url']."/>";
					echo "</figure>";
				}
			?>

			<figure class="imagens-visualizar">
				<img src="./imagens/imagens_pagina/medidas/medidas_roupas.png" alt="">
			</figure>
		</div>

		<section class="containerImagem">
			<!--<img src="./imagens/produtos/moletons/kimetsu-masks-canguru-unissex.jpg" class="produto">-->


			<?php
				while($user_data = mysqli_fetch_assoc($result)){
					echo "<img class='produto' src=".$user_data['url']."/>";
				}
			?>
		</section>

		<form class="infs" action="./php/cCompra.php?" method="GET">
			<?php
				while($user_data = mysqli_fetch_assoc($resultName)){
							echo "<h2 class='tituloItem'>".$user_data['nome_produto']."</h2>";
							echo "<h3 class='preco' id='preco'>".$user_data['preco']."</h3>";
							echo "<input type='number' name='id' hidden value='".$user_data['id_produto']."'/>";
				}
				?>

			<!--<h3 class="preco">R$ 59,99</h3>-->

			<div class="separacoes">

				<div class="box">
					<p class="descricao-input">Tamanho</p>

					<select class="tamanho" required name="tamanho" id="tamanho">
						<option value="P">P</option>
						<option value="m">M</option>
						<option value="g">G</option>
						<option value="gg">GG</option>
					</select>
				</div>

				<div class="box">

					<p class="descricao-input">Modelo</p>

					<select class="modelo" required name="modelo" id="modelo">
						<option value="unisex">Unissex</option>
						<option value="masculino">Masculino</option>
						<option value="feminino">Feminino</option>
					</select>
				</div>

			</div>

			<div class="separacoes">

				<figure class="quantidade-caixa">
					<input type="number" class="quantidade"
					placeholder=" " id="quantidade" required name="quantidade">
					<label for="quantidade">Quantidade</label>
				</figure>
			</div>

			<div class="separacoes">
				
				<figure class="frete-caixa">
					<input type="text" id="z" placeholder=" ">
					<label for="z">Calcular Frete</label>
				</figure>

				<button class="calcularFrete"><Span>Calcular</Span></button>

			</div>

			<button type="submit" class="comprar"><span>Comprar</span></button>

		</form>

    </article>

	<footer>
		<div class="itens-rodape">
			<div class="divisoes-rodape">
				<h2></h2><br>

				<a href="https://www.instagram.com/tcc_skinni_grupo5/">
					<i class="fa-brands fa-instagram"></i>
				</a>
			</div>

			<div class="divisoes-rodape">
				<ul>
					<li>
						<a href="">Sobre a Skinni</a>
					</li>

					<li>
						<a href="">Quem somos</a>
					</li>

					<li>
						<a href="">Termos de uso</a>
					</li>

					<li></li>
				</ul>
			</div>

			<div class="divisoes-rodape">
				<h2>Formas de pagamento:</h2>

				<figure class="forma-pagamentos">

					<figure class="tipo-forma-pagamento">
						<img src="./imagens/imagens_pagina/formas_pagamento/visa.png" alt="">
					</figure>

					<figure class="tipo-forma-pagamento">
						<img src="./imagens/imagens_pagina/formas_pagamento/elo.png" alt="">
					</figure>

					<figure class="tipo-forma-pagamento">
						<img src="./imagens/imagens_pagina/formas_pagamento/mercadopago.png" alt="">
					</figure>

					<figure class="tipo-forma-pagamento">
						<img src="./imagens/imagens_pagina/formas_pagamento/boleto.png" alt="">
					</figure>

					<figure class="tipo-forma-pagamento">
						<img src="./imagens/imagens_pagina/formas_pagamento/pix.png" alt="">
					</figure>

				</figure>
			</div>
		</div>

		<div class="copyright"> <h2>© Copyright 2022</h2></div>
	</footer>
    
	<script src="./js/jquery-3.3.1.min.js"></script>
	<script src="./js/okzoom-1.0.min.js"></script>
	
	<script src="./js/comprar.js"></script>

	<script>
		let preco = document.querySelector("#preco").innerText.replace(".",",")

		document.querySelector("#preco").innerText = preco

		//console.log(preco)

		let selectImgProduct = document.querySelector(".imagens-visualizar:nth-child(1)")

		selectImgProduct.addEventListener("click", () =>{
			changeProduct()
		})

		let selectSize = document.querySelector(".imagens-visualizar:nth-child(2)")

		selectSize.addEventListener("click", ()=>{
			changeSize()
		})

		function changeProduct(){
			let getUrl = document.querySelector(".imagens-visualizar > img").src

			document.querySelector(".produto").src = getUrl
		}

		function changeSize(){
			let getUrl = document.querySelector(".imagens-visualizar:nth-child(2) > img").src

			document.querySelector(".produto").src = getUrl
		}

		let quantidade = document.querySelector("#quantidade")
		quantidade.addEventListener("input", ()=>{
			if(quantidade.value < 0){
				//console.log("Valor inferior a zero")
				quantidade.value = 1
			}
		})

	</script>

</body>
</html>