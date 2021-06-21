function mudarTexto(){
	document.getElementById("paragrafo1").innerHTML = "Aula 4 de Programação para Web";
	document.getElementById("paragrafo6").innerHTML = "JavaScript não é Java";
}

function mudarFonte(){
	var x = document.getElementById("paragrafo2");
	x.style.fontSize = "40px";
}

function mudarCor(){
	var y = document.getElementById("paragrafo3");
	var z = document.getElementById("paragrafo6");
	y.style.color = "blue";
	z.style.color = "red";
	z.style.fontWeight = "bold";
}

function mudarCorFundoParagrafos(){

   var p = document.getElementsByTagName("p");
   var i;
   for(i=0; i<=6; i=i+2){
	p[i].style.backgroundColor += "yellow";
   }
}