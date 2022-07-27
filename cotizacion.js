const request = fetch('https://api-dolar-argentina.herokuapp.com/api/dolarblue')
request.then(function(response) {
  return response();
})
