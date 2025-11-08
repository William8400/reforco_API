<?php

/* Cabeçalho da API */

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

/* Sistema da Api */

$metodo = $_SERVER["REQUEST_METHOD"]; 

switch($metodo) {
    case "GET":
        visualizarGET();
        break;

    case "POST":
        criarPOST();
        break;

    case "PUT":
        editarPUT();
    
        break;

    case "DELETE":
        // removerDELETE();
        
        default:
         
         echo "Erro, Método inválido";
    
        break;
} 

function visualizarGET() {
    
    $bandas = json_decode(file_get_contents("bandas.json"), true );

    $escolha_Do_Cliente = $_GET['banda'];

    if ($escolha_Do_Cliente == "Mamonas_Assassinas") {
        
        $valor_cliente = $bandas['bandas']['Mamonas_Assassinas'];
        
        echo json_encode($valor_cliente);
    } else if ($escolha_Do_Cliente == "Queen"){
        $valor_cliente = $bandas['bandas']['Queen'];
        echo json_encode($valor_cliente);
    } else {
        echo json_encode($bandas);
    }
}

function criarPOST() {

    $novaBanda = json_decode(file_get_contents("php://input"), true);

    $bandas = json_decode(file_get_contents("bandas.json"), true);

    $bandas['bandas'] += $novaBanda;

    file_put_contents("bandas.json", json_encode($bandas, JSON_PRETTY_PRINT));

    echo json_encode("Inserimos com sucesso!");


}

function editarPUT() {
    
    $bandaAlterada = json_decode(file_get_contents("php://input"), true);

    $novaBanda = json_decode(file_get_contents("bandas.json"), true);

    $nomeBanda = array_key_first($bandaAlterada);

    
    
    if (isset($novaBanda['bandas'][$nomeBanda])) {
        $novaBanda['bandas'][$nomeBanda] = $bandaAlterada[$nomeBanda];

        file_put_contents("bandas.json", json_encode($novaBanda, JSON_PRETTY_PRINT));

        echo json_encode(["mensagem" =>  " Nome: '$nomeBanda' atualizado com sucesso!"]);
        return;
    }

    echo json_encode(["erro" => "Banda '$nomeBanda' não encontrado"]);
    
}




?>