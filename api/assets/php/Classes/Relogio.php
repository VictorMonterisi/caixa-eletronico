<?php

    class Relogio extends Cliente {
        public function descobre_fuso() {
            $fuso_cliente = $this->local;
            switch($fuso_cliente) {
                case "SP":
                case "RJ":
                case "MG":
                case "DF":
                    date_default_timezone_set("America/Sao_Paulo");
                    break;
                case "BA":
                    date_default_timezone_set("America/Bahia");
                    break;
                case "AM":
                    date_default_timezone_set("America/Manaus");
                    break;
                default:
                    date_default_timezone_set("America/Sao_Paulo");
                    break;
            }
            
            $horario = new DateTime();
            $hora_atual = $horario->format("H:i:s");

            if($hora_atual >= "06:00:00" && $hora_atual < "12:00:00") {
                return "☀️ Bom dia";
            } elseif($hora_atual >= "12:00:00" && $hora_atual < "18:00:00") {
                return "😎 Boa tarde";
            } else {
                return "🌙 Boa noite";
            }
        }
    }