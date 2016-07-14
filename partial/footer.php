<br>
<div class="row column">
    <h6 class="text-center aviso">Atendemos somente pessoas físicas e jurídicas que estão iniciando, produzam ou revendam produtos.
        <br>Não atendemos particulares <span class="consumidor">("consumidor final")</span> .</h6>
</div>
<br>
<!-- Footer -->
<footer class="footer">
    <div class="row full-width">
        <div class="small-12 medium-3 large-4 columns">
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
                Entregamos via Correios e Metar Logística
        </div>
        <div class="small-6 medium-3 large-4 columns">
            <h5>Links</h5>
            <br>
            <ul class="footer-links">
                <li><a href="camisetas.php">Camisas</a></li>
                <li><a href="tecidos.php">Tecidos</a></li>
                <li><a href="servicos.php">Serviços</a></li>
                <li><a href="silk-digital.php">Silk Digital</a></li>
                <li><a href="videos-calandra-plotter-kornit-digital.php">Vídeos</a></li>
                <li><a href="form.php">Agendar Visita</a></li>
                <li><a href="contatos.php">Contatos</a></li>
                <li><a href="empresa.php">Sobre Nós</a></li>
                <ul>
        </div>
    </div>
</footer>

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
