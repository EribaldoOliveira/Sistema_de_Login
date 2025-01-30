<?php
    session_start(); // Inicia a sessão

    // Remove variáveis de sessão específicas
    unset($_SESSION["usuario"]);
    unset($_SESSION["nome"]);
    unset($_SESSION["tipo"]);

    // Destrói toda a sessão
    session_destroy();

    // Redireciona para a página inicial
    header("Location: index.php");
    exit; // Finaliza o script corretamente
?>
