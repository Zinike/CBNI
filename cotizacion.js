let texto = ' "cotizaciones" {
"oficial": [{
  "value_avg": "134.38",
  "value_sell": "137.38",
  "value_buy": "131.38"
}],
"blue": [{
  "value_avg": 318.00,
  "value_sell": 323.00,
  "value_buy": 313.00
}],
"oficial_euro": [{
  "value_avg": 144.49,
  "value_sell": 147.72,
  "value_buy": 141.27
}],
"blue_euro": {
  "value_avg": 341.94,
  "value_sell": 347.31,
  "value_buy": 336.56
},
"last_update": "2022-07-26T19:55:30.202451-03:00"
}
';

const obj = JSON.parse(texto);
