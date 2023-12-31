<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="icon" type="image/x-icon" href="assets/img/dinheiro.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<?php
    require "assets/php/Classes/Cliente.php";
    require "assets/php/Classes/Operacoes.php";
    require "assets/php/Classes/Relogio.php";

    $pega_dados = new Operacoes();
    $tempo = new Relogio();
    $saudacao = "{$tempo->descobre_fuso()}, {$pega_dados->encontra_cliente()}!";
    $dados_monetarios = $pega_dados->atualiza_saldo();
?>
