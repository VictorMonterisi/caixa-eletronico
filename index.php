<?php
    $valorDeSaque = 1500;

    function calcula100($valorDeSaque) {

        $nota100 = 100;
        $nota50 = 50;
        $nota20 = 20;
        $nota10 = 10;
        $nota5 = 5;
        $nota2 = 2;

        $numeroDeNotasDe100 = floor($valorDeSaque / $nota100);
        $moduloDivisao100 = $valorDeSaque % $nota100;

        $numeroDeNotasDe50 = floor($moduloDivisao100 / $nota50);
        $moduloDivisao50 = $moduloDivisao100 % $nota50;

        $numeroDeNotasDe20 = floor($moduloDivisao50 / $nota20);
        $moduloDivisao20 = $moduloDivisao50 % $nota20;

        $numeroDeNotasDe10 = floor($moduloDivisao20 / $nota10);
        $moduloDivisao10 = $moduloDivisao20 % $nota10;

        $numeroDeNotasDe5 = floor($moduloDivisao10 / $nota5);
        $moduloDivisao5 = $moduloDivisao10 % $nota5;

        $numeroDeNotasDe2 = floor($moduloDivisao5 / $nota2);
        $moduloDivisao2 = $moduloDivisao5 % $nota2;

        echo 'Valor do saque: ' . $valorDeSaque . '<br><br>';
        echo 'Nota de 100: ' . $numeroDeNotasDe100 . '<br><br>';
        echo 'Nota de 50: ' . $numeroDeNotasDe50 . '<br><br>';
        echo 'Nota de 20: ' . $numeroDeNotasDe20 . '<br><br>';
        echo 'Nota de 10: ' . $numeroDeNotasDe10 . '<br><br>';
        echo 'Nota de 5: ' . $numeroDeNotasDe5 . '<br><br>';
        echo 'Nota de 2: ' . $numeroDeNotasDe2 . '<br><br>';
    }
    calcula100($valorDeSaque);