try:
    resultado = 10 / 0
except ZeroDivisionError as e:
    print("Erro:", e)
finally:
    print("Sempre executa")