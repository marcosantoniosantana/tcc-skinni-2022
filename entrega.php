<?php

session_start();
include("./php/conexao.php");

//print_r($_SESSION['email']);


$emailUser = $_SESSION['email'];

$sqlDadosUser = "SELECT * FROM cliente WHERE email = '$emailUser'";
$result = $conexao->query($sqlDadosUser);



//Dados do formulário
while($user_data = mysqli_fetch_assoc($result)){
    
    //Não editavéis
    $nome = $user_data['nome'];
    $cpf = $user_data['cpf'];
    $telefone = $user_data['telefone'];
    
    //Editaveis
    $endereco = $user_data['endereco'];
    $numero = $user_data['numero'];
}

if(!empty($_GET['id_produto'])){
	$id_produto = $_GET['id_produto'];

	$sqlSelect = "SELECT * FROM produto WHERE id_produto=$id_produto";

	$result = $conexao->query($sqlSelect);
	$resultName = $conexao->query($sqlSelect);
}
//echo $_GET['modelo'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dados de entrega</title>
    <link rel="stylesheet" href="./css/entrega.css">

    <link rel="shortcut icon" href="./imagens/imagens_pagina/icone_titulo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300&family=Merriweather+Sans&display=swap"
		rel="stylesheet">

        <style>

            .produto-card{
                width: fit-content;
            }
            .infs{
                width: 250px;
            	height: 140px;
            }

            .img-container{
                width: 150px;
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
        </style>

</head>
<body>

        <header class="cabecalho">
                <div class="itens-cabecalho">
        
        
                    <div class="logo">
                        <h1 class="titulo-logo">Skinni</h1>
                    </div>
        
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
                                <li><a href="login.html" class="link-menu"><span>Login</span></a></li>
                                <li><a href="cadastro.html" class="link-menu"><span>Criar conta</span></a></li>
                            </ul>
                        </li>
        
                        <li class="opMenu"><a href="index.php" class="link-menu"><span>Novidades</span></a></li>
                        <li class="opMenu"><a href="feminino.php" class="link-menu"><span>Feminino</span></a></li>
                        <li class="opMenu"><a href="masculino.php" class="link-menu"><span>Masculino</span></a></li>
                        <li class="opMenu"><a href="infantil.php" class="link-menu"><span>Infantil</span></a></li>
                        <li class="opMenu"><a href="moletons.php" class="link-menu"><span>Moletons</span></a></li>
                        <li class="opMenu"><a href="acessorios.html" class="link-menu"><span>Acessórios</span></a></li>
                    </ul>
                    <!--
                    <section class="subMenu-inferior"></section>
                    -->
                </nav>
        </header>

        <div class="marcadores">
            <figure class="marcador"><span>Entrega</span></figure>
            <figure class="marcador"><span>Pagamento</span></figure>
        </div>

        <section class="container">

            <div class="form-area">
                <h2>Dados do Destinatário</h2>
                <form action="./php/dEntrega.php" method="get">
                    <div class="input-format">
                            <input type="text" required name="nome" class="nome" placeholder=" " value='<?php echo $nome?>'>
                            <label for="nome">Nome</label>
                    </div>


                    <div class="input-format">
                            <input type="text" required maxlength="15" id="telefone" name="telefone" class="telefone" placeholder=" " value='<?php echo $telefone?>'>
                            <label for="nome">Telefone</label>
                    </div>

                    <div class="input-format">
                            <input type="text" required maxlength="14" name="cpf" id="cpf" class="cpf" placeholder=" " value='<?php echo $cpf?>'>
                            <label for="nome">CPF</label>
                    </div>

                    <h2>Endereço</h2>

                    <div class="input-format">
                        <input type="text" required name="endereco" class="endereco" placeholder=" " value='<?php echo $endereco?>'>
                        <label for="endereco">Endereço</label>
                </div>

                <div class="separacao">
                    <div class="input-format">
                        <input type="text" required name="bairro" class="bairro" placeholder=" ">
                        <label for="nome">Bairro</label>
                    </div>

                    <div class="input-format">
                        <input type="number" required name="numero" class="numero" placeholder=" " value='<?php echo $numero?>'>
                        <label for="numero">Número</label>
                    </div>

                </div>

                <div class="separacao">
                    <div class="input-format">
                        <input type="text" name="complemento" class="complemento" placeholder=" ">
                        <label for="nome">Complemento</label>
                    </div>

                    <div class="input-format">
                        <input type="number" name="cep" class="cep" placeholder=" ">
                        <label for="numero">CEP</label>
                    </div>

                </div>

                <div class="separacao">
                    <div class="input-format">
                        <input type="text" name="cidade" class="cidade" placeholder=" ">
                        <label for="cidade">Cidade</label>
                    </div>
                    
                    <div class="select-format">
                        <select id="estado" name="estado">
                            <option>Escolha seu estado</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            <option value="EX">Estrangeiro</option>
                        </select>
                    </div>

                </div>

                <button type="submit"><span>Próximo</span></button>

                </form>
            </div>

            <div class="cards">
                <figure class="produto-card">
                    <?php
                    echo $_GET['quantidade'];
                    echo"<div class='img-container'>";
		        		while($user_data = mysqli_fetch_assoc($result)){
	    		    		echo "<img class='produto' src=".$user_data['url']."/>";
                            echo"</div>";
                            
                            echo"<div class='infs'>";
                            echo"<p>".$user_data['nome_produto']."</p>";
                            echo"<span id ='preco'>".$user_data['preco']."</span>";
                            echo"</div>";
    				    }
                    ?>
                </figure>
    
                <figure class="cardPreco">
                    <div class="valores">
                        <span class="subtotal">Subtotal: R$ <span class="sub-preco" id="subtotal" name="preco"></span></span>
                        <span class="frete">Frete: R$ <span class="frete-preco" name="frete">00,00</span></span>
                    </div>

                    <span class="total">Total:  R$ <span id="total" name="total"></span></span>
                </figure>
            </div>
        </section>

        <script>

            let total = document.querySelector("#total")
            let subtotal = document.querySelector("#subtotal")
            let preco = document.querySelector("#preco").innerText

            subtotal.innerText = preco
            total.innerText = subtotal.innerText

            preco.innerText = preco.innerText.replace(".",",")
            
            const cpf = document.querySelector("#cpf");
            cpf.addEventListener("keypress", ()=>{
	        let cpfFormatado = cpf.value.length;

        	if (cpfFormatado === 3) {
    	    	cpf.value += ".";
	        } else if(cpfFormatado === 7){
        		cpf.value += ".";
        	} else if (cpfFormatado === 11) {
		        cpf.value += "-";
	        }
            });

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