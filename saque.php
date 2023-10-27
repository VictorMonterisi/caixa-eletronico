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
            <h2>Saque</h2>
            <section id="form-section">
                <form action="resultado.php" method="post">
                    <div class="row row-gap-3 align-items-center">
                        <input id="tipo_operacao" name="tipo_operacao" type="hidden" value="saque">
                        <label for="valor_formulario" name="valor_formulario" class="form-label">Informe o valor do saque:</label>
                        <div class="col-xs-12 col-sm-8 col-md-10">
                            <div class="d-grid">
                                <input id="valor_formulario" name="valor_formulario" class="form-control-lg" type="text" placeholder="0.00">
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
        </main>
        <footer>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/d1ab779ca2.js" crossorigin="anonymous"></script>
        </footer>
    </section>
</body>
</html>