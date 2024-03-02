
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUTORIA FMA</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
    <script src="../js/javinha.js"></script>
</head>
<body>
    <div class="navbar">
        <a href="../home.php">HOME</a>
        <a href="../pagina_tutoria.php">TUTORIA</a>
        <a href="../livro_ponto.php">LIVRO PONTO</a>
        <a href="../formularios.php">FORMULÁRIOS</a>
        <a href="../configuracao.php">CONFIGURAÇÃO</a>
    </div>

    <div class="cadastro">
    <div class="voltar" style="text-align: left;">
        <a href="../lista_do_tutor.php"><img src="../img/voltar.png" width="40" height="40"></a>
</div>
        <a href="../gerar_arquivo_professor/gerar9.php"><img src="../img/excel.png" width="40" height="40"></a>

        <?php
        session_start();
            include_once "../factory/conexao.php";

            if (!$conn) {
                die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
            }

            $consulta = "SELECT * FROM tbalunos WHERE tutor= 'Flavio'";
            $executar = mysqli_query($conn, $consulta);

            if (!$executar) {
                echo "Erro na consulta: " . mysqli_error($conn);
            } elseif (mysqli_num_rows($executar) > 0) {
                echo '<div class="tabelabanco">
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>NOME</th>
                                <th>SÉRIE</th>
                                <th>RA</th>
                                <th>TUTOR</th>
                                <th>EDITAR</th>
                            </tr>';
                            while ($dados = mysqli_fetch_assoc($executar)) {
                                echo '<tr>
                                        <td>'.htmlspecialchars($dados["codigo"]).'</td>
                                        <td>'.htmlspecialchars($dados["nome"]).'</td>
                                        <td>'.htmlspecialchars($dados["ra"]).'</td>
                                        <td>'.htmlspecialchars($dados["serie"]).'</td>
                                        <td>'.htmlspecialchars($dados["tutor"]).'</td>
                                        <td>
                                           <a href="../php/editar.php?id=' . htmlspecialchars($dados['codigo']) . '">EDITAR</a>
                                           <a href="../php/excluir.php?id=' . htmlspecialchars($dados['codigo']) . '">EXCLUIR</a>
                                        </td>
                                      </tr>';
                            }
                            
                }
                echo '</table></div>';
             
        ?>
        <div class="botao"><button onclick="atualizarPagina()">Atualizar Página</button></div>
    </div>
</body>
</html>