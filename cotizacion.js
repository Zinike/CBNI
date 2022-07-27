async function traerDatos(){
  const datos = await fetch("https://www.dolarsi.com/api/api.php?type=dolar");
  console.log(datos);
  const llamada = await dato.json();

}

load(traerDatos);
