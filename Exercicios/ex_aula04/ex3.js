function ligarLampada(){
	var button = document.getElementById("botao");
	var desl = document.getElementById("lampoff");
	
	if(button.getAttribute("value") == "Ligar")
	{
		button.setAttribute("value", "Desligar");
		desl.setAttribute("src", "lamp_on.gif");
	}
	else
	{
		button.setAttribute("value", "Ligar");
		desl.setAttribute("src", "lamp_off.gif");
	}
}

	