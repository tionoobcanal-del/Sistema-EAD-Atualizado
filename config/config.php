<?php
// Configurações básicas da plataforma
$APP_NAME = "SELECT EAD";
$APP_YEAR = "2025";
$APP_AUTHOR = "Daniel N Tortorelli";
$APP_RIGHTS = "Todos os direitos reservados.";

// URL base (ajuste caso use subdiretórios diferentes)
$BASE_URL = "/selectead/";

// Dados de conexão (vamos conectar depois, por enquanto só declaramos)
$DB_HOST = "localhost";
$DB_NAME = "selectead_db";
$DB_USER = "root";
$DB_PASS = "";

// Função helper para gerar links absolutos
function asset($path) {
  global $BASE_URL;
  return $BASE_URL . $path;

require __DIR__ . "/config/config.php"; // para index.php
require __DIR__ . "/../config/config.php"; // para pages/courses.php
require __DIR__ . "/../../config/config.php"; // para pages/admin/index.php


}

