$(function(){$(window).scroll(function(){var e=$("#topo").height(),a=($("#rodape").height(),$(window).scrollTop());$(document).height();a>e?$("#menu").css({position:"absolute","margin-top":a-(e-5)}):$("#menu").css({position:"relative","margin-top":0})})}),$(".imagelink").magnificPopup({type:"image",tLoading:"",removalDelay:300,mainClass:"mfp-with-zoom",zoom:{enabled:!0,duration:300,easing:"ease-in-out",opener:function(e){return e.is("img")?e:e.find("img")}}}),$(".parent-container").magnificPopup({tClose:"Fechar ou pressione (Esc)",tLoading:"",delegate:"a",type:"image",mainClass:"mfp-with-zoom",removalDelay:300,gallery:{enabled:!0,navigateByImgClick:!0,arrowMarkup:'<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',tPrev:"Voltar",tNext:"Próximo",tCounter:'<span class="mfp-counter">%curr% de %total%</span>'},zoom:{enabled:!0,duration:300,easing:"ease-in-out",opener:function(e){return e.is("img")?e:e.find("img")}}}),$(".parent-container2").magnificPopup({tClose:"Fechar ou pressione (Esc)",tLoading:"",delegate:"a",type:"image",mainClass:"mfp-with-zoom",removalDelay:300,gallery:{enabled:!0,navigateByImgClick:!0,arrowMarkup:'<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',tPrev:"Voltar",tNext:"Próximo",tCounter:'<span class="mfp-counter">%curr% de %total%</span>'},zoom:{enabled:!0,duration:300,easing:"ease-in-out",opener:function(e){return e.is("img")?e:e.find("img")}}}),$(".parent-container3").magnificPopup({tClose:"Fechar ou pressione (Esc)",tLoading:"",delegate:"a",type:"image",mainClass:"mfp-with-zoom",removalDelay:300,gallery:{enabled:!0,navigateByImgClick:!0,arrowMarkup:'<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',tPrev:"Voltar",tNext:"Próximo",tCounter:'<span class="mfp-counter">%curr% de %total%</span>'},zoom:{enabled:!0,duration:300,easing:"ease-in-out",opener:function(e){return e.is("img")?e:e.find("img")}}}),$(".parent-container4").magnificPopup({tClose:"Fechar ou pressione (Esc)",tLoading:"",delegate:"a",type:"image",mainClass:"mfp-with-zoom",removalDelay:300,gallery:{enabled:!0,navigateByImgClick:!0,arrowMarkup:'<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',tPrev:"Voltar",tNext:"Próximo",tCounter:'<span class="mfp-counter">%curr% de %total%</span>'},zoom:{enabled:!0,duration:300,easing:"ease-in-out",opener:function(e){return e.is("img")?e:e.find("img")}}}),$(".video").magnificPopup({type:"iframe",iframe:{markup:'<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" frameborder="5" allowfullscreen></iframe><div class="mfp-title">Seu vídeo esta sendo carregado favor aguardar ......</div></div>'},callbacks:{markupParse:function(e,a,t){a.title=t.el.attr("title")}},patterns:{rossinaestamparia:{index:"rossinaestamparia.com.br",id:function(e){var a=e.match(/^.+rossinaestamparia.com.br\/(video|hub)\/([^_]+)[^#]*(#video=([^_&]+))?/);return null!==a?void 0!==a[4]?a[4]:a[2]:null},src:"http://www.rossinaestamparia.com.br/embed/video/%id%"}}});