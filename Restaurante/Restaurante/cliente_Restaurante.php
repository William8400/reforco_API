<?php

$url = "http://localhost/reforco_API/Restaurante/api_Restaurante.php";

$mensagens = [
    'Positiva' => 'Sim'
];

$estrutura_Http = [
    'http' => [
        'method' => "POST",
        'header' => "Content-Type: application/json\r\n",
        'content' => json_encode($mensagens)
    ]
];

$contexto = stream_context_create($estrutura_Http);

$resposta = file_get_contents($url, false, $contexto);

echo $resposta;