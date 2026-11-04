# Smart City – Site sobre o curso de ADS

Site em PHP criado como trabalho em grupo da disciplina **Eletiva – Linguagem de Programação** do curso de Análise e Desenvolvimento de Sistemas (FATEC Jundiaí). O objetivo é apresentar o curso de ADS de forma atrativa para alunos do ensino médio, usando o tema de uma cidade inteligente.

## Páginas

| Página | O que faz |
| --- | --- |
| `index.php` | Página inicial com o tema do site |
| `explore.php` | Lê os locais da cidade a partir de um arquivo **XML** (`dados/locais.xml`) |
| `constroi.php` | Lê as profissões da área a partir de um arquivo **JSON** (`dados/profissoes.json`) |
| `profissao.php` | Página de detalhe de cada profissão, aberta a partir da lista JSON |
| `equipe.php` | Integrantes do grupo |

## Tecnologias

PHP, HTML, CSS e JavaScript, com leitura de XML e JSON no servidor.

## Como rodar

1. Instale o [XAMPP](https://www.apachefriends.org/) (ou qualquer servidor com PHP).
2. Copie a pasta do projeto para `htdocs`.
3. Inicie o Apache e acesse `http://localhost/<nome-da-pasta>/index.php`.

## Equipe

Mikael Bento da Silva, Peterson, Murilo, Gabriel Leal e Kauê Barbosa.

**Minha parte (Mikael):** página das profissões lida do JSON (`constroi.php`) e a página de detalhe de cada profissão (`profissao.php`).
