<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

$metodo = $_SERVER['REQUEST_METHOD'];

switch($metodo){
    case "GET":
        echo json_encode([
            "Instruções => Para acessar a verdade secreta você precisa testar um endpoint no final da URL este parâmetro: descobrir"
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
        echo json_encode("Verdade Secreta: Você é curioso emmmmmm");
    } else {
        echo json_encode("Erro! não é este parâmetro");
    }
}