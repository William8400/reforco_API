<?php

/* Cabeçalho da API */

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

/* Sistema da Api */

$metodo = $_SERVER["REQUEST_METHOD"]; 

switch($metodo) {
    case "GET":

        break;

    case "POST":

        break;

    case "PUT":

        break;

    case "DELETE":

        default:
         
         echo "Cadrasto Inválido";
    
        break;
} 




?>