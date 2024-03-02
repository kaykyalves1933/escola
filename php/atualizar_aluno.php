<?php
include_once "../factory/conexao.php";

if (isset($_POST['codigo'])) {
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $ra = $_POST['ra'];
    $serie = $_POST['serie'];
    $tutor = $_POST['tutor'];

    
    $atualizar = "UPDATE tbalunos SET nome='$nome', ra='$ra', serie='$serie', tutor='$tutor' WHERE codigo='$codigo'";
    
    if (mysqli_query($conn, $atualizar)) {
        echo "Aluno atualizado com sucesso.";

        header("Location: ../lista_da_sala.php");
    } else {
        echo "Erro ao atualizar aluno: " . mysqli_error($conn);
    }
} else {
    echo "Informações necessárias não fornecidas.";
}
?>
