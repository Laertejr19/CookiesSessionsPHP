<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    :root {
      --primary: #007BFF;
      --danger: #dc3545;
      --light: #f8f9fa;
      --dark: #343a40;
    }
    * { box-sizing: border-box; }
    body {
      background: #f2f2f2;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      padding: 20px;
    }
    .login-container {
      background: white;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 350px;
    }
    h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: var(--dark);
    }
    label {
      display: block;
      margin-top: 1rem;
      font-weight: 600;
      color: #555;
    }
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-top: 6px;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 1rem;
    }
    .checkbox {
      margin: 1rem 0;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .checkbox input[type="checkbox"] {
      width: auto;
      margin: 0;
    }
    input[type="submit"] {
      margin-top: 1.5rem;
      width: 100%;
      padding: 12px;
      background: var(--primary);
      color: white;
      border: none;
      border-radius: 6px;
      font-weight: bold;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.2s;
    }
    input[type="submit"]:hover {
      background: #0056b3;
    }
    .msg {
      color: var(--danger);
      text-align: center;
      margin: 1rem 0;
      padding: 10px;
      background: #ffe6e6;
      border-radius: 6px;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>

    <?php if (isset($_SESSION['erro'])): ?>
      <div class="msg">
        <?= htmlspecialchars($_SESSION['erro']) ?>
        <?php unset($_SESSION['erro']); ?>
      </div>
    <?php endif; ?>

    <form action="validar.php" method="post" autocomplete="on">
      <label for="usuario">Usuário:</label>
      <input
        type="text"
        id="usuario"
        name="usuario"
        value="<?= htmlspecialchars($_COOKIE['usuario'] ?? '') ?>"
        autocomplete="username"
        required
      >

      <label for="senha">Senha:</label>
      <input
        type="password"
        id="senha"
        name="senha"
        autocomplete="current-password"
        required
      >

      <div class="checkbox">
        <input
          type="checkbox"
          id="lembrar"
          name="lembrar"
          <?= isset($_COOKIE['usuario']) ? 'checked' : '' ?>
        >
        <label for="lembrar">Lembrar-me</label>
      </div>

      <input type="submit" value="Entrar">
    </form>
  </div>
</body>
</html>
