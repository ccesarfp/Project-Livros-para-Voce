$(function() {
    //Pesquisar Livros
    $("#pesquisa").keyup(function() {

        var pesquisa = $(this).val();
        var pesquisa_sem_espaco = pesquisa.replace(/\s/g, '');
        var visual = document.getElementById("menu_pesquisa");

        //Verificar se foi digitado
        if(pesquisa_sem_espaco != '') {
            var dados = {
                palavra : pesquisa_sem_espaco
            }

            $.post('/scripts/search.php', dados, function(retorna) {
                $(".resultado").html(retorna);
                visual.style.display="block";
            });
        } else {
            $(".resultado").html('');
            visual.style.display="none";
            
        }

    });
});