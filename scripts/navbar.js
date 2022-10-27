$(function() {

    //Abrir menu
    $("#menu li a").mouseover(function() {
        var index = $("#menu li a").index(this);
        $("#menu li").eq(index).children("ul").slideDown(300);

        if($(this).siblings('ul').length > 0) {
            return false;
        }
    });

    //Fechar menu    
    $("#menu li").mouseleave(function() {
        var index = $("#menu li").index(this);
        $("#menu li").eq(index).children("ul").slideUp(0);
    });
});