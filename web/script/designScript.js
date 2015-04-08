function getCitationAleatoire()
{
	var xhr = new XMLHttpRequest();
	 
	xhr.open('GET',pathToQuote, false);
	xhr.send(null);
	 
	if (xhr.readyState == 4 && xhr.status == 200) 
	{ // Si le fichier est chargé sans erreur
		return xhr.responseText;
	}
	
	return -1;
}

	
function changeQuote()
{
	var citation
	var header = document.getElementById('citation');
	if((citation = getCitationAleatoire()) != -1)
	{
		header.innerHTML = citation ;
	}
}

window.onload = function()
{
	redimensionnerCorps();
	changeQuote();
	C_TIME_REFRESH_QUOTE = 1000*5;
	C_TIME_REFRESH_DISPLAY = 10*1000;
	setInterval(changeQuote,C_TIME_REFRESH_QUOTE);
	//setInterval(redimensionnerCorps,C_TIME_REFRESH_DISPLAY);
	
	for(i in noticeAlert)
	{
		alert(noticeAlert[i]);
	}
	window.onResize = redimensionnerCorps();
};

function redimensionnerCorps()
{
	var blocCorps = document.getElementById('bloc-corps');

	var menu = document.getElementById('menu_lateral');
	var taille = blocCorps.offsetWidth  - menu.offsetWidth ;
	document.getElementById('corps').style.width = taille + "px";
	

}