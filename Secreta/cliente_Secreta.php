<?php 

$url = "http://localhost/reforco_API/Secreta/api_Secreta.php?codigo=242424";

$codigo_Secreto = [
    ''
];

$estrutura_HTTP = [
    'http' => [
        'method' => "POST",
        'header' => "Content-Type: application/json\r\n",
        'content' => json_encode($codigo_Secreto)
    ]
];

$contexto = stream_context_create($estrutura_HTTP);

$resposta = file_get_contents($url, false, $contexto);

echo $resposta;