<?php
session_start();
include('./php/conexao.php');
//print_r($_SESSION);
/*
if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['nome']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
*/

//$logado = $_SESSION['nome'];

//$sql = "SELECT * FROM produto ORDER BY nome_produto DESC";
$sql = "SELECT * FROM produto WHERE genero_roupa = 'feminino'";

$result = $conexao->query($sql);
//print_r($result);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Feminino</title>
	<!-- Estilo css: -->
	<link rel="stylesheet" type="text/css" href="./css/estilo.css">

	<link rel="shortcut icon" type="image/x-icon" href="./imagens/imagens_pagina/icone_titulo.png">

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300&family=Merriweather+Sans&display=swap" rel="stylesheet">

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
				<button type="submit">
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
						<li><a href="/login" class="link-menu">Login</a></li>
						<li><a href="/cadastro" class="link-menu">Criar conta</a></li>
					</ul>
				</li>

				<li><a href="index.php" class="link-menu"><span>Novidades</span></a></li>
				<li class="marcador-pagina"><a href="" class="link-menu"><span>Feminino</span></a></li>
				<li><a href="masculino.php" class="link-menu"><span>Masculino</span></a></li>
				<li><a href="infantil.php" class="link-menu">Infantil</span></a></li>
				<li><a href="moletons.php" class="link-menu"><span>Moletons</span></a></li>
				<li><a href="acessorios.php" class="link-menu"><span>Acessórios</span></a></li>
			</ul>
			<section class="subMenu-inferior"></section>
		</nav>
	</header>

	<section class="mostruario-secoes">
		<h1></h1>

		<div class="vitrine-item">

		<?php
                while($user_data = mysqli_fetch_assoc($result)){

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

	<footer>

		<div class="itens-rodape">
			<div class="divisoes-rodape">
				<h2></h2><br>

				<a href="https://www.instagram.com/tcc_skinni_grupo5/">
					<i class="fa-brands fa-instagram"></i>
				</a>
			</div>

			<div class="divisoes-rodape">
				<h2>Sobre a Skinni:</h2>

				<ul>
					<li><a href="">Quem somos</a></li>
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

	<div class="tela-infs"></div>
	

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<script src="https://unpkg.com/scrollreveal"></script>

	<script type="text/javascript" src="./js/feminino.js"></script>
	
	<script>
		ScrollReveal().reveal('.itens, footer', { interval: 16, reset: true });
  		AOS.init();

		  let preco = document.querySelectorAll("#preco")

			preco.forEach(price => {
				price.innerText = price.innerText.replace(".",",")
			});
	</script>

</body>
</html>
