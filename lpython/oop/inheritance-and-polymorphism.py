class Animal:
    def __init__(self, nome):
        self.nome = nome

    def falar(self):
        return "..."

class Cachorro(Animal):                 # herda de Animal
    def falar(self):                    # sobrescreve
        return "Au au"

class Gato(Animal):
    def __init__(self, nome, cor):
        super().__init__(nome)          # chama o construtor da mãe
        self.cor = cor

    def falar(self):
        return "Miau"

for animal in [Cachorro("Rex"), Gato("Mimi", "preto")]:
    print(animal.nome, "->", animal.falar())   # polimorfismo