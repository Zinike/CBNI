const requestURL = "https://api.bluelytics.com.ar/v2/latest"

const request = new XMLHttpRequest();
request.open('GET', requestURL);

request.responseType = 'json';
request.send();

request.onload = function() {
  const superHeroes = request.response;
  populateHeader(superHeroes);
  showHeroes(superHeroes);
}
