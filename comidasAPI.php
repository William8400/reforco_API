<?php

// Cabeçalho da API - Metadados 


header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

// SISTEMA DA API 

$metodo = $_SERVER["REQUEST_METHOD"]; // Guardar o metodo que foi requisitado pelo cliente

switch($metodo){
    case "GET":
         metodoGET();
        break;

    case "POST":
         metodoPOST();
        break;
    
    default:
        echo "Método inválido";
}

function metodoGET(){

    // Manipulação do arquivo JSON

    // Variável para guardar os dados do arquivo JSON no formato Array associativo
    $comidas = json_decode(file_get_contents("comidas.json"), true );

    //Variável para guardar o parâmetro (query string) passado no EndPoint da url
    $escolha_cliente = $_GET['comida'];

    if($escolha_cliente == "feijoada"){

        // Variável para guardar o valor especifico do Array inteiro que temos
        $valor_cliente = $comidas['comidas']['feijoada'];

        // Imprimir em formato JSON o valor da variável para ser uma resposta pro cliente
        echo json_encode($valor_cliente);

    }else if($escolha_cliente == "cuzcuz"){

        $valor_cliente = $comidas['comidas']['cuzcuz'];
        echo json_encode($valor_cliente);

    }else{

        // Caso não atenda a nenhuma opção, ele retorna todas as comidas.
        echo json_encode($comidas);

    } 

}

function metodoPOST(){

    // Guardando numa variável o conteúdo pela URL, decodificando o JSON em Array asscociativo 
    $novaComida = json_decode(file_get_contents("php://input"), true);

    echo json_encode($novaComida);
}


?>