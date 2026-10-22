lista = [1, 2, 3]                       # list (como ArrayList)
lista.append(4)

conjunto = {1, 2, 2, 3}                 # set: sem repetidos -> {1, 2, 3}

pessoa = {"nome": "Ana", "idade": 20}   # dict (como Map)
print(pessoa["nome"])

dobrados = [n * 2 for n in lista]       # list comprehension (parecido com Stream.map)