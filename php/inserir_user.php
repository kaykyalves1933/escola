<?php
    include_once "../factory/conexao.php";
    if ($_POST["cxnomecompleto"] != "") {
        $nome = $_POST["cxnomecompleto"];
        $email = $_POST["cxemail"];
        $login = $_POST["cxlogin"];
        $senha = password_hash($_POST["cxsenha"], PASSWORD_DEFAULT);
        $cargo = $_POST["cxcargo"];

        
        $gravar = "INSERT INTO tblogin (nome,email,login_user,senha,cargo) VALUES ('$nome', '$email', '$login', '$senha', '$cargo')";
        
        $executar = mysqli_query($conn, $gravar);

        if ($executar) {
            echo  "<script>
            alert('Usuário cadastrado com sucesso!');
            window.location.href='../index.php';
            </script>";
    
        } else {
            echo "Erro ao gravar os dados: " . mysqli_error($conn);
        }
    } else {
        echo "Preencher o campo Nome.";
    }
?>

