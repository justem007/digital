<hr class="hr-linha">
<br>
<div class="row column">
    <h6 class="text-center aviso">Atendemos somente pessoas físicas e jurídicas que estão iniciando, produzam ou revendam produtos.
        <br>Não atendemos particulares <span class="consumidor">("consumidor final")</span> .</h6>
</div>
<div class="callout secondary">
    <h6 class="text-center subheader">
        Todos os direitos reservados a Rossina Estamparia Digital &#9400; - 2016
    </h6>
</div>

<script src="dist/all-modal.js"></script>
<script src="node_modules/node-waves/dist/waves.min.js"></script>
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
</body>
</html>
