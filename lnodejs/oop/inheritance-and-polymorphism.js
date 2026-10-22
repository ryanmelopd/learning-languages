class Animal {
  constructor(nome) {
    this.nome = nome;
  }
  falar() {
    return "...";
  }
}

class Cachorro extends Animal {
  falar() {
    return "Au au";
  }
}

class Gato extends Animal {
  constructor(nome, cor) {
    super(nome);                // obrigatório antes de usar this
    this.cor = cor;
  }
  falar() {
    return "Miau";
  }
}

for (const animal of [new Cachorro("Rex"), new Gato("Mimi", "preto")]) {
  console.log(animal.nome, "->", animal.falar());
}