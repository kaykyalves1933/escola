
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de dados</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
</head>
<body>
   <?php
   include_once "../factory/conexao.php"; 
   $aluno = $_POST["cxra"];
   $consulta = "select *from tbalunos where serie= '$aluno'";
   $executar = mysqli_query($conn, $consulta); 
   $dados = mysqli_fetch_array($executar);
   ?> 
   <div class="cadastro">
   Aluno:</br>
    <input type="text" value="<?php echo $dados["nome"]?>"><br>
    RA:</br>
    <input type="text" value="<?php echo $dados["ra"]?>"><br>
    Série:</br>
    <input type="text" value="<?php echo $dados["serie"]?>"><br>
    Tutor:</br>
    <input type="text" value="<?php echo $dados["tutor"]?>"><br>
</br>
    <a href="../buscar_aluno.php">Voltar</a>
</div>
    </body>
</html>