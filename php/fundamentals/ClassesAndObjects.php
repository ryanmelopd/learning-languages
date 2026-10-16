<?php

class Pessoa {
    public function __construct(
        private string $nome,
        private int $idade
    ) {}

    public function getNome(): string {
        return $this->nome;
    }
}

$pessoa1 = new Pessoa("Ana", 20);
echo $pessoa1->getNome();

// herança e interface
// class Aluno extends Pessoa implements Avaliavel { 
// ... }
//
// interface Avaliavel { 
// public function calcularNota(): float; }
//
// abstract class Forma { 
// ... }