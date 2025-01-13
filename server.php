<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
   
    echo json_encode(["message" => "Hola Mundo con RestApi en lenguaje Php"]);
} else {
    
    http_response_code(405);
    echo json_encode(["message" => "Método no permitido"]);
}
?>
