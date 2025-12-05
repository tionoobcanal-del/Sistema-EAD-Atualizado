<?php require __DIR__ . "/../../config/config.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Painel Administrativo — <?php echo $APP_NAME; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="<?php echo asset('assets/css/style.css'); ?>" />
  <style>
    .admin-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 32px;
    }

    .admin-header .status {
      font-size: 14px;
      color: var(--muted);
    }

    .admin-nav {
      display: flex;
      gap: 16px;
    }

    .admin-nav a {
      padding: 8px 12px;
      background: var(--bg-soft);
      border-radius: 8px;
      color: var(--text);
      font-weight: 500;
      transition: background 0.2s ease;
    }

    .admin-nav a:hover {
      background: var(--primary);
    }

    .section-title {
      font-size: 22px;
      font-weight: 700;
      margin-bottom: 18px;
    }

    .course-card {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 12px;
      padding: 20px;
      margin-bottom: 24px;
    }

    .course-card h3 {
      margin: 0 0 10px;
      font-size: 18px;
    }

    .course-card p {
      color: var(--muted);
      font-size: 15px;
      margin-bottom: 12px;
    }

    .course-actions {
      display: flex;
      gap: 12px;
    }

    .course-actions button {
      padding: 8px 14px;
      border: none;
      border-radius: 8px;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.2s ease;
    }

    .btn-edit {
      background: var(--primary);
      color: white;
    }

    .btn-edit:hover {
      background: #c05ac0;
    }

    .btn-delete {
      background: #ff6b6b;
      color: white;
    }

    .btn-delete:hover {
      background: #ff4c4c;
    }
  </style>
</head>
<body>

<header class="header">
  <div class="container">
    <nav class="nav">
      <div class="brand">🎓 <?php echo $APP_NAME; ?></div>
      <div class="nav-links">
        <a class="nav-link" href="<?php echo asset('/pages/courses.php'); ?>">Ver Cursos</a>
        <a class="nav-link" href="<?php echo asset('/pages/admin/'); ?>">Administração</a>
        <a class="nav-link" href="<?php echo asset('/'); ?>">Sair</a>
      </div>
    </nav>
  </div>
</header>

<section class="hero">
  <div class="container">
    <div class="admin-header">
      <div class="section-title">Painel Administrativo</div>
      <div class="status">Logado como <strong>adm</strong></div>
    </div>

    <div class="admin-nav">
      <a href="#">Cursos</a>
      <a href="#">Configurações</a>
    </div>

    <div style="margin-top: 40px;">
  <div class="section-title" style="display: flex; justify-content: space-between; align-items: center;">
    <span>Adicionar Curso</span>
    <button id="toggleForm" class="btn-add">+ Adicionar Curso</button>
  </div>

  <form id="courseForm" style="display: none; margin-top: 20px;">
    <div class="form-group">
      <label for="titulo">Título do Curso</label>
      <input type="text" id="titulo" name="titulo" required />
    </div>
    <div class="form-group">
      <label for="descricao">Descrição</label>
      <textarea id="descricao" name="descricao" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn-login">Salvar Curso</button>
  </form>
</div>


    <div style="margin-top: 40px;">
      <div class="section-title">Cursos Existentes</div>

      <div class="course-card">
        <h3>Excel 2021 — Formação Básica</h3>
        <p>Aprenda a usar o Excel de forma prática: criação de planilhas, fórmulas simples, gráficos e organização de dados para o dia a dia.</p>
        <div class="course-actions">
          <button class="btn-edit">Editar</button>
          <button class="btn-delete">Excluir</button>
        </div>
      </div>

      <!-- Outros cursos aqui -->
    </div>
  </div>
</section>

<footer class="footer">
  <div class="container">
    © <?php echo $APP_YEAR; ?> Plataforma EAD SELECT. <?php echo $APP_AUTHOR; ?>. <?php echo $APP_RIGHTS; ?>.
  </div>
</footer>

</body>
</html>
