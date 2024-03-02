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
    <title>TUTORIA FMA</title>
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
</br>
</br>
</br>
<div class="cadastro">
<div class="voltar" style="text-align: left;">
    <a href="home.php"><img src="img/voltar.png" width="40" height="40"></a>
</div>
</br>
</br>
</br>
    <section class="content">
        <div class="centered-button">
            <a href="php/gerar_aluno_sem_tutoria.php" class="cta-button">Aluno sem Tutor</a>     <a href="php/gerar_alunos.php" class="cta-button">Todos os Alunos</a>
            <a href="cadastrar_aluno.php" class="cta-button">Cadastrar aluno</a>     <a href="buscar_aluno.php" class="cta-button">Buscar aluno</a></br></br></br></br>
            <a href="lista_do_tutor.php" class="cta-button">Lista do tutor</a>     <a href="lista_da_sala.php" class="cta-button">Lista da Sala</a>
</br>
</br>
        </div>
        <div>
</body>
</html>