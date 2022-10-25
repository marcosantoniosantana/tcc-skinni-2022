<?php
include("./php/conexao.php");
//$pesquisa = $_GET['pesquisa'];
//echo $pesquisa;

if(!empty($_GET['pesquisa'])){
	$pesquisa = $_GET['pesquisa'];

	//$sqlSelectName = "SELECT * FROM produto WHERE nome_produto='$pesquisa'";
	//$sqlSelectType = "SELECT * FROM produto WHERE tipo_produto='$pesquisa'";
	//$sqlSelectSize = "SELECT * FROM produto WHERE tamanho='$pesquisa'";
	//$sqlSelectMidia = "SELECT * FROM produto WHERE midia='$pesquisa'";

	//$result = $conexao->query($sqlSelectName);
	//$resultType = $conexao->query("$sqlSelectType");
	//$resultSize = $conexao->query("$sqlSelectSize");
	//$resultMidia = $conexao->query("$sqlSelectMidia");

	$sqlSelectName = "SELECT * FROM produto WHERE nome_produto LIKE '%$pesquisa%' or tipo_produto LIKE '%$pesquisa%' or midia LIKE '%$pesquisa%'";
	$result = $conexao->query($sqlSelectName);
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pesquisando por: <?php
		echo $pesquisa;
	?></title>
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
		.itens-cabecalho a{
			text-decoration: none;
		}

		.not{
			font-size: 2rem;
			text-align: center;
			font-family: sans-serif;
			margin-left: 100px;
			position: relative;
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

			<form class="barra-pesquisa">
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

				<a href="login.html">
					<div class="usuario">
						<i class="fas fa-user"></i>
					</div>
				</a>
			</div>

		</div>

			<div id="menu-bar" class="menu-bar">
				<i class="fa-solid cor fa-bars"></i>
			</div>

		<nav class="menu">
			
			<ul>

				<li><h5 class="link-menu">Conta</h5>
					<ul class="submenu">
						<li><a href="login.html" class="link-menu">Login</a></li>
						<li><a href="cadastro.html" class="link-menu">Criar conta</a></li>
					</ul>
				</li>

				<li><a href="index.php" class="link-menu"><span>Novidades</span></a></li>
				<li><a href="feminino.php" class="link-menu"><span>Feminino</span></a></li>
				<li><a href="masculino.phpl" class="link-menu"><span>Masculino</span></a></li>
				<li><a href="infantil.php" class="link-menu"><span>Infantil</span></a></li>
				<li><a href="moletons.php" class="link-menu"><span>Moletons</span></a></li>
				<li><a href="acessorios.php" class="link-menu"><span>Acessórios</span></a></li>
			</ul>
			<section class="subMenu-inferior"></section>
		</nav>
	</header>

	<section class="mostruario-secoes">
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
								echo"<h3 class='preco'>R$".$user_data['preco']."</h3>";
							echo"</div>";
						echo"</div>";
					echo"</figure>";
				echo "</a>";

                }
/*
				while($user_data = mysqli_fetch_assoc($resultType)){

					echo "<a href='./pgCompra.php?id_produto=$user_data[id_produto]'>";
						echo "<figure class='itens'>";
							echo"<div class='img-item'>";
								echo"<img src=".$user_data['url']."/>";
							echo"</div>";
		
							echo"<div class='inf-produto'>";
								echo"<h2 class='titulo-produto' id='titulo-item'>".$user_data['nome_produto']."</h2>";		
								echo"<div class='area-precos'>";
									echo"<h3 class='preco'>R$".$user_data['preco']."</h3>";
								echo"</div>";
							echo"</div>";
						echo"</figure>";
					echo "</a>";
	
					}

				while($user_data = mysqli_fetch_assoc($resultSize)){

					echo "<a href='./pgCompra.php?id_produto=$user_data[id_produto]'>";
						echo "<figure class='itens'>";
							echo"<div class='img-item'>";
								echo"<img src=".$user_data['url']."/>";
							echo"</div>";
		
							echo"<div class='inf-produto'>";
								echo"<h2 class='titulo-produto' id='titulo-item'>".$user_data['nome_produto']."</h2>";		
								echo"<div class='area-precos'>";
									echo"<h3 class='preco'>R$".$user_data['preco']."</h3>";
								echo"</div>";
							echo"</div>";
						echo"</figure>";
					echo "</a>";
	
					}

				while($user_data = mysqli_fetch_assoc($resultMidia)){

					echo "<a href='./pgCompra.php?id_produto=$user_data[id_produto]'>";
						echo "<figure class='itens'>";
							echo"<div class='img-item'>";
								echo"<img src=".$user_data['url']."/>";
							echo"</div>";
		
							echo"<div class='inf-produto'>";
								echo"<h2 class='titulo-produto' id='titulo-item'>".$user_data['nome_produto']."</h2>";		
								echo"<div class='area-precos'>";
									echo"<h3 class='preco'>R$".$user_data['preco']."</h3>";
								echo"</div>";
							echo"</div>";
						echo"</figure>";
					echo "</a>";
	
					}
*/
					if(mysqli_num_rows($result) < 1 ){
						echo '<h2 class="not">Produto Não encontrado</h2>';
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

	<script type="text/javascript" src="./js/infantil.js"></script>
	
	<script>
		ScrollReveal().reveal('.itens, footer', { interval: 16, reset: true });
  		AOS.init();
	</script>

</body>
</html>
