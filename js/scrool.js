$(function(){
    var nav = $('#realEstateMenu');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 150) {
            nav.addClass("menu");
        } else {
            nav.removeClass("menu");
        }
    });
});