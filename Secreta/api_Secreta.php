<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

$metodo = $_SERVER['REQUEST_METHOD'];

switch($metodo){
    case "GET":
        echo json_encode([
            "Instruções => Para acessar a verdade secreta você  primeiro precisa criar um arquivo em php com o nome que você desejar, depois neste arquivo você precisa colocar este link: http://localhost/reforco_API/Secreta/api_Secreta.php em uma variável chamada: (url)."
        ]);
        break;

    case "POST":
        verdade_Secreta();
        break;

    default:
            echo "Método inválido";
        break;
}

function verdade_Secreta(){

    $valor = json_decode(file_get_contents("php://input"), true);

    if ($valor['Verdade Secreta'] === 242424) {
        echo json_encode("A verdade secreta é: Você é muito curioso, tem que parar com isso.");
    } else {
        echo json_encode("Erro! não é este parâmetro");
    }
}