<?php
session_start();

// Verifica se os campos "usuario" e "senha" foram enviados
if (empty($_POST) || empty($_POST["usuario"]) || empty($_POST["senha"])) {
    print "<script>location.href='index.php';</script>";
    exit;
}

include('config.php');

// Captura os valores enviados pelo formulário
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

// Monta a query SQL para verificar o usuário
$sql = "SELECT * FROM usuario
        WHERE usuario = '{$usuario}'
        AND senha = '" . md5($senha) . "'";

$res = $conn->query($sql) or die($conn->error);

$row = $res->fetch_object();
$qtd = $res->num_rows;

// Verifica se o usuário foi encontrado
if ($qtd > 0) {
    // Cria as variáveis de sessão
    $_SESSION["usuario"] = $usuario;
    $_SESSION["nome"] = $row->nome;
    $_SESSION["tipo"] = $row->tipo;

    // Redireciona para o dashboard
    print "<script>location.href='dashboard.php';</script>";
} else {
    // Alerta de erro e redirecionamento
    print "<script>alert('Usuário e/ou senha incorreto(a)');</script>";
    print "<script>location.href='index.php';</script>";
}
?>
