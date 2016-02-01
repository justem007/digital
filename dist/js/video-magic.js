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