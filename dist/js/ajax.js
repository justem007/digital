$().ready(function() {
    // validate signup form on keyup and submit
    $("#agendaForm").validate({
        rules: {
            Nome: {
                required: true,
                minlength: 5,
                maxlength: 40
            },
            Email: {
                required: true,
                email: true
            },
            Fone: {
                minlength: 8,
                maxlength: 15,
                number: true
            },
            Celular: {
                required: true,
                minlength: 8,
                maxlength: 15,
                number: true
            },
            messages: {
                nome: {
                    required: "O nome é obrigatório",
                    minlength: "coloque um nome com mais de 5 caracter",
                    maxlength: "coloque um nome com menos de 40 caracter"
                }
            }
        }
    });
});

//$(document).ready(function() {
//    $("#agendaForm").validate();
//});

//$(document).ready(function(){
//
//})();

$("#agendaForm").submit(function(){
    if (grecaptcha.getResponse() == "")
    {
        $("#retorno").html("<span>Você não clicou no reCAPTCHA, por favor, faça!</span>");
        return false;
    }else {

    var Valores = $(this).serialize();
    $("#retorno").html("<img src='images/ajax-loader.gif'>");

    $.ajax({
        type:"POST",
        url: "mail.php",
        data: Valores,
        success: function(data){
            $("#retorno").html(data);
            $("#agendaForm").each(function(){
                this.reset();
            });
        }
    });
    return false;
    }
});

$(document).ready(function() {
    // refresh captcha
    $('img#captcha-refresh').click(function() {

        change_captcha();
    });

    function change_captcha()
    {
        document.getElementById('captcha').src="get_captcha.php?rnd=" + Math.random();
    }
});

$(function() {
    $("#calendario").datepicker({
        dateFormat: 'DD, d MM, yy',
        dayNames: ['Domingo','Segunda-Feira','Terça-Feira','Quarta-Feira','Quinta-Feira','Sexta-Feira','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
    });
});