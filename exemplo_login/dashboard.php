<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <style>
    body { background: #f2f2f2; font-family: Arial; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
    .dashboard-container { background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 400px; text-align: center; }
    .logout-button { margin-top: 20px; display: inline-block; background: #dc3545; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; }
  </style>
</head>
<body>
<div class="dashboard-container">
  <h1>Bem-vindo, <?= htmlspecialchars($_SESSION['usuario']) ?>!</h1>
  <?php if (isset($_COOKIE['usuario'])): ?>
    <p><em>Você optou por lembrar seu login: <strong><?= htmlspecialchars($_COOKIE['usuario']) ?></strong></em></p>
  <?php endif; ?>
  <a class="logout-button" href="sair.php">Sair</a>
</div>
</body>
</html>