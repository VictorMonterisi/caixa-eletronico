<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $valorDoSaque = $_POST["valorParaSaque"];

        function calculaNotas($valorDoSaque) {
    
            $numeroDeNotasDe200 = floor($valorDoSaque / 200);
            $moduloDivisao200 = $valorDoSaque % 200;
    
            $numeroDeNotasDe100 = floor($moduloDivisao200 / 100);
            $moduloDivisao100 = $moduloDivisao200 % 100;
    
            $numeroDeNotasDe50 = floor($moduloDivisao100 / 50);
            $moduloDivisao50 = $moduloDivisao100 % 50;
    
            $numeroDeNotasDe20 = floor($moduloDivisao50 / 20);
            $moduloDivisao20 = $moduloDivisao50 % 20;
    
            $numeroDeNotasDe10 = floor($moduloDivisao20 / 10);
            $moduloDivisao10 = $moduloDivisao20 % 10;
    
            $numeroDeNotasDe5 = floor($moduloDivisao10 / 5);
            $moduloDivisao5 = $moduloDivisao10 % 5;
    
            $numeroDeNotasDe2 = floor($moduloDivisao5 / 2);
            $moduloDivisao2 = $moduloDivisao5 % 2;
    
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
            
            $valorEmMoedas = ceil(($valorDoSaque - floor($valorDoSaque)) * 100);
    
            $quantidadeMoedas50Centavos = floor($valorEmMoedas / 50);
            $moduloDivisao50Centavos = $valorEmMoedas % 50;
    
            $quantidadeMoedas25Centavos = floor($moduloDivisao50Centavos / 25);
            $moduloDivisao25Centavos = $moduloDivisao50Centavos % 25;
    
            $quantidadeMoedas10Centavos = floor($moduloDivisao50Centavos / 10);
            $moduloDivisao10Centavos = $moduloDivisao50Centavos % 10;
    
            $quantidadeMoedas5Centavos = floor($moduloDivisao10Centavos / 5);
            $moduloDivisao5Centavos = $moduloDivisao10Centavos % 5;
    
            $quantidadeMoedas1Centavo = floor($moduloDivisao5Centavos / 1);
            $moduloDivisao1Centavo = $moduloDivisao5Centavos % 1;
    
            echo 'Centavos: ' . $valorEmMoedas . '<br><br>';
    
            echo 'Moedas de 50: ' . $quantidadeMoedas50Centavos . '<br><br>';
            echo 'Moedas de 25: ' . $quantidadeMoedas25Centavos . '<br><br>';
            echo 'Moedas de 10: ' . $quantidadeMoedas10Centavos . '<br><br>';
            echo 'Moedas de 5: ' . $quantidadeMoedas5Centavos . '<br><br>';
            echo 'Moedas de 1: ' . $quantidadeMoedas1Centavo . '<br><br>';
        }
        
        calculaNotas($valorDoSaque);
        calculaMoedas($valorDoSaque);
    }