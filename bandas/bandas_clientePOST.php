<?php

$url = "http://localhost/reforco_API/bandas/bandas_API.php";

$novaBanda = [
    'The_Beatles' => [
    'origem' => "Liverpool, Inglaterra",
    'genero' => ["Rock", "Pop"],
    'ano_formacao' => 1960,
    'ano_termino' => 1970,
    'descricao' => "The Beatles foram uma das bandas mais influentes da história da música, revolucionando o rock e a cultura popular mundial. Formada por John Lennon, Paul McCartney, George Harrison e Ringo Starr, o grupo criou sucessos atemporais como 'Hey Jude', 'Let It Be' e 'Yesterday'."
]
];

$escolha = [

    'http' => [
        'method' => "POST",
        'header' => "Content-type: application/json\r\n",
        'content' => json_encode($novaBanda)
    ]
];

$contexto = stream_context_create($escolha);

$resposta = file_get_contents($url, false, $contexto);

echo $resposta;