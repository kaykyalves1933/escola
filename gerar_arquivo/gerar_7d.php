<?php

session_start();
ob_start();

include_once "../factory/conexao.php"; 


$query_alunos = "SELECT codigo, nome, ra, tutor FROM tbalunos WHERE ra= '7º ano D' ORDER BY codigo DESC";
$resultado_aluno = $conn->query($query_alunos); 

if ($resultado_aluno && $resultado_aluno->num_rows != 0) {
    header('Content-Type: text/csv; charset=UTF-8');
    header('Content-Disposition: attachment; filename=arquivo.csv');

    $resultado = fopen("php://output", 'w');
    
    fputs($resultado, $bom =( chr(0xEF) . chr(0xBB) . chr(0xBF) ));

    $cabecalho = ['ID', 'NOME', 'SERIE', 'TUTOR'];
    fputcsv($resultado, $cabecalho, ';');

    while ($row_aluno = $resultado_aluno->fetch_assoc()) { 
        
        $data = [
            $row_aluno['codigo'], 
            $row_aluno['nome'],
            $row_aluno['ra'],
            $row_aluno['tutor']
        ];
        fputcsv($resultado, $data, ';');
    }
    fclose($resultado);
} else {
    $_SESSION['msg'] = "<p>Aluno não encontrado</p>";
    header("Location: ../index.php");
    exit();
}

?>