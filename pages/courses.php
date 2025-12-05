<?php require __DIR__ . "/../config/config.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Cursos — SELECT EAD</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="<?php echo asset('/assets/css/style.css'); ?>">
</head>
<body>
  <header class="header">
    <div class="container">
      <nav class="nav">
        <div class="brand"><?php echo htmlspecialchars($APP_NAME); ?></div>
        <div class="nav-links">
          <a class="nav-link" href="<?php echo asset('/'); ?>">Início</a>
          <a class="nav-link" href="<?php echo asset('/pages/admin/'); ?>">Área Administrativa</a>
        </div>
      </nav>
    </div>
  </header>

  <section class="hero">
    <div class="container">
      <div class="hero-title">Cursos</div>
      <p class="hero-subtitle">Em breve você verá aqui a lista de cursos disponíveis.</p>
      <a class="cta" href="<?php echo asset('/'); ?>">Voltar ao início</a>
    </div>
  </section>

  <footer class="footer">
    <div class="container">
      © <?php echo htmlspecialchars($APP_YEAR); ?> Plataforma EAD SELECT. <?php echo htmlspecialchars($APP_AUTHOR); ?>. <?php echo htmlspecialchars($APP_RIGHTS); ?>.
    </div>
  </footer>
</body>
</html>
