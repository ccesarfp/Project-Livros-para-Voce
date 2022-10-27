<?php
    if (!isset($_GET['genero'])) {
        header("Location: http://127.0.0.1/pages/genrer_table.php");
    };
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <title>Livros para Você</title>
    <link rel="stylesheet" href="/styles/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script></script>             
    <script src="/scripts/navbar.js"></script>
    <script src="/scripts/search.js"></script>
    <style>
        #genero_busca {
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }
    </style>
</head>
<body>
    <header>
        <h1 id="title">Livros para Você</h1>
        <h4>O lugar para facilitar a sua leitura de Livros de Domínio Público</h4>

        <nav id="box1" class="faixa">
           <ul id="menu">
                <li><a target="_self" href="http://127.0.0.1/index.php">Início</a></li>
                <li>
                    <a id="list" target="_self" href="http://127.0.0.1/pages/genrer_table.php">Gêneros</a>
                    <ul>
                        <li><a href="http://127.0.0.1/pages/genrer.php?genero=epico">Épico</a></li>
                        <li><a href="http://127.0.0.1/pages/genrer.php?genero=terror">Terror</a></li>
                        <li><a href="http://127.0.0.1/pages/genrer.php?genero=ficcao">Ficção Científica</a></li>
                        <li><a href="http://127.0.0.1/pages/genrer.php?genero=realismo">Realismo</a></li>
                    </ul>
                </li>
                <li><a href="http://127.0.0.1/pages/fale.php">Fale com a Gente</a></li>
                <li><a href="http://127.0.0.1/pages/us.php">Quem Somos</a></li>           
            </ul>
            <div id="divBusca"> 
            <form method="GET" id="form_pesquisa" action="http://127.0.0.1/pages/booksearch.php">
                    <img id="searchIMG" src="/img/search.png" alt="Buscar">
                    <input type="text" id="pesquisa" name="pesquisa" placeholder="Nome do Livo..."/>
                    <a href=""><input type="submit" id="btnBusca"></a>
                </form>          
                <ul id="menu_pesquisa" class="resultado">
                </ul>
            </div>
            
        </nav>
    </header>
    <main id="main">
        <div>
        <?php

        $genero = $_GET['genero'];

        include_once('../scripts/connection.php');

        $genero = "SELECT * FROM livros WHERE id_genero LIKE '$genero'";
        $resultado = mysqli_query($conn, $genero);
        $rows = mysqli_fetch_assoc($resultado);

        if (mysqli_num_rows($resultado) <= 0) {
            echo "<h2>".'Houve um problema :('."</h2>";    
        } else {
            echo "<h2>".$rows['genero']."</h2>";
        }

        $resultado = mysqli_query($conn, $genero);

        if (mysqli_num_rows($resultado) <= 0) {
            echo "<h3>&nbsp;Nenhum Livro foi Encontrado :(</h3>";
        } else {
            while ($rows = mysqli_fetch_assoc($resultado)) {
                echo "<div id='genero_busca'><a href='http://127.0.0.1/pages/book.php?bk=".$rows['id']."'>";
                echo "<h3>&nbsp;".$rows['nome']."</h3>";
                echo "<h3 id='autor'>&nbsp;Autor: ".$rows['autor']." - Ano de Publicação: ".$rows['ano_publicacao']."</h3>";
                echo "</div>";
            };
        }

        ?>
        </div>
    </main>

    <footer>
        <p>Esse site é uma propriedade de Caio Cesar Fagundes Padilha.</p>
        <p>O mesmo foi desenvulvido para atividade de encerramento da matéria de Programação Web.</p>
    </footer>
</body>
</html>