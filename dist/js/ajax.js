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
            Celular: {
                required: true,
                minlength: 8,
                maxlength: 15,
                number: true
            },
            messages: {
                nome: {
                    required: "O nomeé obrigatório",
                    minlength: "coloque um nome com mais de 5 caracter",
                    maxlength: "coloque um nome com menos de 40 caracter"
                }
            }
        }
    });
});
$("#agendaForm").submit(function(){
    if (grecaptcha.getResponse() == "")
    {
        $("#retorno").html("Você não clicou no reCAPTCHA, por favor, faça!");
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