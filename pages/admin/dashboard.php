<?php require __DIR__ . "/../../config/config.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Painel Administrativo — <?php echo $APP_NAME; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="<?php echo asset('assets/css/style.css'); ?>" />
</head>
<body>

<header class="header">
  <div class="container">
    <nav class="nav">
      <div class="brand">🎓 <?php echo $APP_NAME; ?></div>
      <div class="nav-links">
        <a class="nav-link" href="<?php echo asset('/'); ?>">Início</a>
        <a class="nav-link" href="<?php echo asset('/pages/courses.php'); ?>">Cursos</a>
      </div>
    </nav>
  </div>
</header>

<section class="hero">
  <div class="container">
    <div class="hero-title">Painel Administrativo</div>
    <p class="hero-subtitle">Bem-vindo, administrador. Aqui você poderá gerenciar cursos, aulas e usuários.</p>
    <a class="cta" href="<?php echo asset('/'); ?>">Voltar ao início</a>
  </div>
</section>

<footer class="footer">
  <div class="container">
    © <?php echo $APP_YEAR; ?> Plataforma EAD SELECT. <?php echo $APP_AUTHOR; ?>. <?php echo $APP_RIGHTS; ?>.
  </div>
</footer>

</body>
</html>
