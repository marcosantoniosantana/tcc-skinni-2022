//Ativa a biblioteca okzoom via jQuery

$(document).ready(function(){
	$('.produto').okzoom({
		width: 300,
		height: 400,
		round: true,
		background: "transparent",
		shadow: "0 0 0 transparent",
		radius: 10
	});
	let a = document.getElementById('ok-lorgnette');
	a.classList ="roda";
})

//Parte responsavél por fazer a execução do menu

let sombraMenu = document.querySelector("#sombra-menu");

let menubt = document.querySelector('#menu-bar');
menubt.addEventListener("click", () =>{
	let menuOptions = document.querySelector('.menu');
	menuOptions.classList.toggle('visible');
	
	sombraMenu.classList.toggle("sombra-menu");
	document.querySelector(".cabecalho").classList.toggle("camada");

	let menuIcon = document.querySelector(".fa-solid");

	if (menuIcon.classList.contains('fa-bars')) {
		menuIcon.classList.remove('fa-bars');
		menuIcon.classList.toggle('fa-xmark');
		document.querySelector('#menu-bar').classList.toggle('menu-clicado');
	}else{
		menuIcon.classList.remove('fa-xmark');
		menuIcon.classList.toggle('fa-bars');
		document.querySelector('#menu-bar').classList.remove('menu-clicado');
	}

});

//Fecha o menu caso ele esteja aberto e a página seja rolada

window.addEventListener("scroll", ()=>{
	while(sombraMenu.classList == "sombra-menu"){
		menubt.click();break;
	}
});

//document.querySelector(".menu > ul > li:nth-child(2)").classList.toggle("marcador-pagina");


//Munitora a caixa de pesquisa

let caixaPesquisa = document.querySelector("#pesquisa");
caixaPesquisa.addEventListener("input", ()=>{
	if(caixaPesquisa.value.length > 0){
		document.querySelector(".barra-pesquisa").classList.add("pesquisando");
		document.querySelector(".pesquisar-icon").style.color = "rgb(229 227 43)";
	}else{
		document.querySelector(".barra-pesquisa").classList.remove("pesquisando");
		document.querySelector(".pesquisar-icon").style.color = "#000000";
	}
});

//Parte responsável por acionar o menu com o mouse

let menuItens = document.querySelectorAll(".link-menu > span")