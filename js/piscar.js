$(document).ready(function(){
    $("#pisca").css("opacity","0.9");//define opacidade inicial
    setInterval(function() {
        if($("#pisca").css("opacity") == 0){
            $("#pisca").css("opacity","5");
        }else{
            $("#pisca").css("opacity","0");
        }
    }, 1000);
});