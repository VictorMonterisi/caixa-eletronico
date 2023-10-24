<?php
    include "assets/php/includes/head.php";
    require "assets/php/Classes/Operacoes.php";
    $mostra_saldo = new Operacoes;
?>
<body class="container principal">
    <header>
        <section class="top-section">
            <div class="row g-7 align-items-center">
                <div class="col-auto">
                    <h1>Total na conta:</h1>
                </div>
                <div class="col-auto">
                    <h2>R$ <?php $mostra_saldo->mostra_saldo(); ?></h2>
                </div>
            <div>
            <form id="form-saque" action="operacao.php" method="post">
                <div class="row row-gap-3 align-items-center">
                    <label for="valor_saque" name="valor_saque" class="form-label">Digite o valor do saque</label>
                    <div class="col-xs-12 col-sm-8 col-md-10">
                        <div class="d-grid">
                            <input id="valor_saque" name="valor_saque" class="form-control-lg" type="text" placeholder="0.00">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-2">
                        <div class="d-grid">
                            <input class="btn btn-saque btn-lg" type="submit" value="Sacar">
                        </div>
                    </div>
                </div>
            </form>
        </section>        
    </header>
    <section class="botton-section">
        <main>
            <div class="output">
                
            </div>
        </main>
        <footer>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/d1ab779ca2.js" crossorigin="anonymous"></script>
        </footer>
    </section>
</body>
</html>