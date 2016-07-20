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
<script type="text/javascript">
//    function moneyTextToFloat(text) {
//        var cleanText = text.replace("R$ ", "").replace(",", ".");
//        return parseFloat(cleanText);
//    }
//
//    function floatToMoneyText(value) {
//        var text = (value < 1 ? "0" : "") + Math.floor(value * 100);
//        text = "R$ " + text;
//        return text.substr(0, text.length - 2) + "," + text.substr(-2);
//    }
//
//    function readTotal() {
//        var subtotal = $("#subtotal").text();
//        return moneyTextToFloat(subtotal);
//    }
//
//    function writeTotal(value) {
//        var text = floatToMoneyText(value);
//        $("#subtotal").text(text);
//    }
//
//    var produtos = $("#produto");
//
//    var primeiroProduto = produtos[0];
//
//    $(primeiroProduto).find("#quantity").val();
//
//    function calculaTotalProducts() {
//        var produtos = $("#produto");
//        var subtotal = 0;
//
//        $(produtos).each(function(pos, produto){
//            var $produto = $(produto);
//            var quantity = moneyTextToFloat(
//                $produto.find("#quantity").val());
//            var camisa = moneyTextToFloat(
//                $produto.find("#camisa").text());
//            subtotal += quantity * camisa;
//        });
//        return subtotal;
//    }
//
////    for (var pos = 0; pos < produtos.length; pos++){
////
////        var priceElements = produtos[pos].getElementsByClassName("camisa");
////        var priceText  =  priceElements[0].innerHTML;
////        var camisa = moneyTextToFloat(priceText);
////        console.log(camisa);
////
////        var silkElements = produtos[pos].getElementsByClassName("silk");
////        var silkText  =  silkElements[0].innerHTML;
////        var silk = moneyTextToFloat(silkText);
////        console.log(silk);
////
////        var qtyElements = produtos[pos].getElementsByClassName("quantity");
////        var qtyText = qtyElements[0].value;
////        var quantity = moneyTextToFloat(qtyText);
////        console.log(quantity);
////    }
//
////    var totalProdutos = 0;
////
////    for(var pos = 0; pos < produtos.length; pos++){
////        var subtotal = camisa * quantity;
////        totalProdutos += subtotal;
////    }
////    console.log(subtotal);
////
//    writeTotal(subtotal);

</script>
</html>
