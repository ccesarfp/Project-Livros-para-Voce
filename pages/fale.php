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
        #contato {
            margin-left: 10%;
            flex-direction: column;
        }
        .campos {
            width: 500px;
            margin-bottom: 0.2%
        }
        textarea {
            height: 200px;
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
            <h2>Fale com a Gente</h2> 
            <h4>&nbsp;Olá, tudo bem?</h4>
            <h4>&nbsp;Não gostou de algo? Quer pedir algum livro? Tem alguma sugestão para melhorar o site?</h4>
            <h4>&nbsp;Então fale com a gente &#128540;</h4>
            <form id="contato" method="POST" action="https://formsubmit.co/ccfpadilha@hotmail.com">
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_next" value="http://127.0.0.1/pages/success.php?send=True">
                <input type="field" name="name" class="campos" placeholder="Digite seu nome:"> <br>
                <input type="field" name="email" class="campos" placeholder="Digite seu E-mail:"> <br>
                <textarea name="message" class="campos" placeholder="Digite sua mensagem aqui:"></textarea> <br>
                <input type="submit" id="campos" value="enviar"> <br>
            </form>
        </div>
    </main>
    <footer>
        <p>Esse site é uma propriedade de Caio Cesar Fagundes Padilha.</p>
        <p>O mesmo foi desenvulvido para atividade de encerramento da matéria de Programação Web.</p>
    </footer>
</body>
</html>