const botoes = document.querySelectorAll('.tab-btn');
const paineis = document.querySelectorAll('.tab-panel');

botoes.forEach((botao) => {
  botao.addEventListener('click', () => {
    botoes.forEach((b) => b.classList.remove('active'));
    paineis.forEach((p) => p.classList.remove('active'));

    botao.classList.add('active');
    document.getElementById(botao.dataset.aba).classList.add('active');
  });
});
