<?php
require_once __DIR__ . '/funcoes.php';

$titulo = $titulo ?? 'SMART CITY';
$paginaAtual = $menuAtivo ?? basename($_SERVER['PHP_SELF']);

$menu = [
  'index.php' => 'A Cidade',
  'explore.php' => 'Explore',
  'constroi.php' => 'Quem constrói',
  'equipe.php' => 'Arquitetos',
];
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($titulo) ?> | SMART CITY</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@600;700&family=Outfit:wght@400;600&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header>
    <a class="logo" href="index.php">SMART CITY</a>
    <nav aria-label="Principal">
      <?php foreach ($menu as $arquivo => $texto): ?>
        <a href="<?= e($arquivo) ?>" <?= ($arquivo === $paginaAtual) ? ' class="active"' : '' ?>><?= e($texto) ?></a>
      <?php endforeach; ?>
    </nav>
  </header>
  <main>