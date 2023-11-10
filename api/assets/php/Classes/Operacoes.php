<?php
    
    class Operacoes extends Cliente {
        public function encontra_cliente(){
            return $nome_cliente = $this->nome;
        }

        public function pega_tipo_moeda() {
                $moeda = $this->tipo_moeda;
                return $moeda;
        }

        public function pega_saldo() {
            $saldo = $this->saldo_total;
            return $saldo;
        }
        
        private function verifica_valor_informado() {
            $tipo_operacao = $_POST["tipo_operacao"];
            $valor_formulario = filter_input(INPUT_POST, 'valor_formulario', FILTER_VALIDATE_FLOAT);
            $aviso = "Valor inválido. Tente novamente.";

            if($valor_formulario === false || $valor_formulario === null) {
                $resposta_validacao = $aviso;
                return $resposta_validacao;
            } else {
                $resposta_validacao = [$tipo_operacao, $valor_formulario];
                return $resposta_validacao;
            }
        }
        
        public function atualiza_saldo() {
            $resposta_validacao = $this->verifica_valor_informado();
            $tipo_moeda = $this->pega_tipo_moeda();

            if(!is_array($resposta_validacao)) {   
                return "😕 {$resposta_validacao}";
            }elseif(is_array($resposta_validacao) && $resposta_validacao[0] == "deposito") {
                $valor_atualizado = $this->saldo_total += $resposta_validacao[1];
                return "💰 Saldo Total: {$tipo_moeda} {$valor_atualizado}";
            } elseif(is_array($resposta_validacao) && $resposta_validacao[0] == "saque") {
                $valor_atualizado = $this->saldo_total -= $resposta_validacao[1];
                return "💰 Saldo Total: {$tipo_moeda} {$valor_atualizado}";
            } else {
                return "😕 Algo deu errado, tente mais tarde. ";
            }
        }

        public function feedback_deposito() {
            $resposta_validacao = $this->verifica_valor_informado();
            $tipo_moeda = $this->pega_tipo_moeda();

            
            if(is_array($resposta_validacao) && $resposta_validacao[0] == "deposito") {
                echo "<h2>Foi depositado R$ {$resposta_validacao[1]} em sua conta.</h2>";
            } else {
                echo "<h4>Infelizmente, algo não deu certo...</h4>";
            }
        }

        private function calcula_notas_moedas() {
            $valor_informado = $this->verifica_valor_informado();
            if(is_array($valor_informado) && $valor_informado[0] == "saque" && is_float($valor_informado[1])) {
                $valor_saque = $valor_informado[1];
                $notas = [200, 100, 50, 10, 5, 2];
                $moedas = [1, 0.5, 0.25, 0.1, 0.05, 0.01];

                $resultado = [];

                foreach ($notas as $nota) {
                    if($valor_saque >= $nota) {
                        $quantidade = floor($valor_saque / $nota);
                        $resultado["Nota(s) de R$ {$nota}"] = $quantidade;
                        $valor_saque -= $quantidade * $nota;
                    }
                }
    
                foreach ($moedas as $moeda) {
                    if ($valor_saque >= $moeda) {
                        $quantidade = floor($valor_saque / $moeda);
                        $resultado["Moeda(s) de R$ " . number_format($moeda, 2)] = $quantidade;
                        $valor_saque -= $quantidade * $moeda;
                        $valor_saque = round($valor_saque, 2);
                    }
                }
    
                return $resultado;
            }

        }

        public function mostra_qtd_notas_moedas() {
            $valor_saque = $this->calcula_notas_moedas();
            if(!$valor_saque == null) {
                foreach ($valor_saque as $descricao => $quantidade) {
                    echo "<h4>{$descricao}: {$quantidade}</h4>";
                }
            } else {
                echo "<h4>Infelizmente, algo não deu certo...</h4>";
            }
        }
    }