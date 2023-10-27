<?php
    include "assets/php/includes/head-atualizado.php";
?>
<body id="principal" class="container">
    <header>
        <section id="top-section">
            <h1><?php echo $saudacao; ?></h1>
            <h2><?php echo $dados_monetarios; ?></h2>
        </section>
    </header>
    <section id="botton-section">
        <main>
            <?php
                $tipo_operacao = $_POST["tipo_operacao"];
                $valor_informado = $_POST["valor_formulario"];
                if($tipo_operacao == "deposito") {
                    echo $pega_dados->feedback_deposito();
                } elseif($tipo_operacao == "saque") {
                    $pega_dados->mostra_qtd_notas_moedas();
                }
            ?>
            <section id="buttons-section">
                <div class="text-center">
                    <a href="index.php" title="Voltar!" class="btn btn-deposito btn-lg">Voltar</a>
                </div>
            </section>
        </main>
        <footer>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/d1ab779ca2.js" crossorigin="anonymous"></script>
        </footer>
    </section>
</body>
</html>