async function traerDatos(){
  const datos = await fetch("https://www.dolarsi.com/api/api.php?type=dolar");
  console.log(datos);
  const llamada = await datos.json();

}

var div = document.getElementById("respuesta");
div.innerHTML = datos;
