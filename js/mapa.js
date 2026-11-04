const botoes = document.querySelectorAll('.spot');
const info = document.querySelector('#map-info');

botoes.forEach((botao) => {
  botao.addEventListener('click', () => {
    botoes.forEach((b) => b.classList.remove('on'));
    botao.classList.add('on');

    const nome = document.createElement('strong');
    nome.textContent = botao.dataset.local + ': ';
    info.replaceChildren(nome, document.createTextNode(botao.dataset.info));
  });
});
