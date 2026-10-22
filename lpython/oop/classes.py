class Conta:
    def __init__(self, titular, saldo=0):   # construtor
        self.titular = titular              # self = this
        self._saldo = saldo                 # _ = "privado" por convenção

    @property
    def saldo(self):                        # getter
        return self._saldo

    def depositar(self, valor):
        if valor <= 0:
            raise ValueError("Valor inválido")
        self._saldo += valor

c = Conta("Ana")
c.depositar(100)
print(c.saldo)   # 100