async function postData(url = 'https://www.dolarsi.com/api/api.php?type=dolar', data = {}) {

console.log("hola");


var cotizaciones = {};
var llamada = datos =>{
  console.log(datos);
  cotizaciones.dolar=datos;
  var html = "";
  html+="<h3>Dolar</h3>";
  cotizaciones.dolar.map(dolar=>{
    hmtl+="Hola Dolar";
  })


  document.getElementById("respuesta").innerHTML = hmtl;

}
