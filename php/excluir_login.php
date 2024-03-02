<?php
    include_once '../factory/conexao.php';

    $cod= $_GET ["id"];

    $excluir = "DELETE FROM tblogin WHERE codigo = '$cod'";
    $executar = mysqli_query($conn,$excluir);
    if($executar)
    {
        echo "Login excluido com sucesso!";
        echo "</br>";
        echo "<a href='../configuracao.php'>Voltar</a>";
    }
    else
    {
        echo "Login não excluido!";
        echo "</br>";
        echo "<a href='../configuracao.php'>Voltar</a>";
    }
?>