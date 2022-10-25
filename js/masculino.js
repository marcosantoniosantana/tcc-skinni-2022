//Código responsavél por inserir titulo com limitação e corte nas tags marcadas com o id titulo-item
/*
let listaTitulo = [
    "Chihiro Tradicional",
    "Elemento X Tradicional",
    "Kamado Brothers",
    "Kaonashi",
    "Kiuubi",
    "Mariochu",
    "The Starry Cat Tradicional Black",
    "The Starry Cat Tradicional",
    "Yu-Gi-Oh Exomedia",
    "E Lá Vamos Nós",
    "Espirito De Dragão",
    "Kimetsu Masks",
    "Moonligth",
    "Science Time",
    "Titans",
    "Yin Yan Dragons"
];

console.log(listaTitulo.length);

const tituloProduto = document.querySelectorAll("#titulo-item");
console.log(tituloProduto.length)

for (var i = 0; i < tituloProduto.length; i++) {
    //document.write(tituloProduto[i].innerHTML = listaTitulo)
    tituloProduto[i].innerHTML = listaTitulo[i+0];

    let limite = 20;

    for (let analise of tituloProduto){
        const verifica = analise.innerText.length > limite;
        const pontos = verifica ? "..." : "";
        analise.innerText = analise.innerText.substring(0, limite) + pontos;
    }

    if (tituloProduto[i].innerText.length < limite) {
        tituloProduto[i].classList.toggle("altura");
    }
}
*/

let clothesTitle = document.querySelectorAll("#titulo-item")

let limite = 20

for (let analise of clothesTitle){
	const verifica = analise.innerText.length > limite;
	const pontos = verifica ? "..." : "";
	analise.innerText = analise.innerText.substring(0, limite) + pontos;
    
    /*
    if(analise.innerText.length < limite){
        analise.classList.add("altura")
    } else if (analise.innerText.length > limite){
        analise.classlist.toggle("altura")
    }
    */

    analise.classList.add("altura")

}

let menuItens = document.querySelectorAll(".link-menu > span")

/*
menuItens.forEach(rc => {
	rc.addEventListener("mouseenter", ()=>{
		//console.log("Passou sobre o menu")
		document.querySelector(".subMenu-inferior").style.display = 'block'
	})
	
	rc.addEventListener("mouseout", ()=>{
		//console.log("Saiu do menu")
		document.querySelector(".subMenu-inferior").style.display = 'none'
	})
});
*/

    let intensVitrine = document.querySelectorAll(".itens");
//Parte responsavél por fazer a execução do menu

let menubt = document.querySelector('#menu-bar').addEventListener("click", () =>{
let menuOptions = document.querySelector('.menu');
menuOptions.classList.toggle('visible');

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

//Parte que adiciona a biblioteca de aparecimento gradual com animação

let linkConta = document.querySelector('.menu > ul > li:nth-child(1)').addEventListener("click", ()=>{
let subMenuOptions = document.querySelector('.submenu');
    subMenuOptions.classList.toggle('menu-option-visible');
});

document.querySelectorAll(".vitrine > .itens").forEach((iten) =>{
iten.setAttribute('data-aos', 'fade-up');
iten.setAttribute('data-aos-duration', '2000');
});

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

//IMPORTANTE!!!!!! => https://michalsnik.github.io/aos/