async function obtencionDatos() {
  const datos = await fetch("https://api-dolar-argentina.herokuapp.com/api/dolarblue");
}
console.log(obtencionDatos);
document.getElementById("respuesta").innerHTML = obtencionDatos;
