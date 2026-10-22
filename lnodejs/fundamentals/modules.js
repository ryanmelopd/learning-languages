// util.js
function saudacao(nome) {
  return `Olá, ${nome}!`;
}
module.exports = { saudacao };

// main.js
const { saudacao } = require("./util");
console.log(saudacao("Ana"));