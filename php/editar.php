
<?php

include_once "../factory/conexao.php";


if (isset($_GET['id'])) {
    $id = $_GET['id'];

   
    $consulta = "SELECT * FROM tbalunos WHERE codigo = '$id'";
    $resultado = mysqli_query($conn, $consulta);

    if ($dados = mysqli_fetch_assoc($resultado)) {
       
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Editar Aluno</title>
            <link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
        </head>
        <body>
        <div class="cadastro">
            <form action="atualizar_aluno.php" method="post">
                <input type="hidden" name="codigo" value="<?php echo $dados['codigo']; ?>">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="<?php echo $dados['nome']; ?>"><br>
                <label for="ra">RA:</label>
                <input type="text" name="ra" value="<?php echo $dados['ra']; ?>"><br>
                <label for="serie">Série:</label>
                <input type="text" name="serie" value="<?php echo $dados['serie']; ?>"><br>
                <label for="tutor">Tutor:</label>
                <select type="text" name="tutor" value="<?php echo $dados['tutor']; ?>"><br>
                <option value="SELECIONE...">SELECIONE...</option>
                <option value="Alessandra">Alessandra</option>
                <option value="Anna Paula">Anna Paula</option>
                <option value="Carlos Roberto">Carlos Roberto</option>
                <option value="Danny">Danny</option>
                <option value="Edna">Edna</option>
                <option value="Ednaldo">Ednaldo</option>
                <option value="Elton">Elton</option>
                <option value="Fatima">Fatima</option>
                <option value="Flavio">Flavio</option>
                <option value="Genadi">Genadi</option>
                <option value="Gisele">Gisele</option>
                <option value="Ivane">Ivane</option>
                <option value="Jose Deivson">Jose Deivson</option>
                <option value="Jose Nildo">Jose Nildo</option>
                <option value="Karla">Karla</option>
                <option value="Magaly">Magaly</option>
                <option value="Marco">Marco</option>
                <option value="Maria Aparecida">Maria Aparecida</option>
                <option value="Maria Helena">Maria Helena</option>
                <option value="Miguel">Miguel</option>
                <option value="Mirian">Mirian</option>
                <option value="Nathalia">Nathalia</option>
                <option value="Nilsilene">Nilsilene</option>
                <option value="Patrícia">Patrícia</option>
                <option value="Regina">Regina</option>
                <option value="Renato">Renato</option>
                <option value="Rodrigo">Rodrigo</option>
                <option value="Rosemeire">Rosemeire</option>
                <option value="Simone Aparecida">Simone Aparecida</option>
                <option value="Valeria">Valeria</option>
                <option value="Viviane">Viviane</option>
                <option value="Willy">Willy</option>
                </select><br>
                <input type="submit" value="Atualizar">
            </form>
    </div>
        </body>
        </html>
        <?php
    } else {
        echo "Aluno não encontrado.";
    }
} else {
    echo "ID não fornecido.";
}
?>
