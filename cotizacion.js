async function obtencionDatos() {
  const datos = await fetch("https://api-dolar-argentina.herokuapp.com/api/dolarblue");
}

document.getElementById("respuesta").innerHTML = obtencionDatos[0].compra;
