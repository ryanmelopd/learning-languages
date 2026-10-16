<?php

function cadastrarProduto(float $preco): void {
    if ($preco < 0) {
        throw new Exception("O preço não pode ser negativo.");
    }
    echo "Produto cadastrado com sucesso!";
}

try {
    cadastrarProduto(-10);
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
