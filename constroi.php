<?php
$titulo = 'Quem constrói a cidade?';
require_once __DIR__ . '/includes/funcoes.php';

$dados = carregarJson(__DIR__ . '/dados/profissoes.json');
$profissoes = $dados['profissoes'] ?? [];

require __DIR__ . '/includes/header.php';
?>
<section class="hero">
  <h1>Quem constrói a cidade?</h1>
  <p>Estas profissões vêm do arquivo <code>dados/profissoes.json</code>. Cada uma ajuda a manter a cidade funcionando.
  </p>
</section>

<?php if (count($profissoes) === 0): ?>
  <p class="msg error">Não foi possível carregar <code>dados/profissoes.json</code>. Verifique se o arquivo existe e está
    bem formado.</p>
<?php else: ?>
  <div class="grid">
    <?php foreach ($profissoes as $p): ?>
      <a class="card-link" href="profissao.php?id=<?= urlencode($p['id'] ?? '') ?>">
        <article class="card">
          <img class="card-img" src="img/<?= e($p['imagem'] ?? '') ?>" alt="<?= e($p['titulo'] ?? '') ?>">
          <div class="icon"><?= e($p['icone'] ?? '') ?></div>
          <h3><?= e($p['titulo'] ?? '') ?></h3>
          <p><?= e($p['descricao'] ?? '') ?></p>
          <div class="tags">
            <?php foreach (($p['tecnologias'] ?? []) as $tec): ?>
              <span class="tag"><?= e($tec) ?></span>
            <?php endforeach; ?>
          </div>
          <span class="more">Saiba mais →</span>
        </article>
      </a>
    <?php endforeach; ?>
  </div>
<?php endif; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>