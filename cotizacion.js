async function datos() {
  await fetch("https://www.dolarsi.com/api/api.php?type=dolar");
}
console.log(datos.dolar);
document.getElementById("respuesta").innerHTML = datos;
