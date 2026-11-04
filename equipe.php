<?php
$titulo = 'Os arquitetos da cidade';

$integrantes = [
  ['avatar' => '🧑‍💻', 'nome' => 'Mikael Bento da Silva', 'cargo' => 'Desenvolvedor Back-End (página JSON)'],
  ['avatar' => '👩‍💻', 'nome' => 'Peterson', 'cargo' => 'Desenvolvedor Front-End'],
  ['avatar' => '🎨', 'nome' => 'Murilo', 'cargo' => 'Designer UI/UX'],
  ['avatar' => '📋', 'nome' => 'Gabriel Leal', 'cargo' => 'Analista de Requisitos'],
  ['avatar' => '🛠️', 'nome' => 'Kauê Barbosa', 'cargo' => 'Desenvolvedor Back-End (página XML)'],
];

require __DIR__ . '/includes/header.php';
?>
<section class="hero">
  <h1>Os arquitetos da cidade</h1>
  <p>A equipe que projetou e programou este site.</p>
</section>

<div class="grid">
  <?php foreach ($integrantes as $i): ?>
    <article class="card member">
      <div class="avatar"><?= e($i['avatar']) ?></div>
      <h3><?= e($i['nome']) ?></h3>
      <p class="role"><?= e($i['cargo']) ?></p>
    </article>
  <?php endforeach; ?>
</div>
<?php require __DIR__ . '/includes/footer.php'; ?>