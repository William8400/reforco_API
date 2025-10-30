<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

$metodo = $_SERVER['REQUEST_METHOD'];

switch($metodo){
    case "GET":
        echo json_encode("Para você acessar o código secreto você tem que digitar ?123 no endpoint da url");
        break;

    case "POST":
        valor_Secreto();
        break;

    default:

        break;
}

function valor_Secreto(){

    $valor = json_decode(file_get_contents("php://input"), true);

    if ($valor['codigo'] === 242424) {
        echo json_encode("Este é o código secreto");
    }
}