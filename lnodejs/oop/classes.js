class Conta {
  #saldo;                       // # = privado DE VERDADE

  constructor(titular, saldo = 0) {
    this.titular = titular;
    this.#saldo = saldo;
  }

  get saldo() {                 // getter
    return this.#saldo;
  }

  depositar(valor) {
    if (valor <= 0) throw new Error("Valor inválido");
    this.#saldo += valor;
  }
}

const c = new Conta("Ana");
c.depositar(100);
console.log(c.saldo);   // 100
// console.log(c.#saldo) -> erro de sintaxe