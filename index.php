<?php
require __DIR__ . "/config/config.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title><?php echo htmlspecialchars($APP_NAME); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="<?php echo asset('/assets/images/favicon.ico'); ?>">
  <link rel="stylesheet" href="<?php echo asset('assets/css/style.css'); ?>" />
</head>
<body>

  <!-- Header -->
  <header class="header">
    <div class="container">
      <nav class="nav">
        <div class="brand"><?php echo htmlspecialchars($APP_NAME); ?></div>
        <div class="nav-links">
          <a class="nav-link" href="<?php echo asset('/pages/courses.php'); ?>">Cursos</a>
          <a class="nav-link" href="<?php echo asset('/pages/admin/'); ?>">Área Administrativa</a>
        </div>
      </nav>
    </div>
  </header>

  <!-- Hero -->
  <section class="hero">
    <div class="container">
      <div class="logo-placeholder">
  <img src="<?php echo asset('assets/images/logo.png'); ?>" alt="Logo SELECT EAD" style="max-width: 100%; max-height: 100%; object-fit: contain;">
</div>
      <div class="hero-title">Bem-vindo ao EVP</div>
      <p class="hero-subtitle">
        Videoaulas objetivas que aceleram sua formação e te preparam para o futuro.
      </p>

      <a class="cta" href="<?php echo asset('/pages/courses.php'); ?>">VEJA OS CURSOS</a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      © <?php echo htmlspecialchars($APP_YEAR); ?> Plataforma EAD SELECT. <?php echo htmlspecialchars($APP_AUTHOR); ?>. <?php echo htmlspecialchars($APP_RIGHTS); ?>.
    </div>
  </footer>

  <script src="<?php echo asset('/assets/js/main.js'); ?>"></script>
</body>
</html>
