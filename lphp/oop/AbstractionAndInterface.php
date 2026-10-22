<?php

interface Calculavel
{
    public function area(): float;
}

abstract class Forma implements Calculavel
{
    abstract public function descricao(): string;
}

class Quadrado extends Forma
{
    public function __construct(private float $lado) {}

    public function area(): float
    {
        return $this->lado ** 2;
    }

    public function descricao(): string
    {
        return "Quadrado de lado {$this->lado}";
    }
}

$q = new Quadrado(3);
echo $q->descricao() . ": " . $q->area();