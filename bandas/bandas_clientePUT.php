<?php

$url ="http://localhost/reforco_API/bandas/bandas_API.php";

$bandaAlterada = [
    "Queen" => [
      "origem" => "Londres, Inglaterra",
      "genero" => ["Rock", "Hard Rock", "Opera Rock"],
      "ano_formacao" => 1970,
      "descricao" => "Queen é lendária e continua influente até hoje."
    ]
];

$mudanca = [
   
    'http' => [
        'method' => "PUT",
        'header' => "Content-type: application/json\r\n",
        'content' => json_encode($bandaAlterada),
        'ignore_errors' => true
    ]
];

$contexto = stream_context_create($mudanca);

$resposta = file_get_contents($url, false, $contexto);

echo $resposta;
