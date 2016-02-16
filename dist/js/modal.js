//botão de voltar ao topo
$(document).ready(function() {
    $().UItoTop({ easingType: 'easeOutQuart' });
});
//menu flutuante
$(function() {
    $(window).scroll(function()
    {
        var topo = $('#topo').height(); // altura do topo
        var rodape = $('#rodape').height(); // altura do rodape
        var scrollTop = $(window).scrollTop(); // qto foi rolado a barra
        var tamPagina = $(document).height(); // altura da página
        if(scrollTop > topo){
            $('#menu').css({'position' : 'absolute', 'margin-top' : scrollTop - (topo+8)});
        }else{
            $('#menu').css({'position' : 'relative', 'margin-top' : 0});
        }
    });
});
// Initialize popup as usual
$('.imagelink').magnificPopup({
    tClose: 'Fechar ou pressione (Esc)',
    type: 'image',
    tLoading: '',
    removalDelay: 300,
    mainClass: 'mfp-with-zoom', // this class is for CSS animation below
    zoom: {
        enabled: true, // By default it's false, so don't forget to enable it

        duration: 300, // duration of the effect, in milliseconds
        easing: 'ease-in-out', // CSS transition easing function

        // The "opener" function should return the element from which popup will be zoomed in
        // and to which popup will be scaled down
        // By defailt it looks for an image tag:
        opener: function(openerElement) {
            // openerElement is the element on which popup was initialized, in this case its <a> tag
            // you don't need to add "opener" option if this code matches your needs, it's defailt one.
            return openerElement.is('img') ? openerElement : openerElement.find('img');
        }
    }
});
$('.parent-container').magnificPopup({
    tClose: 'Fechar ou pressione (Esc)',
    tLoading: '',
    delegate: 'a', // child items selector, by clicking on it popup will open
    type: 'image',
    mainClass: 'mfp-with-zoom', // this class is for CSS animation below
    removalDelay: 300,
    gallery:{
        enabled:true,
        navigateByImgClick: true,
        arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>', // markup of an arrow button
        tPrev: 'Voltar', // title for left button
        tNext: 'Proximo', // title for right button
        tCounter: '<span class="mfp-counter">%curr% de %total%</span>'
    },
    zoom: {
        enabled: true, // By default it's false, so don't forget to enable it

        duration: 300, // duration of the effect, in milliseconds
        easing: 'ease-in-out', // CSS transition easing function

        // The "opener" function should return the element from which popup will be zoomed in
        // and to which popup will be scaled down
        // By defailt it looks for an image tag:
        opener: function(openerElement) {
            // openerElement is the element on which popup was initialized, in this case its <a> tag
            // you don't need to add "opener" option if this code matches your needs, it's defailt one.
            return openerElement.is('img') ? openerElement : openerElement.find('img');
        }
    }
});
$('.parent-container2').magnificPopup({
    tClose: 'Fechar ou pressione (Esc)',
    tLoading: '',
    delegate: 'a', // child items selector, by clicking on it popup will open
    type: 'image',
    mainClass: 'mfp-with-zoom', // this class is for CSS animation below
    removalDelay: 300,
    gallery:{
        enabled:true,
        navigateByImgClick: true,
        arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>', // markup of an arrow button
        tPrev: 'Voltar', // title for left button
        tNext: 'Proximo', // title for right button
        tCounter: '<span class="mfp-counter">%curr% de %total%</span>'
    },
    zoom: {
        enabled: true, // By default it's false, so don't forget to enable it

        duration: 300, // duration of the effect, in milliseconds
        easing: 'ease-in-out', // CSS transition easing function

        // The "opener" function should return the element from which popup will be zoomed in
        // and to which popup will be scaled down
        // By defailt it looks for an image tag:
        opener: function(openerElement) {
            // openerElement is the element on which popup was initialized, in this case its <a> tag
            // you don't need to add "opener" option if this code matches your needs, it's defailt one.
            return openerElement.is('img') ? openerElement : openerElement.find('img');
        }
    }
});
$('.parent-container3').magnificPopup({
    tClose: 'Fechar ou pressione (Esc)',
    tLoading: '',
    delegate: 'a', // child items selector, by clicking on it popup will open
    type: 'image',
    mainClass: 'mfp-with-zoom', // this class is for CSS animation below
    removalDelay: 300,
    gallery:{
        enabled:true,
        navigateByImgClick: true,
        arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>', // markup of an arrow button
        tPrev: 'Voltar', // title for left button
        tNext: 'Proximo', // title for right button
        tCounter: '<span class="mfp-counter">%curr% de %total%</span>'
    },
    zoom: {
        enabled: true, // By default it's false, so don't forget to enable it

        duration: 300, // duration of the effect, in milliseconds
        easing: 'ease-in-out', // CSS transition easing function

        // The "opener" function should return the element from which popup will be zoomed in
        // and to which popup will be scaled down
        // By defailt it looks for an image tag:
        opener: function(openerElement) {
            // openerElement is the element on which popup was initialized, in this case its <a> tag
            // you don't need to add "opener" option if this code matches your needs, it's defailt one.
            return openerElement.is('img') ? openerElement : openerElement.find('img');
        }
    }
});
$('.parent-container4').magnificPopup({
    tClose: 'Fechar ou pressione (Esc)',
    tLoading: '',
    delegate: 'a', // child items selector, by clicking on it popup will open
    type: 'image',
    mainClass: 'mfp-with-zoom', // this class is for CSS animation below
    removalDelay: 300,
    gallery:{
        enabled:true,
        navigateByImgClick: true,
        arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>', // markup of an arrow button
        tPrev: 'Voltar', // title for left button
        tNext: 'Proximo', // title for right button
        tCounter: '<span class="mfp-counter">%curr% de %total%</span>'
    },
    zoom: {
        enabled: true, // By default it's false, so don't forget to enable it

        duration: 300, // duration of the effect, in milliseconds
        easing: 'ease-in-out', // CSS transition easing function

        // The "opener" function should return the element from which popup will be zoomed in
        // and to which popup will be scaled down
        // By defailt it looks for an image tag:
        opener: function(openerElement) {
            // openerElement is the element on which popup was initialized, in this case its <a> tag
            // you don't need to add "opener" option if this code matches your needs, it's defailt one.
            return openerElement.is('img') ? openerElement : openerElement.find('img');
        }
    }
});
$('.video').magnificPopup({
    type: 'iframe',
    iframe: {
        markup: '<div class="mfp-iframe-scaler">'+
        '<div class="mfp-close"></div>'+
        '<iframe class="mfp-iframe" frameborder="5" allowfullscreen></iframe>'+
        '<div class="mfp-title">Seu vídeo esta sendo carregado favor aguardar ......</div>'+
        '</div>'
    },
    callbacks: {
        markupParse: function(template, values, item) {
            values.title = item.el.attr('title');
        }
    },
    patterns: {
        rossinaestamparia: {

            index: 'rossinaestamparia.com.br',

            id: function(url) {
                var m = url.match(/^.+rossinaestamparia.com.br\/(video|hub)\/([^_]+)[^#]*(#video=([^_&]+))?/);
                if (m !== null) {
                    if(m[4] !== undefined) {
                        return m[4];
                    }
                    return m[2];
                }
                return null;
            },
            src: 'http://www.rossinaestamparia.com.br/embed/video/%id%'
        }
    }
});
//efeito pra colocar o google maps
$(document).ready(function () {
    $('.map').magnificPopup({
        disableOn: 360,
        type: 'iframe',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
});
//um outro script aqui
$(function() {
    $( document ).tooltip({
        position: {
            my: "center bottom-20",
            at: "center top",
            using: function( position, feedback ) {
                $( this ).css( position );
                $( "<div>" )
                    .addClass( "arrow" )
                    .addClass( feedback.vertical )
                    .addClass( feedback.horizontal )
                    .appendTo( this );
            }
        }
    });
});
//colorbox varios efeitos
$(document).ready(function(){
    //Examples of how to assign the Colorbox event to elements
    $(".group1").colorbox({rel:'group1'});
    $(".group2").colorbox({rel:'group2', transition:"fade"});
    $(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
    $(".group4").colorbox({rel:'group4', slideshow:true});
    $(".ajax").colorbox();
    $(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
    $(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
    $(".iframe").colorbox({iframe:true, width:"90%", height:"90%"});
    $(".inline").colorbox({inline:true, width:"50%"});
    $(".callbacks").colorbox({
        onOpen:function(){ alert('onOpen: colorbox is about to open'); },
        onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
        onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
        onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
        onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
    });
    $('.non-retina').colorbox({rel:'group5', transition:'none'})
    $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});

    //Example of preserving a JavaScript event for inline calls.
    $("#click").click(function(){
        $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
        return false;
    });
});
//carrega o novo script do gas.js do google e atualiza
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-17495387-2']);
_gaq.push(['_trackPageview']);
setTimeout("_gaq.push(['_trackEvent', '15_seconds', 'read'])",15000);
(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'rossinaestamparia.com.br/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();