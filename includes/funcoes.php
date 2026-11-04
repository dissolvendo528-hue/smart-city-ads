<?php
function e($texto)
{
    return htmlspecialchars((string) $texto, ENT_QUOTES, 'UTF-8');
}

function carregarXml($caminho)
{
    if (!file_exists($caminho)) {
        return null;
    }

    libxml_use_internal_errors(true);
    $xml = simplexml_load_file($caminho);

    if ($xml === false) {
        return null;
    }

    return $xml;
}

function carregarJson($caminho)
{
    if (!file_exists($caminho)) {
        return null;
    }

    $texto = file_get_contents($caminho);

    return json_decode($texto, true);
}

function urlImagem($nome)
{
    $nome = trim((string) $nome);

    if (str_starts_with($nome, 'http')) {
        return $nome;
    }

    return 'img/' . $nome;
}
