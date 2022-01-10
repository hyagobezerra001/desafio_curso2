<?php

function adicionarFilme(array &$array, string $nome, int $duracao)
{
    $novoArray = [
        "nome" => $nome,
        "duracao" => $duracao
    ];
    array_push($array, $novoArray);
};

function removerFilme(string $filme, array &$array)
{
    $index = array_search($filme, array_column($array, 'nome'));

    unset($array[$index]);
}

function assistir(array &$array, string $nome)
{
    foreach ($array as $index => $filme) {
        $filme['nome'] === $nome ? $array[$index]['assistido'] = "Sim" : "Não";
    }
}
