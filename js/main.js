let clothesTitle = document.querySelectorAll("#titulo-item")

let limite = 28

for (let analise of clothesTitle) {
	const verifica = analise.innerText.length > limite;
	const pontos = verifica ? "..." : "";
	analise.innerText = analise.innerText.substring(0, limite) + pontos;

	analise.classList.add("altura")

}

//Parte responsável por acionar o menu com o mouse

//let menuItens = document.querySelectorAll(".link-menu > span")
let menuItens = document.querySelectorAll(".opMenu")


/*
menuItens.forEach(rc => {
	let subMenu = document.querySelector(".subMenu-inferior")

	rc.addEventListener("mouseenter", ()=>{
		//console.log("Passou sobre o menu")
		subMenu.style.display = "block"
	})

	rc.addEventListener("mouseout", ()=>{
		subMenu.addEventListener("mouseenter", ()=>{
			subMenu.style.backgroundColor="#ff0043"
		})
	})

});
*/

let intensVitrine = document.querySelectorAll(".itens");
//Parte responsavél por fazer a execução do menu

let sombraMenu = document.querySelector("#sombra-menu");

let menubt = document.querySelector('#menu-bar');
menubt.addEventListener("click", () => {
	let menuOptions = document.querySelector('.menu');
	menuOptions.classList.toggle('visible');

	sombraMenu.classList.toggle("sombra-menu");
	document.querySelector(".cabecalho").classList.toggle("camada");

	let menuIcon = document.querySelector(".fa-solid");

	if (menuIcon.classList.contains('fa-bars')) {
		menuIcon.classList.remove('fa-bars');
		menuIcon.classList.toggle('fa-xmark');
		document.querySelector('#menu-bar').classList.toggle('menu-clicado');
	} else {
		menuIcon.classList.remove('fa-xmark');
		menuIcon.classList.toggle('fa-bars');
		document.querySelector('#menu-bar').classList.remove('menu-clicado');
	}

});

//Fecha o menu caso ele esteja aberto e a página seja rolada

window.addEventListener("scroll", () => {
	while (sombraMenu.classList == "sombra-menu") {
		menubt.click(); break;
	}
});

document.querySelector(".menu > ul > li:nth-child(2)").classList.toggle("marcador-pagina");

//Parte que adiciona a biblioteca de aparecimento gradual com animação

let linkConta = document.querySelector('.menu > ul > li:nth-child(1)').addEventListener("click", () => {
	let subMenuOptions = document.querySelector('.submenu');
	subMenuOptions.classList.toggle('menu-option-visible');
});

document.querySelectorAll(".vitrine > a").forEach((iten) => {
	iten.setAttribute('data-aos', 'fade-up');
	iten.setAttribute('data-aos-duration', '2000');
});

document.querySelectorAll("#banner-secundario").forEach(bn => {
	bn.setAttribute("data-aos", "fade-right")
	bn.setAttribute("animation-duration", "2000")
})

document.querySelectorAll(".mostruario > h1").forEach(titulo =>{
	titulo.setAttribute("data-aos", "fade-down")
	titulo.setAttribute("animation-duration", "1500")
})

document.querySelectorAll(".area-small-banners > img:nth-child(1)").forEach(obj =>{
	obj.setAttribute("data-aos", "fade-up")
	obj.setAttribute("animation-duration", "2000")
})

document.querySelectorAll(".area-small-banners > img:nth-child(2)").forEach(obj =>{
	obj.setAttribute("data-aos", "fade-down")
	obj.setAttribute("animation-duration", "2000")
})

//Munitora a caixa de pesquisa

let caixaPesquisa = document.querySelector("#pesquisa");
caixaPesquisa.addEventListener("input", () => {
	if (caixaPesquisa.value.length > 0) {
		document.querySelector(".barra-pesquisa").classList.add("pesquisando");
		document.querySelector(".pesquisar-icon").style.color = "rgb(229 227 43)";
	} else {
		document.querySelector(".barra-pesquisa").classList.remove("pesquisando");
		document.querySelector(".pesquisar-icon").style.color = "#000000";
	}
});

//Rolagem para as laterais

let vitrine = document.querySelector('.vitrine');

let rolarDireita = document.querySelector(".proximo").addEventListener("click", () => {
	vitrine.scrollBy(350, 0);
});

let rolarEsquerda = document.querySelector('.anterior').addEventListener("click", () => {
	vitrine.scrollBy(-350, 0);
});

//TESTANDO NOVA ROLAGEM PARA AS LATERAIS:

let pEsquerda = document.querySelector(".p-esquerda");

let pDireita = document.querySelector(".p-direita");

let nVitrine = document.querySelector("#n-vitrine");

pDireita.addEventListener("click", () => {
	nVitrine.scrollBy(350, 0);
})

pEsquerda.addEventListener("click", () => {
	nVitrine.scrollBy(-350, 0);
})

//Tentativa de padronização dos controles da vitrine
//Corrigir isso assim que possível

let btnNext = document.querySelectorAll("#next")
let btnBack = document.querySelectorAll("#back")

btnNext.forEach(next => {
	next.addEventListener("click", () => {
		document.querySelectorAll("#vitrine3").forEach(vtr => {
			vtr.scrollBy(350, 0)
		})
	})

})

btnBack.forEach(back => {
	back.addEventListener("click", () => {
		document.querySelectorAll("#vitrine3").forEach(vtr => {
			vtr.scrollBy(-350, 0)
		})
	})

})

let btnNext2 = document.querySelectorAll("#fNext")
let btnBack2 = document.querySelectorAll("#fBack")

btnNext2.forEach(next => {
	next.addEventListener("click", () => {
		document.querySelectorAll("#vitrine4").forEach(vtr => {
			vtr.scrollBy(350, 0)
		})
	})

})

btnBack2.forEach(back => {
	back.addEventListener("click", () => {
		document.querySelectorAll("#vitrine4").forEach(vtr => {
			vtr.scrollBy(-350, 0)
		})
	})

})

let nextIcon = document.querySelector(".seta-next")
nextIcon.addEventListener("click", (btn)=>{
	document.querySelector(".submenu-inferior-mini").scrollBy( 260, 0)
})

let backToIcon = document.querySelector(".seta-back")
backToIcon.addEventListener("click", (btn)=>{
	document.querySelector(".submenu-inferior-mini").scrollBy( -255, 0)
})

//IMPORTANTE!!!!!! => https://michalsnik.github.io/aos/