<?php
    $valorDoSaque = $_POST['valor-informado'];

    function calculaNotas($valorDoSaque) {

        $nota200 = 200; 
        $nota100 = 100;
        $nota50 = 50;
        $nota20 = 20;
        $nota10 = 10;
        $nota5 = 5;
        $nota2 = 2;
        $moeda1 = 1;

        $numeroDeNotasDe200 = floor($valorDoSaque / $nota200);
        $moduloDivisao200 = $valorDoSaque % $nota200;

        $numeroDeNotasDe100 = floor($moduloDivisao200 / $nota100);
        $moduloDivisao100 = $moduloDivisao200 % $nota100;

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

        echo 'Valor do saque: ' . $valorDoSaque . '<br><br>';
        echo 'Nota de 200: ' . $numeroDeNotasDe200 . '<br><br>';
        echo 'Nota de 100: ' . $numeroDeNotasDe100 . '<br><br>';
        echo 'Nota de 50: ' . $numeroDeNotasDe50 . '<br><br>';
        echo 'Nota de 20: ' . $numeroDeNotasDe20 . '<br><br>';
        echo 'Nota de 10: ' . $numeroDeNotasDe10 . '<br><br>';
        echo 'Nota de 5: ' . $numeroDeNotasDe5 . '<br><br>';
        echo 'Nota de 2: ' . $numeroDeNotasDe2 . '<br><br>';
    }

    function calculaMoedas($valorDoSaque) {
        $moeda50centavos = 50;
        $moeda25centavos = 25;
        $moeda10centavos = 10;
        $moeda5centavos = 5;
        $moeda1centavo = 1;
        
        $valorEmMoedas = ceil(($valorDoSaque - floor($valorDoSaque)) * 100);

        $quantidadeMoedas50Centavos = floor($valorEmMoedas / $moeda50centavos);
        $moduloDivisao50Centavos = $valorEmMoedas % $moeda50centavos;

        $quantidadeMoedas25Centavos = floor($moduloDivisao50Centavos / $moeda25centavos);
        $moduloDivisao25Centavos = $moduloDivisao50Centavos % $moeda25centavos;

        $quantidadeMoedas10Centavos = floor($moduloDivisao50Centavos / $moeda10centavos);
        $moduloDivisao10Centavos = $moduloDivisao50Centavos % $moeda10centavos;

        $quantidadeMoedas5Centavos = floor($moduloDivisao10Centavos / $moeda5centavos);
        $moduloDivisao5Centavos = $moduloDivisao10Centavos % $moeda5centavos;

        $quantidadeMoedas1Centavo = floor($moduloDivisao5Centavos / $moeda1centavo);
        $moduloDivisao1Centavo = $moduloDivisao5Centavos % $moeda1centavo;

        echo 'Centavos: ' . $valorEmMoedas . '<br><br>';

        echo 'Moedas de 50: ' . $quantidadeMoedas50Centavos . '<br><br>';
        echo 'Moedas de 25: ' . $quantidadeMoedas25Centavos . '<br><br>';
        echo 'Moedas de 10: ' . $quantidadeMoedas10Centavos . '<br><br>';
        echo 'Moedas de 5: ' . $quantidadeMoedas5Centavos . '<br><br>';
        echo 'Moedas de 1: ' . $quantidadeMoedas1Centavo . '<br><br>';
    }
    calculaNotas($valorDoSaque);
    calculaMoedas($valorDoSaque);