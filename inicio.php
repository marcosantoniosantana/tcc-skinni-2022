<?php
session_start();
include("./php/conexao.php");

//print_r($_SESSION['email']);

/*
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
	unset($_SESSION['email']);
	unset($_SESSION['senha']);
	header("Location: login.html");
}
*/

$userEmail = $_SESSION['email'];
$userSenha = $_SESSION['senha'];

//$sql = "SELECT nome FROM cliente WHERE email = '$logado'";
$sql = "SELECT nome FROM cliente WHERE email = '$userEmail' AND senha='$userSenha'";
$name = $conexao->query($sql);
//print_r($name);

//print_r($logado);

$sqlProduto = "SELECT * FROM produto WHERE tipo_produto = 'camiseta'";
$resultProduto = $conexao->query($sqlProduto);


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="description" content="Trabalho de conclusão do curso de informática">
	<meta name="keywords" content="TCC, skinni, INF3EM">
	<meta name="author" content="Marcos Antonio de Santana">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bem-vindo(a) <?php
		while($user_data = mysqli_fetch_assoc($name)){
			echo $user_data['nome'];
		}
	?></title>
	<!-- Estilo css: -->
	<link rel="stylesheet" type="text/css" href="./css/estilo.css">

	<link rel="shortcut icon" type="image/x-icon" href="./imagens/imagens_pagina/icone_titulo.png">

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<!--Também ESPERO que seja parte da biblioteca de scroll do Swiperjs-->
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300&family=Merriweather+Sans&display=swap"
		rel="stylesheet">

		<style>
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

			.banner-tipos{
				background-color: transparent;
			}

			.banners-menores{
				width: 50%;
			}

			.banners-menores a {
 			   /*width: 178px;*/
			   width: 31%;
 			   margin: 3px;
			   display: flex;
			   overflow: hidden;
			   transition: 1s;
			}
			
			.banners-menores a img{
				width: 100%;
			}
			
			.banners-menores a:hover img{
				transform: scale(1.25);
				transition: 1s;
			}

			.submostruario-menor {
			    width: 50%;
			}

		</style>
</head>

<body>
	<header class="cabecalho">
		<div class="itens-cabecalho">


			<div class="logo">
				<h1 class="titulo-logo">Skinni</h1>
			</div>

			<form class="barra-pesquisa" action="pesquisa.php" method="GET">
				<button type="submit">
					<i class="fas fa-search pesquisar-icon"></i>
				</button>
				<input type="text" class="pesquisa" id="pesquisa" placeholder="Pesquisar..." require name="pesquisa">
			</form>

			<div class="icones">

				<a href="comprados.php">
					<div class="compras">
						<i class="fas fa-shopping-bag"></i>
					</div>
				</a>

				<div class="login-menu">

					
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

				</div>



			</div>

		</div>

		<div id="menu-bar" class="menu-bar">
			<i class="fa-solid cor fa-bars"></i>
		</div>

		<nav class="menu">

			<ul>

				<li>
					<h5 class="link-menu">Conta</h5>
					<ul class="submenu">
						<li><a href="/login.html" class="link-menu"><span>Login</span></a></li>
						<li><a href="/cadastro.html" class="link-menu"><span>Criar conta</span></a></li>
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
			<section class="subMenu-inferior">
				<article class="sub-conteudo">
					<ul>
						<li>aaaaa</li>
					</ul>
				</article>
			</section>
		-->
		</nav>


	</header>

	<article id="sombra-menu"></article>

	<header class="area-banner">
		<img src="imagens/imagens_pagina/banner/Banner.png" alt="Banner">
	</header>

	<div class="capsula">

		<div class="controles">
			<div class="seta-back">
				<i class="fa-solid fa-chevron-left"></i>
			</div>

			<div class="seta-next">
				<i class="fa-solid fa-chevron-right"></i>
			</div>
		</div>

		<div class="submenu-inferior-mini">
			<a href="infantil.php">
				<img src="./imagens/imagens_pagina/icones-menu/Atalho_Baby Body.png" title="Roupas de bebe">
			</a>

			<a href="camisetas.php">
				<img src="./imagens/imagens_pagina/icones-menu/Atalho_Camisetas.png" title="Camisetas">
			</a>

			<a href="moletons.php">
				<img src="./imagens/imagens_pagina/icones-menu/Atalho_Moletons.png" title="Moletons">
			</a>

			<a href="quadros.php">
				<img src="./imagens/imagens_pagina/icones-menu/Atalho_Quadros.png" title="Quadros decorativos">
			</a>

			<a href="acessorios.php">
				<img src="./imagens/imagens_pagina/icones-menu/acessorios.png" title="Acessórios">
			</a>
		</div>



	</div>

	<section class="mostruario">
		<h1>Adicionados recentemente:</h1>

		<div class="setas">
			<div class="seta anterior">
				<i class="fa-solid fa-chevron-right"></i>
			</div>

			<div class="seta proximo">
				<i class="fa-solid fa-chevron-right"></i>
			</div>
		</div>
		<div class="vitrine">

		<?php

			while($user_data = mysqli_fetch_assoc($resultProduto)){
				
				echo "<a href='./pgCompra.php?id_produto=$user_data[id_produto]'>";
					echo "<figure class='itens'>";
						echo"<div class='img-item'>";
							echo"<img src=".$user_data['url']."/>";
						echo"</div>";
	
						echo"<div class='inf-produto'>";
							echo"<h2 class='titulo-produto' id='titulo-item'>".$user_data['nome_produto']."</h2>";		
							echo"<div class='area-precos'>";
								echo"<h3 class='preco' id='preco'>R$".$user_data['preco']."</h3>";
							echo"</div>";
						echo"</div>";
					echo"</figure>";
				echo "</a>";
			}

		?>

		</div>
	</section>

	<section class="mostruario">
		<h1>Mais vendidos:</h1>

		<div class="rolar">

			<div class="p-esquerda"><i class="fa-solid fa-chevron-left"></i></div>

			<div class="p-direita"><i class="fa-solid fa-chevron-right"></i></div>

		</div>

		<div class="vitrine" id="n-vitrine">

			<a href="pgCompra.php">
				<figure class="itens">
					<div class="img-item">
						<img src="imagens/produtos/feminino/Animações/The Dark Side Of The Bear - feminina.png">
					</div>

					<div class="inf-produto">
						<h2 class="titulo-produto" id="titulo-item">The Dark Side Of The Bear</h2>
						<div class="area-precos">
							<h3 class="preco">R$ 20,00</h3>
						</div>
					</div>
				</figure>
			</a>

			<a href="pgCompra.php">
				<figure class="itens">
					<div class="img-item">
						<img src="imagens/produtos/feminino/Animações/Elemento X - feminina.png">
					</div>

					<div class="inf-produto">
						<h2 class="titulo-produto" id="titulo-item">Elemento X Babylook</h2>
						<div class="area-precos">
							<h3 class="preco">R$ 20,00</h3>
						</div>
					</div>
				</figure>
			</a>

			<a href="pgCompra.php">
				<figure class="itens">
					<div class="img-item">
						<img src="imagens/produtos/masculino/Animes/Kiuubi - masculina.png">
					</div>

					<div class="inf-produto">
						<h2 class="titulo-produto" id="titulo-item">Camisa Masculina Kiuubi</h2>
						<div class="area-precos">
							<h3 class="preco">R$ 20,00</h3>
						</div>
					</div>
				</figure>
			</a>

			<a href="pgCompra.php">
				<figure class="itens">
					<div class="img-item">
						<img src="imagens/produtos/acessorios/Colar Espada do Zabuza Momochi - Naruto.jpeg">
					</div>

					<div class="inf-produto">
						<h2 class="titulo-produto" id="titulo-item">Colar Espada Zabuza Momochi</h2>
						<div class="area-precos">
							<h3 class="preco">R$ 20,00</h3>
						</div>
					</div>
				</figure>
			</a>

			<a href="pgCompra.php">
				<figure class="itens">
					<div class="img-item">
						<img src="imagens/produtos/moletons/kimetsu-masks-canguru-unissex.jpg">
					</div>

					<div class="inf-produto">
						<h2 class="titulo-produto" id="titulo-item">Moletom Unissex Kimetsu Masks</h2>
						<div class="area-precos">
							<h3 class="preco">R$ 20,00</h3>
						</div>
					</div>
				</figure>
			</a>

			<a href="pgCompra.php">
				<figure class="itens">
					<div class="img-item">
						<img src="imagens/produtos/moletons/e-la-vamos-nos-canguru-unissex.jpg">
					</div>

					<div class="inf-produto">
						<h2 class="titulo-produto" id="titulo-item">Moletom: E lá Vamos Nós</h2>
						<div class="area-precos">
							<h3 class="preco">R$ 20,00</h3>
						</div>
					</div>
				</figure>
			</a>

			<a href="pgCompra.php">
				<figure class="itens">
					<div class="img-item">
						<img src="imagens/produtos/masculino/Animes/Kamado Brothers - masculina.png">
					</div>

					<div class="inf-produto">
						<h2 class="titulo-produto" id="titulo-item">Kamado Brothers</h2>
						<div class="area-precos">
							<h3 class="preco">R$ 20,00</h3>
						</div>
					</div>
				</figure>
			</a>

			<a href="pgCompra.php">
				<figure class="itens">
					<div class="img-item">
						<img src="imagens/produtos/acessorios/Colar Shodai Hokage - Naruto.jpg">
					</div>

					<div class="inf-produto">
						<h2 class="titulo-produto" id="titulo-item">Colar Shodai</h2>
						<div class="area-precos">
							<h3 class="preco">R$ 20,00</h3>
						</div>
					</div>
				</figure>
			</a>

		</div>

	</section>

	<section class="mostruario-menor">

	<div class="banners-menores" id="banner-secundario">
			
			<a href="animes.php">
				<img src="imagens/imagens_pagina/banner/tematicos/animes.png" alt="Banner">
			</a>

			<a href="filmes.php">
				<img src="imagens/imagens_pagina/banner/tematicos/Filmes_Banner.png" alt="Banner">
			</a>

			<a href="animacoes.php">
				<img src="imagens/imagens_pagina/banner/tematicos/Animações_banner.png" alt="Banner">
			</a>

			<a href="jogos.php">
				<img src="imagens/imagens_pagina/banner/tematicos/Jogos_Banner.png" alt="Banner">
			</a>

			<a href="series.php">
				<img src="imagens/imagens_pagina/banner/tematicos/Séries_Banner.png" alt="Banner">
			</a>

			<a href="musicas.php">
				<img src="imagens/imagens_pagina/banner/tematicos/Músicas_banner.png" alt="Banner">
			</a>

		</div>

		<div class="submostruario-menor">

			<div class="vitrine-menor">

				<section class="mostruario" style="margin-top: 0;">
					<h1>Novidades:</h1>

					<div class="rolar" style="position:relative; top:200px; margin-top: 0;">

						<div class="p-esquerda" id="back"><i class="fa-solid fa-chevron-left"></i></div>

						<div class="p-direita" id="next"><i class="fa-solid fa-chevron-right"></i></div>

					</div>

					<div style="margin-top: 0%;" class="vitrine" id="vitrine3">

						<a href="pgCompra.php">
							<figure class="itens">
								<div class="img-item">
									<img
										src="imagens/produtos/feminino/Animações/The Dark Side Of The Bear - feminina.png">
								</div>

								<div class="inf-produto">
									<h2 class="titulo-produto" id="titulo-item">The Dark Side Of The Bear</h2>
									<div class="area-precos">
										<h3 class="preco">R$ 20,00</h3>
									</div>
								</div>
							</figure>
						</a>

						<a href="pgCompra.php">
							<figure class="itens">
								<div class="img-item">
									<img src="imagens/produtos/feminino/Animações/Elemento X - feminina.png">
								</div>

								<div class="inf-produto">
									<h2 class="titulo-produto" id="titulo-item">Elemento X Babylook</h2>
									<div class="area-precos">
										<h3 class="preco">R$ 20,00</h3>
									</div>
								</div>
							</figure>
						</a>

						<a href="pgCompra.php">
							<figure class="itens">
								<div class="img-item">
									<img src="imagens/produtos/masculino/Animes/Kiuubi - masculina.png">
								</div>

								<div class="inf-produto">
									<h2 class="titulo-produto" id="titulo-item">Camisa Masculina Kiuubi</h2>
									<div class="area-precos">
										<h3 class="preco">R$ 20,00</h3>
									</div>
								</div>
							</figure>
						</a>

						<a href="pgCompra.php">
							<figure class="itens">
								<div class="img-item">
									<img src="imagens/produtos/acessorios/Filmes/Bolsa - Olho de Agamotto.png">
								</div>

								<div class="inf-produto">
									<h2 class="titulo-produto" id="titulo-item">Bolsa Olho de Agamoto</h2>
									<div class="area-precos">
										<h3 class="preco">R$ 20,00</h3>
									</div>
								</div>
							</figure>
						</a>

						<a href="pgCompra.php">
							<figure class="itens">
								<div class="img-item">
									<img src="imagens/produtos/acessorios/Séries/Kit patches - Stranger Things.png">
								</div>

								<div class="inf-produto">
									<h2 class="titulo-produto" id="titulo-item">Kit patches - Stranger Things</h2>
									<div class="area-precos">
										<h3 class="preco">R$ 20,00</h3>
									</div>
								</div>
							</figure>
						</a>

						<a href="pgCompra.php">
							<figure class="itens">
								<div class="img-item">
									<img src="imagens/produtos/acessorios/Filmes/Porta moedas - Harley.png">
								</div>

								<div class="inf-produto">
									<h2 class="titulo-produto" id="titulo-item">Porta Moedas Harley</h2>
									<div class="area-precos">
										<h3 class="preco">R$ 20,00</h3>
									</div>
								</div>
							</figure>
						</a>

					</div>

				</section>

			</div>

		</div>
	</section>

	<section class="banner-tipos" data-aos="fade-up" data-aos-duration="1000">


		<a href="#top" class="banners-link">
			<figure class="banner-detalhes" data-aos="zoom-in" data-aos-duration="1000">
				<img src="imagens/imagens_pagina/banner/tipo-produtos/Calças_banner.png" alt="">
			</figure>
		</a>

		<a href="/moletons" class="banners-link">
			<figure class="banner-detalhes" data-aos="zoom-in" data-aos-duration="2000">
				<img src="imagens/imagens_pagina/banner/tipo-produtos/Moletons_banner.png" alt="">
			</figure>
		</a>

		<div class="enquadro">
			<a href="/acessorios" class="banners-link">
				<figure class="banner-detalhes correcao" data-aos="zoom-in" data-aos-duration="1200">
					<img src="imagens/imagens_pagina/banner/tipo-produtos/Acessórios_banner.png" alt="">
				</figure>
			</a>

			<a href="/infantil" class="banners-link">
				<figure class="banner-detalhes correcao" data-aos="zoom-in" data-aos-duration="1400">
					<img src="imagens/imagens_pagina/banner/tipo-produtos/Baby_body_banner.png" alt="">
				</figure>
			</a>

		</div>

		<a href="/quadros" class="banners-link">
			<figure class="banner-detalhes correcao" data-aos="zoom-in" data-aos-duration="1000">
				<img src="imagens/imagens_pagina/banner/tipo-produtos/Quadros_banner.png" alt="">
			</figure>
		</a>


		<a href="/camisetas" class="banners-link">
			<figure class="banner-detalhes" data-aos="zoom-in" data-aos-duration="2000">
				<img src="imagens/imagens_pagina/banner/tipo-produtos/Camisetas_banner.png" alt="">
			</figure>
		</a>

		<a href="#top" class="banners-link">
			<figure class="banner-detalhes" data-aos="zoom-in" data-aos-duration="1600">
				<img src="imagens/imagens_pagina/banner/tipo-produtos/Bermudas_banner.png" alt="">
			</figure>
		</a>

	</section>

	<section class="mostruario">
		<h1>Ofertas:</h1>

		<div class="rolar">

			<div class="p-esquerda" id="fBack"><i class="fa-solid fa-chevron-left"></i></div>

			<div class="p-direita" id="fNext"><i class="fa-solid fa-chevron-right"></i></div>

		</div>

		<div class="vitrine" id="vitrine4">

			<a href="pgCompra.php">
				<figure class="itens">
					<div class="img-item">
						<img src="imagens/produtos/feminino/Games/Mariochu - feminina.png">
					</div>

					<div class="inf-produto">
						<h2 class="titulo-produto" id="titulo-item">Camiseta Mariochu Feminina</h2>
						<div class="area-precos">
							<h3 class="preco">R$ 20,00</h3>
						</div>
					</div>
				</figure>
			</a>

			<a href="pgCompra.php">
				<figure class="itens">
					<div class="img-item">
						<img src="imagens/produtos/quadros/Música/Pôster - Guns N' Roses.png">
					</div>

					<div class="inf-produto">
						<h2 class="titulo-produto" id="titulo-item">Poster Guns N' Roses</h2>
						<div class="area-precos">
							<h3 class="preco">R$ 20,00</h3>
						</div>
					</div>
				</figure>
			</a>

			<a href="pgCompra.php">
				<figure class="itens">
					<div class="img-item">
						<img src="imagens/produtos/acessorios/Animações/Caneca - Polar.png">
					</div>

					<div class="inf-produto">
						<h2 class="titulo-produto" id="titulo-item">Caneca - Polar</h2>
						<div class="area-precos">
							<h3 class="preco">R$ 20,00</h3>
						</div>
					</div>
				</figure>
			</a>

			<a href="pgCompra.php">
				<figure class="itens">
					<div class="img-item">
						<img src="imagens/produtos/quadros/Jogos/Pôster - Hollow Knight.png">
					</div>

					<div class="inf-produto">
						<h2 class="titulo-produto" id="titulo-item">Pôster Hollow Knight</h2>
						<div class="area-precos">
							<h3 class="preco">R$ 20,00</h3>
						</div>
					</div>
				</figure>
			</a>

			<a href="pgCompra.php">
				<figure class="itens">
					<div class="img-item">
						<img src="imagens/produtos/moletons/titans-canguru-unissex.jpg">
					</div>

					<div class="inf-produto">
						<h2 class="titulo-produto" id="titulo-item">Moletom Titãs</h2>
						<div class="area-precos">
							<h3 class="preco">R$ 20,00</h3>
						</div>
					</div>
				</figure>
			</a>

			<a href="pgCompra.php">
				<figure class="itens">
					<div class="img-item">
						<img src="imagens/produtos/feminino/Animações/Steven - feminina.png">
					</div>

					<div class="inf-produto">
						<h2 class="titulo-produto" id="titulo-item">Babylook Steven Universe</h2>
						<div class="area-precos">
							<h3 class="preco">R$ 20,00</h3>
						</div>
					</div>
				</figure>
			</a>

			<a href="pgCompra.php">
				<figure class="itens">
					<div class="img-item">
						<img src="imagens/produtos/quadros/Filmes/Pôster - Joker.png">
					</div>

					<div class="inf-produto">
						<h2 class="titulo-produto" id="titulo-item">Pôster - Joker</h2>
						<div class="area-precos">
							<h3 class="preco">R$ 20,00</h3>
						</div>
					</div>
				</figure>
			</a>

		</div>

	</section>

	<section class="area-small-banners" style="background-color: transparent;">
		<img src="./imagens/imagens_pagina/banner/Verão_banner.png" alt="">
		<img src="./imagens/imagens_pagina/banner/Inverno_banner.png" alt="">
	</section>

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
						<img src="imagens/imagens_pagina/formas_pagamento/visa.png" alt="">
					</figure>

					<figure class="tipo-forma-pagamento">
						<img src="imagens/imagens_pagina/formas_pagamento/elo.png" alt="">
					</figure>

					<figure class="tipo-forma-pagamento">
						<img src="imagens/imagens_pagina/formas_pagamento/mercadopago.png" alt="">
					</figure>

					<figure class="tipo-forma-pagamento">
						<img src="imagens/imagens_pagina/formas_pagamento/boleto.png" alt="">
					</figure>

					<figure class="tipo-forma-pagamento">
						<img src="imagens/imagens_pagina/formas_pagamento/pix.png" alt="">
					</figure>

				</figure>
			</div>
		</div>

		<div class="copyright">
			<h2>© Copyright 2022</h2>
		</div>
	</footer>

	<div class="tela-infs"></div>

	<!--<div class="cookies-area"></div>-->


	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<script src="https://unpkg.com/scrollreveal"></script>

	<!--Eu ESPERO que isso seja uma biblioteca para rolagem lateral-->
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<script type="text/javascript" src="js/main.js"></script>

	<script>
		ScrollReveal().reveal('.vitrine, #n-vitrine,  footer', {interval: 16, reset: true});
		AOS.init();

		let preco = document.querySelectorAll("#preco")

		preco.forEach(price => {
			price.innerText = price.innerText.replace(".",",")
		});

	</script>

</body>

</html>