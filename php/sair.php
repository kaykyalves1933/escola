<?php
    session_start();
    unset($_SESSION['cxlogin']);
    unset($_SESSION['cxsenha']);
    header("Location: ../index.php");
?>