class Forma {
  constructor() {
    if (new.target === Forma) {
      throw new Error("Forma é abstrata");
    }
  }
  area() {
    throw new Error("Implemente area()");
  }
}

class Quadrado extends Forma {
  constructor(lado) {
    super();
    this.lado = lado;
  }
  area() {
    return this.lado ** 2;
  }
}

console.log(new Quadrado(3).area());   // 9