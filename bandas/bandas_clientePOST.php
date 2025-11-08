<?php

$url = "http://localhost/reforco_API/bandas_API.php";

$novaBanda = [
    'Mettalica' => [
        'origem' => "Los Angeles, Califórnia, Estados Unidos",
        'genero' => ["Heavy Metal", "Thrash Metal"],
        'ano_formacao' => 1981,
        'descricao' => "Metallica é uma das bandas mais influentes do heavy metal, conhecida por seu som agressivo, velocidade e letras intensas. Tornou-se um dos maiores nomes do metal mundial, com álbuns clássicos como 'Master of Puppets' e 'Metallica' (The Black Album)"
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