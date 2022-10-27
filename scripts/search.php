<?php

    include_once('connection.php');

    $livros = $_POST['palavra'];

    $livros = "SELECT id, nome FROM livros WHERE nome_interno LIKE '%$livros%' LIMIT 5";
    $resultado = mysqli_query($conn, $livros);

    if(mysqli_num_rows($resultado) <= 0) {
        echo "<li id='false'>"."Nenhum Livro Encontrado..."."</li>";
    } else {
        while ($rows = mysqli_fetch_assoc($resultado)) {
            echo "<li><a href='http://127.0.0.1/pages/book.php?bk=".$rows['id']."'>".$rows['nome']."</a></li>";
        }
    }

?>