<?php
$titulo = 'A Cidade';
$scriptExtra = 'js/mapa.js';

$cardsCurso = [
  ['🧠', 'O que é ADS', 'Curso que forma quem analisa problemas e transforma soluções em software.'],
  ['📚', 'O que o aluno aprende', 'Programação, banco de dados, redes, engenharia de software e trabalho em equipe.'],
  ['🏢', 'Onde pode trabalhar', 'Bancos, hospitais, empresas de games, startups, escolas, órgãos públicos ou por conta própria.'],
  ['⚙️', 'Exemplos de tecnologias', 'JavaScript, Python, Java, C#, SQL, Git, nuvem e inteligência artificial.'],
  ['🚀', 'Por que ADS é importante', 'Tudo que é digital precisa de quem crie, mantenha e melhore. A demanda só cresce.'],
];

$locaisMapa = [
  'Hospital' => ['🏥', 'Prontuário digital, agendamento online e telemedicina. ADS organiza a saúde.'],
  'Banco' => ['🏦', 'Apps, Pix, antifraude e segurança. Cada transação passa por um sistema.'],
  'Game Studio' => ['🎮', 'Jogos em Unity e C#. Lógica, arte e diversão viram código.'],
  'Escola' => ['🏫', 'Plataformas de ensino, notas e aulas online desenvolvidas por analistas.'],
  'Trânsito' => ['🚦', 'Semáforos inteligentes e apps de rota que reduzem congestionamentos.'],
  'Empresa' => ['🏢', 'ERP, CRM e automação. Sistemas que fazem negócios funcionarem.'],
  'Laboratório' => ['🔬', 'Análise de dados, simulações e IA para pesquisa e descobertas.'],
];

require __DIR__ . '/includes/header.php';
?>
<section class="hero">
  <h1>SMART CITY: A tecnologia está em todos os lugares.</h1>
  <p>Você provavelmente utiliza tecnologia todos os dias... Mas quem desenvolve tudo isso? O profissional de Análise e
    Desenvolvimento de Sistemas.</p>
</section>

<h2 class="sec">Conheça o curso</h2>
<div class="grid">
  <?php foreach ($cardsCurso as [$icone, $tituloCard, $texto]): ?>
    <article class="card">
      <div class="icon"><?= e($icone) ?></div>
      <h3><?= e($tituloCard) ?></h3>
      <p><?= e($texto) ?></p>
    </article>
  <?php endforeach; ?>
</div>

<h2 class="sec">Mapa da cidade</h2>
<p class="sub">Clique em um local e veja onde o ADS atua.</p>
<div class="map">
  <?php foreach ($locaisMapa as $nome => [$icone, $info]): ?>
    <button class="spot" data-local="<?= e($nome) ?>"
      data-info="<?= e($info) ?>"><span><?= e($icone) ?></span><?= e($nome) ?></button>
  <?php endforeach; ?>
</div>
<p id="map-info">Selecione um local do mapa.</p>
<?php require __DIR__ . '/includes/footer.php'; ?>