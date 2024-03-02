<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['cxlogin']) && !empty($_POST['cxsenha'])) {

    include_once "../factory/conexao.php"; 
    $email = $_POST['cxlogin'];
    $senha = $_POST['cxsenha'];

  
    $sql = "SELECT * FROM tblogin WHERE login_user = ?";

    if ($stmt = $conn->prepare($sql)) {
      
        $stmt->bind_param("s", $email);

        $stmt->execute();

        
        $result = $stmt->get_result();

        if ($result->num_rows < 1) {
           
            unset($_SESSION['cxlogin']);
            unset($_SESSION['cxsenha']);
        
            echo "<script>
            alert('Login ou senha incorreto!');
            window.location.href='../index.php';
            </script>";
            exit; 
        } else {
            
            $userData = $result->fetch_assoc();
            
            // Verificando a senha
            if (password_verify($senha, $userData['senha'])) {
                $_SESSION['cxlogin'] = $email;
                
                header('Location: ../home.php');
            } else {
                
                echo "<script>
                alert('Login ou senha incorreto!');
                window.location.href='../index.php';
                </script>";
                exit;
            }
        }

        // Fechando a declaração
        $stmt->close();
    }
} else {
    header('Location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
</head>
<body>
    
</body>
</html>