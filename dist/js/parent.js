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