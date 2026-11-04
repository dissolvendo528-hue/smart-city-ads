<?php
$titulo = 'Explore a cidade';
$scriptExtra = 'js/abas.js';
require_once __DIR__ . '/includes/funcoes.php';

$nosso = carregarXml(__DIR__ . '/dados/locais.xml');
$parceiro = carregarXml(__DIR__ . '/dados/parceiro.xml');

require __DIR__ . '/includes/header.php';
?>
<section class="hero">
  <h1>Explore a cidade</h1>
  <p>Compare o que o nosso grupo e o grupo parceiro descobriram sobre o curso de ADS.</p>
</section>

<div class="tabs">
  <button class="tab-btn active" data-aba="painel-p1">Nosso Grupo (P1)</button>

</div>

<section class="tab-panel active" id="painel-p1">
  <?php if ($nosso === null): ?>
    <p class="msg error">Não foi possível carregar <code>dados/locais.xml</code>.</p>
  <?php else: ?>
    <div class="grid">
      <?php foreach ($nosso->local as $local): ?>
        <article class="card">
          <img class="card-img" src="<?= e(urlImagem($local->imagem)) ?>" alt="<?= e($local->nome) ?>">
          <div class="icon"><?= e($local->icone) ?></div>
          <h3><?= e($local->nome) ?></h3>
          <p><?= e($local->descricao) ?></p>
          <ul>
            <?php foreach ($local->recurso as $recurso): ?>
              <li><?= e($recurso) ?></li>
            <?php endforeach; ?>
          </ul>
          <div class="tags"><span class="tag"><?= e($local->tecnologia) ?></span></div>
        </article>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
</section>