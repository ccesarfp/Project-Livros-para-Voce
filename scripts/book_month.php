<?php

    include_once('connection.php');

    $mes = $_POST['date'];

    $mes = "SELECT id, nome FROM `livros` WHERE MONTH(`dt_integracao`) = '$mes' ORDER BY dt_integracao DESC";
    $resultado = mysqli_query($conn, $mes);

    if(mysqli_num_rows($resultado) <= 0) {
        echo "<li>"."Nenhum Livro Adicionado"."</li>";
    } else {
        while ($rows = mysqli_fetch_assoc($resultado)) {
            echo "<li><a href='http://127.0.0.1/pages/book.php?bk=".$rows['id']."'>".$rows['nome']."</a></li>";
        }
    }

?>