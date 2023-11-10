<?php
    include "assets/php/includes/head.php";
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
            <h2>Qual operação você deseja fazer?</h2>
            <section id="buttons-section">
                <div class="row text-center">
                    <div class="col-xs-12 col-md-6 pt-13">
                        <a href="deposito.php" title="Quero fazer um depósito!" class="btn btn-deposito btn-lg">Depósito</a>
                    </div>
                    <div class="col-xs-12 col-md-6 pt-13">
                        <a href="saque.php" title="Quero fazer um saque!" class="btn btn-saque btn-lg">Saque</a>
                    </div>
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