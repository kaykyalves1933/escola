<?php
    session_start();
    include_once "factory/conexao.php";
    if((!isset($_SESSION['cxlogin']) == true) and (!isset($_SESSION['cxsenha']) == true))
    {
        unset($_SESSION['cxlogin']);
        unset($_SESSION['cxsenha']);
        header('Location: index.php');
    }
    $logado = $_SESSION['cxlogin'];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distribuição de TAG</title>
    <script src="js/javinha.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
</head>
<body>
<div class="navbar">
    <a href="home.php">HOME</a>
        <a href="pagina_tutoria.php">TUTORIA</a>
        <a href="livro_ponto.php">LIVRO PONTO</a>
        <a href="formularios.php">FORMULÁRIOS</a>
        <a href="pagina_tag.php">DISTRIBUIÇÃO TAG</a>
        <a href="configuracao.php">CONFIGURAÇÃO</a>
        <div class="centered-button" style="text-align: right;">
            <a href="php/sair.php" class="cta-button">SAIR</a>
</div>
    </div> 

<div class="cadastro">
    <div class="voltar" style="text-align: left;">
        <a href="home.php"><img src="img/voltar.png" width="40" height="40"></a>
</br>

        <iframe src="https://onedrive.live.com/embed?resid=FCB4C5AEEBB5D177%212774&authkey=!ADPM5ip1-FZ9iJo&em=2" width="900" height="500" frameborder="0" scrolling="no"></iframe>
</div>
</div>
</body>
</html>