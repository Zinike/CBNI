function cotizacionHoy () {
  var res = UrlFetchApp.fetch("https://www.dolarsi.com/api/api.php?type=dolar");
  var contenido = res.getContentText();

  var json = JSON.parse(contenido);
  var casa = json["casa"];



  Logger.log(casa);
}
