<?php
require __DIR__ . "/../../config/config.php";

// Verifica login
$erro = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["usuario"] ?? "";
    $senha = $_POST["senha"] ?? "";

    if ($usuario === "adm" && $senha === "adm") {
        header("Location: dashboard.php");
        exit;
    } else {
        $erro = "Usuário ou senha inválidos.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Administração — <?php echo $APP_NAME; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="<?php echo asset('assets/css/style.css'); ?>" />
  <style>
    .login-box {
      max-width: 400px;
      margin: 80px auto;
      background: var(--card);
      padding: 32px;
      border-radius: 12px;
      box-shadow: 0 0 24px rgba(0,0,0,0.2);
    }
    .login-box h2 {
      margin-bottom: 24px;
      font-size: 22px;
      text-align: center;
    }
    .form-group {
      margin-bottom: 18px;
    }
    .form-group label {
      display: block;
      margin-bottom: 6px;
      color: var(--muted);
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      border: 1px solid var(--border);
      background: var(--bg-soft);
      color: var(--text);
    }
    .form-group input:focus {
      outline: none;
      border-color: var(--primary);
    }
    .btn-login {
      width: 100%;
      background: var(--primary);
      color: white;
      padding: 12px;
      border: none;
      border-radius: 10px;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.2s ease;
    }
    .btn-login:hover {
      background: #c05ac0;
    }
    .error {
      color: #ff6b6b;
      text-align: center;
      margin-bottom: 12px;
    }
  </style>
</head>
<body>

<header class="header">
  <div class="container">
    <nav class="nav">
      <div class="brand">🎓 <?php echo $APP_NAME; ?></div>
      <div class="nav-links">
        <a class="nav-link" href="<?php echo asset('/pages/courses.php'); ?>">Cursos</a>
        <a class="nav-link" href="<?php echo asset('/pages/admin/'); ?>">Área Administrativa</a>
      </div>
    </nav>
  </div>
</header>

<div class="login-box">
  <h2>Administração</h2>
  <?php if ($erro): ?>
    <div class="error"><?php echo $erro; ?></div>
  <?php endif; ?>
  <form method="post">
    <div class="form-group">
      <label for="usuario">Usuário</label>
      <input type="text" id="usuario" name="usuario" required />
    </div>
    <div class="form-group">
      <label for="senha">Senha</label>
      <input type="password" id="senha" name="senha" required />
    </div>
    <button type="submit" class="btn-login">Entrar</button>
  </form>
</div>

<footer class="footer">
  <div class="container">
    © <?php echo $APP_YEAR; ?> Plataforma EAD SELECT. <?php echo $APP_AUTHOR; ?>. <?php echo $APP_RIGHTS; ?>.
  </div>
</footer>

</body>
</html>
