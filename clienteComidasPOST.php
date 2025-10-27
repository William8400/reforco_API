<?php

/* Requisição utilizando o método POST para enviar dados  */

$url = "http://localhost/reforco_API/ComidasAPI.php";

/* Montar a estrutura de dados que eu desejo enviar, ARRAY associativo.*/

$novaComida = [
    'Dobradinha' => [
        'ingredientes' => "Bucho de bode, arroz e feijão",
        'modo de preparo' => "Pega o bucho, assa ele , tempera..."
    ]
    ];

/* Montar o esqueleto da requisição HTTP para POST */

$opcoes = [

    'http' => [
        'method' => "POST",
        'header' => "Content-type: application/json\r\n",
        'content' => json_encode($novaComida)
    ]


];

// Transformar o array opcoes em uma estrutura de URL
$contexto = stream_context_create($opcoes);

// Realizar a requisição POST
$resposta = file_get_contents($url, false, $contexto);

echo $resposta;
?>