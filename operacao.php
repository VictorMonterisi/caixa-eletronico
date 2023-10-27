<?php
    include "assets/php/includes/head.php";
    require "assets/php/Classes/Operacoes.php";
    $faz_operacao = new Operacoes();
?>
<body class="container principal">
    <header>
        <section class="top-section">
            <div class="row g-7 align-items-center">
                <div class="col-auto">
                    <h1>Total na conta:</h1>
                </div>
                <div class="col-auto">
                    <h2>R$ <?php echo $faz_operacao->atualiza_saldo(); ?></h2>
                </div>
            <div>
        </section>        
    </header>
    <section class="botton-section">
        <main>
            <div class="output">
                <?php
                    $faz_operacao->verifica_possibilidade_saque();
                    $faz_operacao->mostra_qtd_notas_moedas();
                ?>
            </div>
        </main>
        <footer>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/d1ab779ca2.js" crossorigin="anonymous"></script>
        </footer>
    </section>
</body>
</html>