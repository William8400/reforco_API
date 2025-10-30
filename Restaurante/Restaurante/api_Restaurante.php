<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

$elogios= $_SERVER['REQUEST_METHOD'];

switch($elogios){
    
    case "POST":
        verificador_de_elogios();
        break;

    default:

        break;
}

function verificador_de_elogios(){

    $resposta_elogio = json_decode(file_get_contents("php://input"), true);

    if ($resposta_elogio['Positiva'] === "Sim")
        echo json_encode("Obrigado por vir visitar o Restaurante da esquina");
    
    else if($resposta_elogio['Positiva'] === "Não"){
        echo json_encode("Nunca mais volte neste lugar seu INSETO");
    }
        
}









?>