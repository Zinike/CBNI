async function obtencionDatos() {
  const datos = await fetch("https://api-dolar-argentina.herokuapp.com/api/dolarblue");
  .then(respuesta=> {
    console.log(respuesta);
  })
}


//document.getElementById("respuesta").innerHTML = obtencionDatos;
