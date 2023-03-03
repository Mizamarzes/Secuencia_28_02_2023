<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=utf-8');
    
    $nombre = (string) "Juan Diego Contreras Melendez";
    $edad = (int) 17;
    $altura = (double) 1.86;
    $esProfesor = (boolean) false;
    
    $pasaTiempo = (array) [
        "estudiar"
        "Programar",
        "Escuchar musica y podcast",
        "Jugar de vez en cuando",
    ];

    $veiculo = (object) [
        "tipo de veiculo" => "Carro",
        "color" => "Azul",
        "llantas" => 4,
        "Frenos" => true,
    ];
    
    $json = (object) [];
    $json->NOMBRE = $nombre;
    $json->EDAD = $edad;
    $json->ALTURA = $altura;
    $json->ESPROFESOR = $esProfesor;
    $json->PASATIEMPO = $pasaTiempo;
    $json->VEICULO = $veiculo;
    $json->SERVER = $_SERVER['HTTP_HOST'];

    echo json_encode($json, JSON_PRETTY_PRINT);
    
?>








