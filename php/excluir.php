<?php
    include_once '../factory/conexao.php';

    $cod= $_GET ["id"];

    $excluir = "DELETE FROM tbalunos WHERE codigo = '$cod'";
    $executar = mysqli_query($conn,$excluir);
    if($executar)
    {
        echo "Aluno excluido com sucesso!";
        echo "</br>";
        echo "<a href='../lista_da_sala.php'>Voltar</a>";
    }
    else
    {
        echo "Aluno não excluido!";
        echo "</br>";
        echo "<a href='../lista_da_sala.php'>Voltar</a>";
    }
?>