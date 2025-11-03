<?php 

$url = "http://localhost/reforco_API/Secreta/api_Secreta.php";

$verdade_Secreta = [
    'Verdade Secreta' => 242424
];

$estrutura_HTTP = [
    'http' => [
        'method' => "POST",
        'header' => "Content-Type: application/json\r\n",
        'content' => json_encode($verdade_Secreta)
    ]
];

$contexto = stream_context_create($estrutura_HTTP);

$resposta = file_get_contents($url, false, $contexto);

echo $resposta;