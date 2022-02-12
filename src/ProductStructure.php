<?php
namespace App;

class ProductStructure
{
    private array $products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        //todo your code.
        $result = [];

        foreach ($this->products as $product) {
            [$color, $size] = explode('-', $product);

            if (!isset($result[$color][$size])) {
                $result[$color][$size] = 0;
            }

            $result[$color][$size]++;
        }

        return $result;
    }
}