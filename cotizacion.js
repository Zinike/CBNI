const datos = fetch("https://www.dolarsi.com/api/api.php?type=dolar");

document.getElementById("respuesta").innerHTML = datos;
