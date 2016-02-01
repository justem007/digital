$(function() {
    $(window).scroll(function()
    {
        var topo = $('#topo').height(); // altura do topo
        var rodape = $('#rodape').height(); // altura do rodape
        var scrollTop = $(window).scrollTop(); // qto foi rolado a barra
        var tamPagina = $(document).height(); // altura da página
        if(scrollTop > topo){
            $('#menu').css({'position' : 'absolute', 'margin-top' : scrollTop - (topo-5)});
        }else{
            $('#menu').css({'position' : 'relative', 'margin-top' : 0});
        }
    });
});
// Initialize popup as usual
$('.imagelink').magnificPopup({
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
        tNext: 'Próximo', // title for right button
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
        tNext: 'Próximo', // title for right button
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
        tNext: 'Próximo', // title for right button
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
        tNext: 'Próximo', // title for right button
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