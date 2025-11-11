<?php
session_start();

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

// Credenciais fixas (em produção, use banco de dados!)
if ($usuario === 'admin' && $senha === '1234') {
    $_SESSION['usuario'] = $usuario;

    if (isset($_POST['lembrar'])) {
        setcookie('usuario', $usuario, time() + (30 * 24 * 60 * 60), "/");
    } else {
        setcookie('usuario', '', time() - 3600, "/");
    }

    header('Location: dashboard.php');
    exit;
} else {
    $_SESSION['erro'] = 'Usuário ou senha inválidos.';
    header('Location: index.php');
    exit;
}
?>