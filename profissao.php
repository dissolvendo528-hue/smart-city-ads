<?php
require_once __DIR__ . '/includes/funcoes.php';
$dados = carregarJson(__DIR__ . '/dados/profissoes.json');
$profissoes = $dados['profissoes'] ?? [];

$id = $_GET['id'] ?? '';

$atual = null;
foreach ($profissoes as $p) {
  if (is_string($id) && ($p['id'] ?? '') === $id) {
    $atual = $p;
    break;
  }
}

if ($atual === null) {
  http_response_code(404);
  $titulo = 'Profissão não encontrada';
} else {
  $titulo = $atual['titulo'];
}

$menuAtivo = 'constroi.php';
require __DIR__ . '/includes/header.php';
?>
<a class="back" href="constroi.php">← Voltar para as profissões</a>
<?php if ($atual === null): ?>
  <p class="msg error">Profissão não encontrada. Volte para a lista e escolha uma das opções.</p>
<?php else:
  $d = $atual['detalhes'] ?? [];
  $tempo = $d['tempo'] ?? [];
  ?>
  <section class="hero">
    <h1><?= e($atual['icone'] ?? '') ?>     <?= e($atual['titulo']) ?></h1>
    <p><?= e($atual['descricao'] ?? '') ?></p>
  </section>
  <img class="detail-img" src="img/<?= e($atual['imagem'] ?? '') ?>" alt="<?= e($atual['titulo']) ?>">
  <h2 class="sec">Como funciona</h2>
  <div class="text">
    <?php foreach (($d['sobre'] ?? []) as $paragrafo): ?>
      <p><?= e($paragrafo) ?></p>
    <?php endforeach; ?>
  </div>
  <h2 class="sec">O que faz no dia a dia</h2>
  <ul class="list">
    <?php foreach (($d['dia_a_dia'] ?? []) as $item): ?>
      <li><?= e($item) ?></li>
    <?php endforeach; ?>
  </ul>
  <h2 class="sec">Quanto tempo leva para aprender?</h2>
  <p class="sub">Para quem está começando do zero.</p>
  <div class="time-box"><?= e($tempo['resumo'] ?? '') ?></div>
  <ol class="steps">
    <?php foreach (($tempo['etapas'] ?? []) as $etapa): ?>
      <li><span><?= e($etapa['fase'] ?? '') ?></span><span class="prazo"><?= e($etapa['prazo'] ?? '') ?></span></li>
    <?php endforeach; ?>
  </ol>
  <?php if (!empty($tempo['aviso'])): ?>
    <p class="note"><?= e($tempo['aviso']) ?></p>
  <?php endif; ?>
  <h3 class="sources-title">Fontes consultadas</h3>
  <ul class="sources">
    <?php foreach (($tempo['fontes'] ?? []) as $fonte):
      $url = $fonte['url'] ?? '';
      $urlSegura = str_starts_with($url, 'https://');
      ?>
      <li>
        <?php if ($urlSegura): ?>
          <a href="<?= e($url) ?>" target="_blank" rel="noopener noreferrer"><?= e($fonte['nome'] ?? '') ?></a>
        <?php else: ?>
          <strong><?= e($fonte['nome'] ?? '') ?></strong>
        <?php endif; ?>
        <span> — <?= e($fonte['info'] ?? '') ?></span>
        </td>
      <?php endforeach; ?>
  </ul>
  <h2 class="sec">Primeiros passos</h2>
  <ol class="list">
    <?php foreach (($d['primeiros_passos'] ?? []) as $passo): ?>
      <li><?= e($passo) ?></li>
    <?php endforeach; ?>
  </ol>
  <?php if (!empty($d['curiosidade'])): ?>
    <p id="map-info"><strong>Curiosidade:</strong> <?= e($d['curiosidade']) ?></p>
  <?php endif; ?>
  <h2 class="sec">Conheça também</h2>
  <div class="tags">
    <?php foreach ($profissoes as $outra):
      if (($outra['id'] ?? '') === ($atual['id'] ?? '')) {
        continue;
      }
      ?>
      <a class="tag tag-link" href="profissao.php?id=<?= urlencode($outra['id'] ?? '') ?>"><?= e($outra['icone'] ?? '') ?>
        <?= e($outra['titulo'] ?? '') ?></a>
    <?php endforeach; ?>
  </div>
<?php endif; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>