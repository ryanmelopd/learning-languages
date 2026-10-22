<?php

class Animal
{
    public function __construct(protected string $nome) {}

    public function falar(): string
    {
        return "...";
    }   

    public function getNome(): string
    {
        return $this->nome;
    }
}

class Cachorro extends Animal
{
    public function falar(): string
    {
        return "Au au";
    }
}

class Gato extends Animal
{
    public function __construct(string $nome, private string $cor)
    {
        parent::__construct($nome);   // chama o construtor da mãe
    }

    public function falar(): string
    {
        return "Miau";
    }
}

foreach ([new Cachorro("Rex"), new Gato("Mimi", "preto")] as $animal) {
    echo $animal->getNome() . " -> " . $animal->falar() . "\n";
}