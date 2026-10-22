const lista = [1, 2, 3];                // Array
lista.push(4);

const conjunto = new Set([1, 2, 2, 3]); // Set -> {1, 2, 3}

const pessoa = { nome: "Ana", idade: 20 };  // objeto literal (parecido com dict)
console.log(pessoa.nome);

const mapa = new Map();                 // Map de verdade
mapa.set("a", 1);

const dobrados = lista.map((n) => n * 2);   // igual ao map da Stream API
const pares = lista.filter((n) => n % 2 === 0);