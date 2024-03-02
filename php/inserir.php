<?php
    include_once "../factory/conexao.php";
    if ($_POST["cxnome"] != "") {
        $aluno = $_POST["cxnome"];
        $ra = $_POST["cxra"];
        $serie = $_POST["cxserie"];
        $tutor = $_POST["cxtutor"];
        
        $gravar = "INSERT INTO tbalunos (nome,serie,ra,tutor) VALUES ('$aluno', '$ra', '$serie', '$tutor')";
        
        $executar = mysqli_query($conn, $gravar);

        if ($executar) {
            echo "Aluno cadastrado com sucesso!";
        } else {
            echo "Erro ao gravar os dados: " . mysqli_error($conn);
        }
    } else {
        echo "Preencher o campo Aluno.";
    }
?>
<br>
<a href="../cadastrar_aluno.php">Voltar</a>