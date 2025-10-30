<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

$metodo = $_SERVER['REQUEST_METHOD'];

switch($metodo){
    case "GET":
        echo json_encode("Metodo GET consultado com sucesso!");
        break;

    case "POST":
        verificar_codigo_secreto();
        break;

    case "PUT";

        break;

    case "DELETE":

        break;

    default:

        break;
    
}


function verificar_codigo_secreto(){
    
}
?>