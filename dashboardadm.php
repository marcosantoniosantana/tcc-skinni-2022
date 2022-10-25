<?php
session_start();
include('./php/conexao.php');
//print_r($_SESSION);

$sql = "SELECT * FROM produto";

$result = $conexao->query($sql);

$sqlCliente = "SELECT * FROM cliente";

$resultCliente = $conexao->query($sqlCliente);

$sqlEntrega = "SELECT * FROM entrega";

$resultEntrega = $conexao->query($sqlEntrega);
//print_r($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admnistração</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="./css/dashboardadm.css">

	<link rel="shortcut icon" href="./imagens/imagens_pagina/icone_titulo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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

			#back-to{
				top: 63%;
				left: 0.5%;
				position: absolute;
			}

			.content{
				flex-direction: column;
				overflow-y: scroll;
			}

			.content ul{
				width: 95%;
				margin-top: 100px;
			}

			.espaco{
				margin-left: 280px;
			}
		</style>
</head>
<body>

	<header class="cabecalho">
		<div class="itens-cabecalho">


			<a href="index.php" style="text-decoration: none;">
				<div class="logo">
					<h1 class="titulo-logo">Skinni</h1>
				</div>
			</a>

			<div class="barra-pesquisa">
				<i class="fas fa-search pesquisar-icon"></i>
				<input type="text" class="pesquisa" id="pesquisa" placeholder="Pesquisar...">
			</div>

			<div class="icones">

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

			<a href="" id="back-to">
			<svg width="44" height="44" fill="none" stroke="#e5e32b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
 <path d="M11.438 18.75 4.688 12l6.75-6.75"></path>
 <path d="M5.625 12h13.688"></path>
</svg>
		</a>

		<nav class="menu">
			
			<ul>

				<li><h5 class="link-menu">Conta</h5>
					<ul class="submenu">
						<li><a href="../login/login.html" class="link-menu"><span>Login</span></a></li>
						<li><a href="../cadastro/cadastro.html" class="link-menu"><span>Criar conta</span></a></li>
					</ul>
				</li>

				<li class="opMenu"><a href="index.php" class="link-menu"><span>Novidades</span></a></li>
				<li class="opMenu"><a href="feminino.php" class="link-menu"><span>Feminino</span></a></li>
				<li class="opMenu"><a href="masculino.php" class="link-menu"><span>Masculino</span></a></li>
				<li class="opMenu"><a href="infantil.php" class="link-menu"><span>Infantil</span></a></li>
				<li class="opMenu"><a href="moletons.php" class="link-menu"><span>Moletons</span></a></li>
				<li class="opMenu"><a href="acessorios.html" class="link-menu"><span>Acessórios</span></a></li>
			</ul>
		</nav>
	</header>

	<section class="container">

		<div class="content">



		</div>

	</section>

	<script>
		//area que será modificada

		let content = document.querySelector(".content")
		//content.innerHTML = "Abacate com açucar"

		function options(){
			content.innerHTML = `
		<ul>

		<li id="produtos">
		<div class="options">

		<svg version="1.0" xmlns="http://www.w3.org/2000/svg"
		width="500.000000pt" height="500.000000pt" viewBox="0 0 500.000000 500.000000"
		preserveAspectRatio="xMidYMid meet">
	   
	   <g transform="translate(0.000000,500.000000) scale(0.100000,-0.100000)"
	   fill="#000000" stroke="none">
	   <path d="M2812 4689 c-242 -40 -465 -201 -580 -418 -64 -120 -92 -231 -99
	   -393 l-6 -138 -316 0 c-296 0 -318 -1 -348 -20 -18 -10 -39 -32 -47 -48 -10
	   -20 -32 -186 -66 -493 -27 -255 -53 -479 -55 -496 l-6 -33 -377 0 c-360 0
	   -378 -1 -410 -20 -18 -11 -40 -36 -47 -54 -14 -33 -305 -2050 -305 -2111 0
	   -40 32 -90 69 -110 27 -13 267 -15 2273 -15 2177 0 2244 1 2274 19 17 10 39
	   35 48 56 18 37 17 46 -34 519 -89 832 -289 2649 -296 2690 -4 24 -19 53 -39
	   75 l-33 36 -331 3 -331 3 0 115 c0 253 -76 442 -246 611 -178 177 -445 263
	   -692 222z m307 -292 c172 -60 312 -218 350 -395 6 -29 11 -100 11 -157 l0
	   -105 -540 0 -540 0 0 93 c1 191 48 317 166 435 78 78 173 131 270 151 76 16
	   203 6 283 -22z m-987 -1065 c2 -111 6 -143 21 -165 39 -59 110 -81 172 -51 65
	   31 75 59 75 217 l0 137 540 0 540 0 0 -127 c0 -102 4 -135 18 -162 49 -97 177
	   -105 232 -16 17 28 20 49 20 169 l0 136 240 0 240 0 5 -22 c7 -37 245 -2232
	   245 -2269 0 -18 -25 -19 -764 -19 l-764 0 -6 27 c-3 16 -49 327 -101 693 -53
	   366 -102 680 -110 698 -8 17 -29 41 -47 52 -32 19 -52 20 -575 20 -298 0 -544
	   3 -546 8 -3 4 15 183 39 397 24 215 44 396 44 403 0 9 55 12 239 12 l239 0 4
	   -138z m372 -979 c5 -27 152 -1039 216 -1493 16 -118 30 -223 30 -232 0 -17
	   -62 -18 -1155 -18 -635 0 -1155 3 -1155 6 0 12 240 1709 246 1737 l6 27 903 0
	   903 0 6 -27z m2023 -1568 c6 -55 12 -117 12 -137 l1 -38 -755 0 -755 0 -5 23
	   c-5 26 -35 233 -35 247 0 7 272 9 763 8 l762 -3 12 -100z"/>
	   <path d="M1011 2272 c-69 -37 -86 -115 -55 -255 41 -189 176 -364 344 -446
	   266 -130 571 -77 771 135 31 32 68 79 84 104 80 127 120 348 76 418 -51 80
	   -174 78 -227 -3 -9 -14 -20 -60 -25 -102 -11 -103 -52 -186 -124 -252 -167
	   -152 -435 -126 -570 57 -40 54 -75 155 -75 216 0 50 -28 99 -72 126 -41 25
	   -83 25 -127 2z"/>
	   </g>
	   </svg>

		<span>Produtos</span>

	</div>
	</li>

	<li id="clientes">
	<div class="options">

		<svg version="1.0" xmlns="http://www.w3.org/2000/svg"
		width="541.000000pt" height="461.000000pt" viewBox="0 0 541.000000 461.000000"
		preserveAspectRatio="xMidYMid meet">
	   
	   <g transform="translate(0.000000,461.000000) scale(0.100000,-0.100000)"
	   fill="#000000" stroke="none">
	   <path d="M1829 4401 c-101 -32 -222 -130 -266 -215 -95 -183 -61 -413 80 -543
	   95 -88 171 -121 294 -130 129 -9 245 31 337 116 102 95 149 203 148 341 -1
	   130 -47 235 -141 323 -117 110 -306 155 -452 108z"/>
	   <path d="M3289 4402 c-111 -37 -215 -126 -274 -234 -14 -26 -33 -83 -41 -126
	   -13 -68 -13 -87 0 -154 26 -137 107 -252 226 -320 174 -101 407 -68 554 78 53
	   53 79 97 106 176 19 57 22 82 18 165 -3 86 -8 107 -38 168 -47 97 -127 176
	   -227 222 -69 32 -89 37 -173 40 -73 2 -108 -1 -151 -15z"/>
	   <path d="M1880 3404 c-64 -8 -170 -47 -170 -62 0 -8 31 -47 68 -86 159 -167
	   227 -419 175 -647 -30 -134 -119 -297 -203 -373 -22 -20 -40 -39 -40 -43 0 -5
	   35 -30 78 -58 42 -27 110 -82 150 -121 39 -39 72 -66 72 -60 0 7 -8 37 -17 67
	   -14 41 -18 88 -17 199 0 138 2 149 32 230 39 103 73 162 132 233 93 111 204
	   185 346 232 45 16 85 33 87 39 9 22 -44 133 -96 201 -81 107 -202 189 -335
	   229 -56 16 -201 27 -262 20z"/>
	   <path d="M3313 3400 c-137 -25 -253 -90 -356 -200 -76 -80 -155 -223 -137
	   -246 6 -6 40 -19 77 -28 233 -59 437 -253 515 -490 38 -116 41 -336 6 -433 -7
	   -18 -10 -35 -7 -38 3 -2 34 23 70 58 35 34 99 85 141 112 43 28 78 53 78 57 0
	   3 -19 26 -42 50 -99 103 -174 251 -203 403 -20 104 -19 150 4 263 30 144 97
	   272 193 370 61 62 59 67 -41 101 -73 25 -218 35 -298 21z"/>
	   <path d="M1115 3303 c-122 -27 -261 -118 -325 -213 -154 -227 -144 -476 27
	   -687 115 -141 360 -223 532 -178 227 59 386 231 425 459 13 69 13 92 1 161
	   -38 216 -191 386 -404 449 -51 15 -206 21 -256 9z"/>
	   <path d="M4085 3303 c-301 -67 -483 -319 -445 -616 38 -303 372 -537 660 -462
	   293 76 487 365 426 636 -61 268 -282 452 -540 448 -44 -1 -90 -3 -101 -6z"/>
	   <path d="M2583 2745 c-95 -21 -178 -70 -263 -155 -116 -117 -160 -220 -160
	   -380 0 -94 13 -158 47 -230 64 -138 209 -259 358 -301 28 -8 95 -14 150 -14
	   89 0 109 4 184 33 123 48 198 108 274 219 176 261 68 642 -223 781 -132 63
	   -234 76 -367 47z"/>
	   <path d="M1150 2114 c-139 -23 -277 -73 -370 -132 -156 -99 -289 -276 -350
	   -467 -21 -63 -23 -95 -27 -320 -5 -289 -7 -283 96 -334 148 -74 346 -110 660
	   -118 195 -5 500 17 527 38 6 5 14 44 18 87 15 186 116 401 260 555 72 78 69
	   71 52 122 -37 108 -125 250 -203 329 -94 94 -237 175 -381 215 -70 19 -232 34
	   -282 25z"/>
	   <path d="M4095 2114 c-239 -35 -451 -159 -580 -339 -43 -61 -102 -169 -115
	   -215 -5 -14 -11 -32 -15 -42 -5 -12 13 -37 61 -89 37 -41 78 -92 93 -114 14
	   -22 28 -42 31 -45 3 -3 21 -36 42 -75 50 -96 84 -207 99 -321 6 -53 17 -97 23
	   -99 6 -2 74 -11 150 -20 251 -27 605 -14 796 31 125 29 251 78 292 113 l40 34
	   -4 256 c-5 245 -6 259 -31 334 -52 151 -120 259 -229 363 -106 102 -214 162
	   -369 205 -66 18 -227 31 -284 23z"/>
	   <path d="M2553 1545 c-236 -49 -452 -205 -566 -411 -88 -158 -107 -255 -107
	   -539 0 -214 0 -216 24 -240 32 -32 84 -57 196 -93 171 -56 298 -71 605 -71
	   308 0 429 14 607 69 125 39 169 61 198 97 21 27 22 33 18 288 -4 251 -5 263
	   -31 338 -35 100 -48 125 -113 218 -155 221 -380 344 -649 354 -74 3 -134 0
	   -182 -10z"/>
	   </g>
	</svg>

		<span>clientes</span>
	</div>
</li>


<li id="entregas">
	<div class="options">
		<svg version="1.0" xmlns="http://www.w3.org/2000/svg"
width="500.000000pt" height="500.000000pt" viewBox="0 0 500.000000 500.000000" fill="#8bcafe"
preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,500.000000) scale(0.100000,-0.100000)"
fill="#000000" stroke="none">
<path d="M1035 4300 c-15 -17 -23 -67 -44 -288 l-26 -267 -462 -3 -462 -2 -21
-27 c-25 -32 -20 -69 12 -95 19 -17 56 -18 469 -18 247 0 449 -2 449 -5 0 -2
-20 -209 -45 -459 -25 -251 -45 -458 -45 -461 0 -3 -61 -5 -136 -5 -167 0
-194 -10 -194 -76 0 -57 20 -64 173 -64 135 0 137 0 137 -22 0 -13 -27 -310
-61 -661 l-62 -637 23 -25 c23 -25 25 -25 201 -25 l177 0 13 -52 c61 -258 276
-428 539 -428 156 0 280 51 390 160 72 70 128 171 150 268 l12 52 588 0 c656
0 590 7 605 -69 27 -133 155 -292 290 -359 146 -72 348 -71 496 3 132 67 257
223 284 356 15 74 -2 68 197 71 227 4 209 -13 237 228 80 684 90 881 53 1034
-68 274 -252 506 -499 630 -153 76 -321 106 -606 106 l-138 0 6 58 c4 31 26
280 50 552 43 481 43 496 26 520 l-18 25 -783 3 c-718 2 -785 1 -802 -14 -25
-23 -23 -76 3 -100 20 -18 49 -19 745 -22 l723 -2 -4 -28 c-3 -15 -37 -403
-76 -862 -39 -459 -78 -918 -87 -1020 l-17 -185 -1272 -3 -1273 -2 0 26 c0 31
29 347 36 392 l5 32 258 0 c237 0 259 1 274 18 17 19 22 68 9 88 -20 30 -55
34 -292 34 l-241 0 6 43 c4 33 85 870 85 884 0 2 180 3 400 3 387 0 401 1 420
20 26 26 26 81 2 103 -17 15 -60 17 -410 17 l-392 0 0 28 c0 33 30 359 36 389
l4 22 419 3 c396 3 420 4 440 22 26 24 28 77 3 99 -17 15 -65 17 -489 17 -459
0 -470 0 -488 -20z m2981 -1293 c2 -7 -3 -107 -13 -223 l-18 -209 -152 -3
c-95 -1 -153 1 -153 7 0 20 30 357 36 399 l5 42 145 0 c110 0 146 -3 150 -13z
m265 -28 c274 -89 480 -304 549 -575 15 -56 21 -112 21 -192 1 -62 -1 -116 -4
-119 -3 -3 -32 7 -63 21 -47 22 -89 58 -218 190 -139 140 -171 168 -233 199
-40 19 -99 41 -130 48 -32 7 -62 16 -67 20 -5 4 -1 97 9 218 l18 211 27 0 c15
0 56 -9 91 -21z m-82 -573 c88 -29 128 -60 291 -226 156 -159 196 -189 295
-220 22 -7 43 -15 47 -19 4 -3 3 -42 -2 -86 -24 -209 -60 -541 -60 -547 0 -5
-60 -8 -134 -8 -148 0 -136 -5 -151 69 -17 85 -96 214 -167 276 -249 215 -626
174 -811 -87 -48 -68 -81 -136 -92 -189 -15 -76 51 -69 -605 -69 l-588 0 -12
53 c-58 251 -282 430 -540 430 -151 0 -280 -54 -391 -163 -71 -70 -126 -168
-149 -267 l-12 -53 -124 0 c-68 0 -124 1 -124 3 0 1 14 139 30 307 17 168 30
310 30 317 0 10 260 13 1321 13 881 0 1327 3 1339 10 11 6 24 18 29 28 5 9 16
105 25 212 9 107 19 206 22 219 l5 23 237 -4 c188 -4 248 -9 291 -22z m-2418
-780 c75 -23 125 -53 179 -106 80 -81 120 -176 120 -290 0 -114 -40 -209 -120
-290 -81 -80 -176 -120 -290 -120 -114 0 -209 40 -290 120 -80 81 -120 176
-120 290 0 183 116 339 294 395 55 18 171 18 227 1z m2280 0 c119 -36 210
-114 262 -223 30 -63 32 -76 32 -173 0 -97 -2 -110 -31 -171 -110 -231 -390
-310 -602 -169 -68 46 -113 99 -150 178 -24 50 -27 69 -27 162 0 97 2 110 31
171 33 69 112 157 166 185 102 53 226 68 319 40z"/>
<path d="M1555 1466 c-95 -45 -145 -126 -145 -236 0 -152 108 -260 259 -260
154 1 261 107 261 260 -1 154 -106 260 -260 260 -48 0 -78 -7 -115 -24z m200
-151 c31 -31 35 -42 35 -85 0 -43 -4 -54 -35 -85 -31 -31 -42 -35 -85 -35 -43
0 -54 4 -85 35 -31 31 -35 42 -35 85 0 43 4 54 35 85 31 31 42 35 85 35 43 0
54 -4 85 -35z"/>
<path d="M3840 1469 c-208 -94 -205 -385 5 -480 54 -25 157 -25 211 0 169 77
212 288 86 425 -68 73 -207 98 -302 55z m176 -135 c32 -21 54 -64 54 -104 0
-69 -51 -120 -120 -120 -48 0 -85 22 -106 61 -42 83 13 179 104 179 23 0 54
-7 68 -16z"/>
<path d="M325 3153 c-34 -9 -55 -35 -55 -68 0 -62 12 -65 247 -65 191 0 211 2
226 18 24 26 21 75 -4 98 -19 17 -40 19 -208 21 -102 1 -195 -1 -206 -4z"/>
</g>
</svg>

	<span>entregas</span>
	</div>
</li>
</ul>
		`
		}

		options();


		function writeProdutos(){

			content.innerHTML = `
			
			<table>
							<thead>
								<tr>
									<th>id_produto</th>
									<th>nome_produto</th>
									<th>url</th>
									<th>tipo_produto</th>
									<th>tamanho</th>
									<th>preço</th>
									<th>genero_roupa</th>
									<th>midia</th>
								</tr>
							</thead>
		<?php
            while($user_data = mysqli_fetch_assoc($result)){
				echo "<tbody>";
					echo "<tr>";
						echo "<td>".$user_data['id_produto']."</td>";
						echo "<td>".$user_data['nome_produto']."</td>";
						echo "<td>".$user_data['url']."</td>";
						echo "<td>".$user_data['tipo_produto']."</td>";
						echo "<td>".$user_data['tamanho']."</td>";
						echo "<td>".$user_data['preco']."</td>";
						echo "<td>".$user_data['genero_roupa']."</td>";
						echo "<td>".$user_data['midia']."</td>";
					echo "</tr>";
					
                }
				?>

			</tbody>
			</table>
			`

		}
		
		function writeClientes(){
			content.innerHTML = `
			<table>
							<thead>
								<tr>
									<th>Id_cliente</th>
									<th>Nome</th>
									<th>CPF</th>
									<th>Endereço</th>
									<th>Número</th>
									<th>Telefone</th>
									<th>Gênero</th>
									<th>Email</th>
									<th>Senha</th>
								</tr>
							</thead>
		<?php
            while($user_cliente = mysqli_fetch_assoc($resultCliente)){
				echo "<tbody>";
					echo "<tr>";
						echo "<td>".$user_cliente['id_cliente']."</td>";
						echo "<td>".$user_cliente['nome']."</td>";
						echo "<td>".$user_cliente['cpf']."</td>";
						echo "<td>".$user_cliente['endereco']."</td>";
						echo "<td>".$user_cliente['numero']."</td>";
						echo "<td>".$user_cliente['telefone']."</td>";
						echo "<td>".$user_cliente['genero']."</td>";
						echo "<td>".$user_cliente['email']."</td>";
						echo "<td>".$user_cliente['senha']."</td>";
					echo "</tr>";
					
                }
				?>

			</tbody>
			</table>
			`
		}
		
		function writeEntregas(){
			content.innerHTML = `
			<table class="espaco">
							<thead>
								<tr>
									<th>Id_entrega</th>
									<th>Nome_destinatário</th>
									<th>CPF_destinatário</th>
									<th>Telefone_Destinatário</th>
									<th>Endereço</th>
									<th>Bairro</th>
									<th>Número</th>
									<th>Complemento</th>
									<th>CEP</th>
									<th>Cidade</th>
									<th>Estado</th>
									<th>Id_pedido</th>
								</tr>
							</thead>
		<?php
            while($user_entrega = mysqli_fetch_assoc($resultEntrega)){
				echo "<tbody>";
					echo "<tr>";
						echo "<td>".$user_entrega['id_entrega']."</td>";
						echo "<td>".$user_entrega['nome_destinatario']."</td>";
						echo "<td>".$user_entrega['cpf_destinatario']."</td>";
						echo "<td>".$user_entrega['telefone_destinatario']."</td>";
						echo "<td>".$user_entrega['endereco']."</td>";
						echo "<td>".$user_entrega['bairro']."</td>";
						echo "<td>".$user_entrega['numero']."</td>";
						echo "<td>".$user_entrega['complemento']."</td>";
						echo "<td>".$user_entrega['cep']."</td>";
						echo "<td>".$user_entrega['cidade']."</td>";
						echo "<td>".$user_entrega['estado']."</td>";
						echo "<td>".$user_entrega['id_pedido']."</td>";
					echo "</tr>";
					
                }
				?>

			</tbody>
			</table>
			`
		}

		//Opções
		let produtosBtn = document.querySelector("#produtos")
		let clientesBtn = document.querySelector("#clientes")
		let entregasBtn = document.querySelector("#entregas")
		let back = document.querySelector("#back-to")

		produtosBtn.addEventListener("click", ()=>{
			console.log("Opção produtos clidada")
			writeProdutos()
			//content.innerHTML = ``
		})

		clientesBtn.addEventListener("click", ()=>{
			console.log("Opção produtos clidada")
			writeClientes()
			//content.innerHTML = ``
		})

		entregasBtn.addEventListener("click", ()=>{
			console.log("Opção produtos clidada")
			writeEntregas()
			//content.innerHTML = ``
		})

		back.addEventListener("click", ()=>{
			options();
		})
	</script>

</body>
</html>