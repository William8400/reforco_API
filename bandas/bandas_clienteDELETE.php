<?php

$url = "http://localhost/reforco_API/bandas/bandas_API.php";

$deletarBanda = [

    "Arctic_Monkeys" => [
        
        "origem" => "Sheffield, Inglaterra",
        "genero" => ["Indie Rock", "Alternative Rock", "Garage Rock"],
        "ano_formacao" => 2002,
        "descricao" => "Arctic Monkeys é uma banda britânica de rock alternativo formada em 2002, conhecida por suas letras inteligentes, som inovador e pela liderança carismática de Alex Turner."
    ]

];

$remover = [
   
    'http' => [
        'method' => "DELETE",
        'header' => "Content-type: application/json\r\n",
        'content' => json_encode($deletarBanda),
        'ignore_errors' => true
    ]
];

$contexto = stream_context_create($remover);

$resposta = file_get_contents($url, false, $contexto);

echo $resposta;