function somar(a, b = 0) {
  return a + b;
}

const multiplicar = (a, b) => a * b;   // arrow function (parecida com lambda do Java)

console.log(somar(2, 3), multiplicar(2, 3));