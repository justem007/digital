<br>
<!-- Footer -->
<div class="small-12 medium-12 large-12 columns secondary2">
    <p class="grey-text text-lighten-4">
        <h5 class="text-center color-branco">Atendemos somente pessoas físicas e jurídicas que estão iniciando, produzam ou revendam produtos.
            <br>Não atendemos particulares <span class="consumidor color-branco text-bold">("consumidor final")</span> .
        </h5>
    </p>
</div>
    <div class="full-width">
        <div class="row columns">
            <div class="small-12 medium-3 large-4 columns">
                <br>
                <i class="fi-laptop"></i>
                <h5 class="white-text">Dados da Empresa</h5>
                <p class="grey-text text-lighten-4">
                    NITISILK INDUSTRIA E COMERCIO DE ROUPAS LTDA - EPP<br>
                    Endereço: Avenida Presidente Roosevelt, 130 parte<br>
                    Vista Alegre - São Gonçalo<br>
                    Estado: Rio de Janeiro<br>
                    Cep: 24722-070<br>
                    CNPJ: 05.035.305/0001-52<br>
                </p>
            </div>
            <div class="small-12 medium-3 large-4 columns">
                <i class="fi-home"></i>
                <h5 class="white-text">Contatos da Empresa</h5>
                <p class="grey-text text-lighten-4">
                    Tel: (21) 3245-9607 / 2602-7536<br>
                    Email: contato@rossinaestamparia.com.br<br>
                    Skype: Rossinaestamparia<br>
                    <a href="">Agendar Visita- Clique aqui</a><br><br>
                    Atendemos de segunda a sexta de 8:00 as 17:00 hrs<br>
                    Entregamos via Correios e Metar Logística<br><br>
            </div>
            <div class="small-12 medium-3 large-4 columns text-center">
                <i class="fi-link"></i>
                <p class="footer-links text-bold p-links">
                    <a href="camisetas.php">Camisas</a><br>
                    <a href="tecidos.php">Tecidos</a><br>
                    <a href="servicos.php">Serviços</a><br>
                    <a href="silk-digital.php">Silk Digital</a><br>
                    <a href="videos-calandra-plotter-kornit-digital.php">Vídeos</a><br>
                    <a href="form.php">Agendar Visita</a><br>
                    <a href="contatos.php">Contatos</a><br>
                    <a href="empresa.php">Sobre Nós</a><br>
                </p>
            </div>
        </div>
        </div>
    <div class="small-12 medium-12 large-12 columns grey">
        <p class="grey-text text-lighten-4">
            <p class="text-center color-branco">© 2008-2016 Rosssina Estamparia Digital</p>
        </p>
    </div>
</body>
<script src="dist/all-modal.js"></script>
<script src="node_modules/node-waves/dist/waves.min.js"></script>
<script src="components/jquery-validation/dist/jquery.validate.js"></script>
<script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
<script type="text/javascript">
    Waves.attach('.button', ['waves-float','waves-light']);
    Waves.attach('.flat-box', ['waves-block']);
    Waves.init();
</script>
<script>
    var offset = $('#meuMenu').offset().top;
    var $meuMenu = $('#meuMenu');
    $(document).on('scroll', function () {
        if (offset <= $(window).scrollTop()) {
            $meuMenu.addClass('fixar');
        } else {
            $meuMenu.removeClass('fixar');
        }
    });
</script>
<script>
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

    $("#contatoForm").submit(function(){
        var Valores = $(this).serialize();
        $("#retorno").html("<img src='images/ajax-loader.gif'>");

        $.ajax({
            type:"POST",
            url: "mail-contato.php",
            data: Valores,
            success: function(data){
                $("#retorno").html(data);
                $("#contatoForm").each(function(){
                    this.reset();
                });
            }
        });
        return false;
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
</script>
</html>
