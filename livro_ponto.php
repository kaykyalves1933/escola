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
        <div class="tabelabanco">
        <table>
        <tr>
            <th>ARQUIVO</th>
            <th>EDITAVEL</th>
            <th>PDF</th>
            
            
        </tr>
        <tr><td>LIVRO PONTO ADMINISTRATIVO</td><td><a href="https://1drv.ms/x/s!AnfRteuuxbT8lWE6uZ7ammmHUAMl?e=COPrKW"><img src="img/excel.png" width="30" height="30"></a></td><td><a href="https://1drv.ms/b/s!AnfRteuuxbT8lWgzThnY2eZIoW53?e=J6pJN2"><img src="img/pdf.png" width="30" height="30"></a></td></tr>
        <tr><td>LIVRO PONTO DOCENTE</td><td><a href="https://1drv.ms/x/s!AnfRteuuxbT8lWMkg-ECyVj6637M?e=k3YyHX"><img src="img/excel.png" width="30" height="30"></a></td><td><a href="https://1drv.ms/b/s!AnfRteuuxbT8lWnIMDyOGbDTQX6j?e=caARt0"><img src="img/pdf.png" width="30" height="30"></a></td></tr>
        </table>  
</div>
</br>
</div>
</body>
</html>