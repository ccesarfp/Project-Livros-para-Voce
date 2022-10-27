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
        <h2>Gêneros</h2>
        <table>
                <tr>
                    <td><a href="http://127.0.0.1/pages/genrer.php?genero=epico">Épico</a></td>
                    <td><a href="http://127.0.0.1/pages/genrer.php?genero=terror">Terror</a></td>
                    <td><a href="http://127.0.0.1/pages/genrer.php?genero=ficcao">Ficção Científica</a></td>
                    <td><a href="http://127.0.0.1/pages/genrer.php?genero=realismo">Realismo</a></td>
                    <td><a href="http://127.0.0.1/pages/genrer.php?genero=romantismo">Romantismo</a></td>
                </tr>
                <tr>
                    <td><a href="http://127.0.0.1/pages/genrer.php?genero=ficcao_aventura">Ficção de Aventura</a></td>
                </tr>
        </table>
    </main>
    <footer>
        <p>Esse site é uma propriedade de Caio Cesar Fagundes Padilha.</p>
        <p>O mesmo foi desenvulvido para atividade de encerramento da matéria de Programação Web.</p>
    </footer>
</body>
</html>