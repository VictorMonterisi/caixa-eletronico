$('#formulario-caixa').bind('submit', function(event){
    event.preventDefault(); // Evita o carregamento da página para o envio do valor para saque
    let valorParaSaque = $(this).serialize(); // Pega todos os dados do formulário e faz a formatação, facilitando o envio pelo AJAX

    $.ajax({
        type: 'POST',
        url:'assets/php/calculadora.php',
        data: valorParaSaque,
        success: function(resultado){
            $('.output').html(resultado);
        }
    });
});