
<?php

include_once "../factory/conexao.php";


if (isset($_GET['id'])) {
    $id = $_GET['id'];

   
    $consulta = "SELECT * FROM tblogin WHERE codigo = '$id'";
    $resultado = mysqli_query($conn, $consulta);

    if ($dados = mysqli_fetch_assoc($resultado)) {
       
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Editar Login</title>
            <link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
        </head>
        <body>
        <div class="cadastro">
        <form action="atualizar_login.php" method="POST">
            Nome Completo:<br>
            <input type="text" placeholder="Digite o nome." name="cxnomecompleto" class="cxnomecompleto" value="<?php echo $dados['nome']; ?>"><br>
            E-mail:<br>
            <input type="email" placeholder="Digite seu E-mail." name="cxemail" class="cxemail" value="<?php echo $dados['email']; ?>"><br>
            Digite um nome de Login:<br>
            <input type="text" placeholder=" Digite um nome de Login." name="cxlogin" class="cxlogin" value="<?php echo $dados['login_user']; ?>"><br>
            Senha:<br>
            <input type="text" placeholder="Digite uma senha." name="cxsenha" class="cxsenha" value="<?php echo $dados['senha']; ?>"><br>
            Cargo:<br>
            <input type="text" placeholder="Digite seu Cargo." name="cxcargo" class="cxcargo" value="<?php echo $dados['cargo']; ?>"><br>
            <input type="submit" value="Atualizar">    
        </form>
    </div>
    </body>
        </html>
        <?php
    } else {
        echo "Login não encontrado.";
    }
} else {
    echo "ID não fornecido.";
}
?>