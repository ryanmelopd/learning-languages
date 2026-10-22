<?php

class Conta
{
    public function __construct(
        public string $titular,        // promoção de propriedade (PHP 8)
        private float $saldo = 0
    ) {}

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function depositar(float $valor): void
    {
        if ($valor <= 0) {
            throw new InvalidArgumentException("Valor inválido");
        }
        $this->saldo += $valor;
    }
}

$c = new Conta("Ana");
$c->depositar(100);
echo $c->getSaldo();   // 100