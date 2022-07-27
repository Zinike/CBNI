const request = async (url) => {
  const response = await fetch('https://api-dolar-argentina.herokuapp.com/api/dolarblue');
  if (!response.ok){
    throw new Error("WARN", response.status);
  } else {
  const data = await response.text();
  return data;
  }
}
