<?php
    if (!isset($_GET['pesquisa'])) {
        header("Location: /index.php");
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
    <script src="/scripts/news.js"></script>
    
    <style>
        h4 {
            margin-top: 1%;
            padding-left: 5%;
            margin-bottom: 0;
        }
        #info {
            margin-top: 0;
            padding-top: 0;
            padding-bottom: 0;
        }
        #book {
            margin: 0 auto;
            text-align: center;
            width: 600px;
            border-bottom: 1px solid black;
        }
        #book:hover {
            text-decoration: underline;
        }
        #false {
            margin: 0 auto;
            text-align: center;
            width: 600px;
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

            $busca = $_GET['pesquisa'];

            include_once('../scripts/connection.php');

            $busca = "SELECT id, nome, autor, ano_publicacao FROM livros WHERE nome_interno LIKE '%$busca%'";
            $resultado = mysqli_query($conn, $busca);

            if(mysqli_num_rows($resultado) <= 0) {
                echo "<div id='false'>";
                    echo "<h4>Nenhum Livro Encontrado</h4>";
                    echo "</div>";
            } else {
                while ($rows = mysqli_fetch_assoc($resultado)) {
                    echo "<div id='book'><a href='http://127.0.0.1/pages/book.php?bk=".$rows['id']."'>";
                    echo "<h4>".$rows['nome']."</h4>";
                    echo "<h4 id='autor'>&nbsp;Autor: ".$rows['autor']." - Ano de Publicação: ".$rows['ano_publicacao']."</h4>";
                    echo "</a></div>";
                }
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