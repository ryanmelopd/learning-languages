# Java → Python / Node.js / PHP

Tabelas de equivalência para quem vem de Java.

---

## Java → Python

Executar: `python3 arquivo.py`

| Java | Python |
|---|---|
| `String nome = "Ana";` | `nome = "Ana"` (sem tipo) |
| `+` (concatenar) | `+` ou f-string: `f"Olá {nome}"` |
| `obj.metodo()` | `obj.metodo()` |
| `Classe.metodo()` | `Classe.metodo()` |
| `new Classe()` | `Classe()` (sem `new`) |
| `this.x` | `self.x` |
| construtor `Classe(...)` | `def __init__(self, ...):` |
| `super(...)` | `super().__init__(...)` |
| `class B extends A` | `class B(A):` |
| `interface` / `abstract class` | `ABC` + `@abstractmethod` |
| `private` | `_campo` (só convenção) |
| getter / setter | `@property` |
| `static` | `@staticmethod` / `@classmethod` |
| `toString()` | `__str__(self)` |
| `instanceof` | `isinstance(obj, Classe)` |
| `for (X x : lista)` | `for x in lista:` |
| `for (int i = 0; i < n; i++)` | `for i in range(n):` |
| `List` | `list` → `[1, 2, 3]` |
| `Map` | `dict` → `{"a": 1}` |
| `Set` | `set` → `{1, 2, 3}` |
| `list.size()` | `len(lista)` |
| `list.add(x)` | `lista.append(x)` |
| `map.get("a")` | `mapa["a"]` ou `mapa.get("a")` |
| `x -> x * 2` | `lambda x: x * 2` |
| `stream().map(...)` | `[x * 2 for x in lista]` (list comprehension) |
| `stream().filter(...)` | `[x for x in lista if x > 2]` |
| `import java.util.List;` | `import modulo` / `from modulo import nome` |
| `package` | pasta com módulos (`__init__.py` opcional) |
| `equals()` / `==` | `==` (valor) e `is` (mesmo objeto) |
| `null` | `None` |
| `true` / `false` | `True` / `False` |
| `&&` `\|\|` `!` | `and` `or` `not` |
| `cond ? a : b` | `a if cond else b` |
| `System.out.println(x)` | `print(x)` |
| `try / catch / finally` | `try / except / finally` |
| `throw new Exception("x")` | `raise Exception("x")` |
| `switch` | `match / case` (Python 3.10+) |
| `{ }` para blocos | `:` + **indentação** |

---

## Java → Node.js (JavaScript)

Executar: `node arquivo.js`

| Java | Node.js |
|---|---|
| `String nome = "Ana";` | `const nome = "Ana";` / `let nome = "Ana";` |
| `final` | `const` |
| `+` (concatenar) | `+` ou template string: `` `Olá ${nome}` `` |
| `obj.metodo()` | `obj.metodo()` |
| `Classe.metodo()` | `Classe.metodo()` |
| `new Classe()` | `new Classe()` |
| `this.x` | `this.x` |
| construtor | `constructor(...) { }` |
| `super(...)` | `super(...)` (antes de usar `this`) |
| `class B extends A` | `class B extends A` |
| `interface` / `abstract` | não existe (duck typing ou simulação) |
| `private` | `#campo` |
| getter / setter | `get x() { }` / `set x(v) { }` |
| `static` | `static` |
| `toString()` | `toString()` |
| `instanceof` | `instanceof` |
| `for (X x : lista)` | `for (const x of lista)` |
| `for (int i = 0; ...)` | `for (let i = 0; i < n; i++)` |
| `List` | `Array` → `[1, 2, 3]` |
| `Map` | `Map` ou objeto `{ a: 1 }` |
| `Set` | `Set` |
| `list.size()` | `lista.length` (Map/Set: `.size`) |
| `list.add(x)` | `lista.push(x)` |
| `map.put(k, v)` / `map.get(k)` | `mapa.set(k, v)` / `mapa.get(k)` |
| `x -> x * 2` | `x => x * 2` (arrow function) |
| `stream().map(...)` | `lista.map(x => x * 2)` |
| `stream().filter(...)` | `lista.filter(x => x > 2)` |
| `stream().reduce(...)` | `lista.reduce((acc, x) => acc + x, 0)` |
| `import` | `require("./arquivo")` ou `import ... from` |
| exportar classe | `module.exports = { ... }` ou `export` |
| `package` | pasta + `package.json` |
| `equals()` / `==` | `===` (**sempre** use três iguais) |
| `null` | `null` (e também `undefined`) |
| `&&` `\|\|` `!` | `&&` `\|\|` `!` |
| `cond ? a : b` | `cond ? a : b` |
| `System.out.println(x)` | `console.log(x)` |
| `try / catch / finally` | `try / catch / finally` |
| `throw new Exception("x")` | `throw new Error("x")` |
| `CompletableFuture` | `Promise` + `async` / `await` |
| Maven (`pom.xml`) | npm (`package.json`) |

---

## Java → PHP

Executar: `php arquivo.php` (o arquivo começa com `<?php`)

| Java | PHP |
|---|---|
| `String nome` | `$nome` |
| `+` (concatenar) | `.` |
| `obj.metodo()` | `$obj->metodo()` |
| `Classe.metodo()` | `Classe::metodo()` |
| `new Classe()` | `new Classe()` |
| `this.x` | `$this->x` |
| construtor | `__construct(...)` |
| `super(...)` | `parent::__construct(...)` |
| `class B extends A` | `class B extends A` |
| `interface` / `abstract` | `interface` / `abstract` (igual ao Java) |
| `private` | `private` |
| getter / setter | métodos `getX()` / `setX()` |
| `static` | `static` (acesso com `::`) |
| `toString()` | `__toString()` |
| `instanceof` | `instanceof` |
| `for (X x : lista)` | `foreach ($lista as $x)` |
| `for (X k : map)` com chave | `foreach ($mapa as $k => $v)` |
| `List` / `Map` | `array` |
| `Set` | `array` (use `array_unique`) |
| `list.size()` | `count($lista)` |
| `list.add(x)` | `$lista[] = $x;` |
| `map.get("a")` | `$mapa["a"]` |
| `x -> x * 2` | `fn($x) => $x * 2` |
| `stream().map(...)` | `array_map(fn($x) => $x * 2, $lista)` |
| `stream().filter(...)` | `array_filter($lista, fn($x) => $x > 2)` |
| `package` / `import` | `namespace` / `use` |
| `equals()` / `==` | `===` |
| `null` | `null` |
| `true` / `false` | `true` / `false` |
| `&&` `\|\|` `!` | `&&` `\|\|` `!` (também `and` `or`) |
| `cond ? a : b` | `cond ? a : b` |
| `System.out.println(x)` | `echo $x;` |
| `try / catch / finally` | `try / catch / finally` |
| `throw new Exception("x")` | `throw new Exception("x");` |
| `switch` | `switch` ou `match` (PHP 8) |
| `final` | `final` (classe/método) / `const` |
| Maven (`pom.xml`) | Composer (`composer.json`) |

---

## Comparativo rápido dos quatro

| Conceito | Java | Python | Node.js | PHP |
|---|---|---|---|---|
| Declarar variável | `String x` | `x = ...` | `const x` / `let x` | `$x` |
| Referência ao objeto | `this` | `self` | `this` | `$this` |
| Acessar método | `.` | `.` | `.` | `->` |
| Método estático | `.` | `.` | `.` | `::` |
| Construtor | `Classe()` | `__init__` | `constructor` | `__construct` |
| Chamar a mãe | `super(...)` | `super().__init__(...)` | `super(...)` | `parent::__construct(...)` |
| Percorrer lista | `for (X x : l)` | `for x in l:` | `for (const x of l)` | `foreach ($l as $x)` |
| Tamanho | `l.size()` | `len(l)` | `l.length` | `count($l)` |
| Lambda | `x -> x * 2` | `lambda x: x * 2` | `x => x * 2` | `fn($x) => $x * 2` |
| Igualdade | `equals()` | `==` | `===` | `===` |
| Nulo | `null` | `None` | `null` | `null` |
| Imprimir | `System.out.println` | `print` | `console.log` | `echo` |
| Dependências | Maven | pip | npm | Composer |