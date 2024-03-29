function pagamento() {
    var endereco = jQuery('.endereco').attr("data-endereco");
    $.ajax({
        url: endereco + "pagamento.php",
        type: 'POST',
        dataType: 'json',
        success: function (retorno) {
            PagSeguroDirectPayment.setSessionId(retorno.id);
        },
        complete: function (retorno) {
            listarMeiosPag();
        }
    });
}

function listarMeiosPag() {
    PagSeguroDirectPayment.getPaymentMethods({
        amount: 500.00,
        success: function (retorno) {
            //console.log(retorno);
            $('.meio-pag').append("<div>Cartão de Crédito</div>");
            $.each(retorno.paymentMethods.CREDIT_CARD.options, function(i, obj){
                //$('.meio-pag').append("<span>"+ obj.name +"</span>");
                //$('.meio-pag').append("<span><img src='https://stc.pagseguro.uol.com.br" + obj.images.SMALL.path + "'>"+ obj.name +"</span>");
                $('.meio-pag').append("<span class='img-band'><img src='https://stc.pagseguro.uol.com.br" + obj.images.SMALL.path + "'></span>");
            });
            
            $('.meio-pag').append("<div>Boleto</div>");
            $('.meio-pag').append("<span class='img-band'><img src='https://stc.pagseguro.uol.com.br" + retorno.paymentMethods.BOLETO.options.BOLETO.images.SMALL.path + "'><span>");
                        
            $('.meio-pag').append("<div>Débito Online</div>");
            $.each(retorno.paymentMethods.ONLINE_DEBIT.options, function(i, obj){
                $('.meio-pag').append("<span class='img-band'><img src='https://stc.pagseguro.uol.com.br" + obj.images.SMALL.path + "'></span>");
            });
        },
        error: function (retorno) {
            // Callback para chamadas que falharam.
        },
        complete: function (retorno) {
            // Callback para todas chamadas.
        }
    });
}


