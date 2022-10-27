$(function() {

    var today = new Date();
    var mes = String(today.getMonth() + 1).padStart(2, '0');

    var dados = { date : mes };
    
    $.post('/scripts/book_month.php', dados, function(retorna) {
        $(".books_month").html(retorna);
    });

});