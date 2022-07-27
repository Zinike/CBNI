const datos = fetch("https://www.dolarsi.com/api/api.php?type=dolar");

var div = document.getElementById("respuesta");
div.innerHTML = datos;
