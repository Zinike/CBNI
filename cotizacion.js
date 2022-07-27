async function datos() {
  await fetch("https://api-dolar-argentina.herokuapp.com/api/dolarblue");
}
console.log(datos.dolar);
document.getElementById("respuesta").innerHTML = datos;
