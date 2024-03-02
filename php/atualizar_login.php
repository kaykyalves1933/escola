<?php
include_once "../factory/conexao.php";

if (isset($_POST['codigo'])) {
    $id = $_POST['codigo'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $login = $_POST['login_user'];
    $senha = $_POST['senha'];
    $cargo = $_POST['cargo'];

    
    $atualizar = "UPDATE tblogin SET nome='$nome', email='$email', login_user='$login', senha='$senha', cargo='$cargo' WHERE codigo='$id'";
    
    if (mysqli_query($conn, $atualizar)) {
        echo "Login atualizado com sucesso.";

        header("Location: ../configuracao.php");
    } else {
        echo "Erro ao atualizar Login: " . mysqli_error($conn);
    }
} else {
    echo "Informações necessárias não fornecidas.";
}
?>
</br>
<a href="../configuracao.php">Voltar</a>