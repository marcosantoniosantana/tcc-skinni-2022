<?php

session_start();
include("./php/conexao.php");

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

$id_cliente = "SELECT id_cliente FROM cliente WHERE email = '$_SESSION[email]' AND senha = '$_SESSION[senha]'";
$resultId = $conexao->query($id_cliente);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="./css/perfil.css">

    <link rel="shortcut icon" type="image/x-icon" href="./imagens/imagens_pagina/icone_titulo.png">

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300&family=Merriweather+Sans&display=swap" rel="stylesheet">

	<style>

		.container{
			display: flex;
			flex-direction: column;
		}

		.deletar-conta {
		width: fit-content;
    	top: 0%;
	    left: 50%;
    	transform: translate(-50%, 0%);
	    position: relative;
    	margin: 1% 0;
	    background-color: #ff0043;
    	border: 0;
	    border-radius: 5px;
    	padding: 10px;
	    box-shadow: 0 0 10px rgb(0 0 0 / 50%);
		}

		.deletar-conta span{
			font-family: sans-serif;
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

			<div class="barra-pesquisa">
				<i class="fas fa-search pesquisar-icon"></i>
				<input type="text" class="pesquisa" id="pesquisa" placeholder="Pesquisar...">
			</div>

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
						<li><a href="login.html" class="link-menu">Login</a></li>
						<li><a href="cadastro.html" class="link-menu">Criar conta</a></li>
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

    <section class="container">
        <form action="./php/updateCad.php" method="get">
            
            <div class="infs">
                <input type="text" class="nome" placeholder=" " required value='<?php echo $nome?>' name="nome">
                <label for="nome">Nome</label>
            </div>

            <div class="infs">
                <input type="text" class="email" placeholder=" " required value='<?php echo $emailUser?>' name="email">
                <label for="email">Email</label>
            </div>

            <div class="infs">
                <input type="text" id="telefone" maxlength="15" class="telefone" placeholder=" " value='<?php echo $telefone?>' required name="telefone">
                <label for="telefone">Telefone</label>
            </div>

            <div class="infs">
				<input type="password" class="senha" placeholder=" " value='<?php echo $senha?>' required name="senha">
				<label for="senha">senha</label>

				<figure class="icone-eye">
					<svg viewBox="-6 -6 32 32" role="presentation" class="revela-senha" id="mostrar-senha"><g><path d="M3.25909 11.6021C3.94254 8.32689 6.79437 6 10 6C13.2057 6 16.0574 8.32688 16.7409 11.6021C16.7974 11.8725 17.0622 12.0459 17.3325 11.9895C17.6029 11.933 17.7763 11.6682 17.7199 11.3979C16.9425 7.67312 13.6934 5 10 5C6.3066 5 3.05742 7.67311 2.28017 11.3979C2.22377 11.6682 2.39718 11.933 2.6675 11.9895C2.93782 12.0459 3.20268 11.8725 3.25909 11.6021Z"></path><path d="M10 8C8.067 8 6.5 9.567 6.5 11.5C6.5 13.433 8.067 15 10 15C11.933 15 13.5 13.433 13.5 11.5C13.5 9.567 11.933 8 10 8ZM7.5 11.5C7.5 10.1193 8.61929 9 10 9C11.3807 9 12.5 10.1193 12.5 11.5C12.5 12.8807 11.3807 14 10 14C8.61929 14 7.5 12.8807 7.5 11.5Z"></path></g></svg>
				</figure>

            </div>

            <div class="infs">
                <input type="text" class="endereco" placeholder=" " value='<?php echo $endereco?>' required name="endereco">
                <label for="endereco">Endereco</label>
            </div>

            <div class="infs">
                <input type="number" class="numero" placeholder=" " value='<?php echo $numero?>' required name="numero">
                <label for="numero">Número</label>
            </div>

            <button type="submit">Atualizar dados</button>

        </form>
		<a href="./php/deletar.php?id_cliente=<?php echo $id?>" class="deletar-conta" style="display: none;"><span>Excluir Conta</span></a>
    </section>
    

	<script>
		let senha = document.querySelector(".icone-eye")
		let inputSenha = document.querySelector(".senha")
		senha.addEventListener("click", ()=>{
			if(inputSenha.type == "password"){
				inputSenha.type = "text"
			} else{
				inputSenha.type = "password"
			}
		})

		const telefone = document.querySelector("#telefone");
telefone.addEventListener("keypress", ()=>{
	let telefoneFormatado = telefone.value.length;

	if (telefoneFormatado === 0) {
		telefone.value += "(";
	} else if(telefoneFormatado === 3){
		telefone.value += ") ";
	} else if (telefoneFormatado === 10) {
		telefone.value += "-";
	}
});
	</script>
    
</body>
</html>