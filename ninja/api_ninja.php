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

        $id = $_GET['id'];
        atualizar_lista_ninjas($id);
        break;

    case "DELETE":

        break;

    default:

        break;
}


function verificar_codigo_secreto(){

    $chave_acesso = json_decode(file_get_contents("php://input"), true);

    if( $chave_acesso['codigo'] === "ABCDE1234")
        echo json_encode("A ".$chave_acesso['nome']." mensagem secreta é:: Não existe mensagem secreta!");
    else 
        echo json_encode("Chave de acesso negada!");
}

function atualizar_lista_ninjas($id){
    
    $lista_ninjas = [
        
        'ninja' => [
            
            '01' => [
                'id' => '01',
                'nome' => "Naruto Uzumaki",
                'idade' => 17,
            ],

            '23' => [
                'id' => '23',
                'nome' => "gabriel jesus",
                'idade' => 21,
            ]
        
        ]
    
    ];

   // $lista_ninjas['ninjas']['01']['nome'];

    if ( $id == $lista_ninjas['ninja']['23']['id']) {
        
        $ninja_atualizado = json_decode( file_get_contents("php://input"),true);
    
        $lista_ninjas['ninja']['23']['nome'] = $ninja_atualizado['nome'];

        echo json_encode( $lista_ninjas['ninja']['23']);
        
    } else {
        
        echo json_encode( "Erro: nenhum ninja cadrastado com esse ID" );
    
    }
}
?>