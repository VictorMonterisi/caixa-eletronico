<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
</head>
<body>

    <main>
        <div class="container">
            <div class="input">
                <form id="formulario-caixa" method="post">
                    <label for="valorParaSaque">Informe o valor para saque:</label>
                    <input type="text" id="valorParaSaque" name="valorParaSaque">
                    <br>
                    <input type="submit" name="Enviar">
                </form>
            </div>
            <div class="output">

            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="assets/jquery/dadosAJAX.js"></script>
</body>
</html>