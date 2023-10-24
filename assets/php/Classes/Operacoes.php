<?php
    class Operacoes {
        private function ver_saldo() {
            $saldo = 2063.33;
            return $saldo;
        }
        private function pega_valor_saque() {
            $valor_saque = filter_input(INPUT_POST, 'valor_saque', FILTER_VALIDATE_FLOAT);
            if ($valor_saque === false || $valor_saque === null) {
                // Lidar com erro de entrada inválida, por exemplo, redirecionar de volta ao formulário com uma mensagem de erro
                die('Valor de saque inválido.');
            } else {
                return $valor_saque;
            }
        }
        private function calcula_notas_moedas() {
            $valor = $this->pega_valor_saque();

            $notas = [200, 100, 50, 10, 5, 2];
            $moedas = [1, 0.5, 0.25, 0.1, 0.05, 0.01];

            $resultado = [];

            foreach ($notas as $nota) {
                if($valor >= $nota) {
                    $quantidade = floor($valor / $nota);
                    $resultado["Nota(s) de R$ {$nota}"] = $quantidade;
                    $valor -= $quantidade * $nota;
                }
            }

            foreach ($moedas as $moeda) {
                if ($valor >= $moeda) {
                    $quantidade = floor($valor / $moeda);
                    $resultado["Moeda(s) de R$ " . number_format($moeda, 2)] = $quantidade;
                    $valor -= $quantidade * $moeda;
                    $valor = round($valor, 2);
                }
            }

            return $resultado;
        }
        public function mostra_saldo() {
            echo $this->ver_saldo();
        }
        public function mostra_qtd_notas_moedas() {
            $valor_saque = $this->calcula_notas_moedas();
            foreach ($valor_saque as $descricao => $quantidade) {
                echo "{$descricao}: {$quantidade}<br>";
            }
        }
    }