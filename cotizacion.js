const request = async (url='https://api-dolar-argentina.herokuapp.com/api/dolarblue') => {
  const response = await fetch(url);
  if (!response.ok){
    throw new Error("WARN", response.status);}
  const data = await response.text();
  return data;
}
