<?php
$chave_API = "AIzaSyDkHg7pl-pHtIPDJ0qeYjnqtJOU0G-EsGs";

$url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=$chave_API";

$dados = [
    "contents" => [
        
            "parts" => [
                
                "text" => "Quem é melhor CR7 ou messi?"
                
            ]
        
    ]
];


$estrutura_HTTP = [
    'http' => [
        'method' => "POST",
        'header' => "Content-Type: application/json\r\n",
        'content' => json_encode($dados)
    ]
];

$contexto = stream_context_create($estrutura_HTTP);

$resposta = file_get_contents($url, false, $contexto);

echo $resposta;