<?php
    include "assets/php/Classes/Relogio.php";
    $data = new Relogio();
    echo $data->descobre_fuso();

    $valor_formulario = filter_input(INPUT_POST, 'valor_formulario', FILTER_VALIDATE_FLOAT);

    echo $valor_formulario;