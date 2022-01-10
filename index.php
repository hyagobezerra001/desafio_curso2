<?php

require_once 'funcoes.php';
$filmes = [];

adicionarFilme($filmes, "Homen de Ferro", 120);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista De Filmes</title>
</head>

<body style="display: flex; flex-direction: column; align-items: center;">
    <h1 style="text-decoration: underline;">Lista de Filmes</h1>
    <div>
        <?php foreach ($filmes as $index => $filme) { ?>
            <div style="border: 1px solid black; width: 300px;margin-bottom:20px; border-radius: 5px;padding: 10px;">
                <h2><?= $filme['nome'] ?></h2>
                <span>Duração: <?= $filme['duracao'] ?> Minutos</span>
                <span style="color: red;display:block;">Assistido: <?= $filme['assistido'] ?? "Não" ?></span>
            </div>
        <?php } ?>
    </div>
</body>

</html>