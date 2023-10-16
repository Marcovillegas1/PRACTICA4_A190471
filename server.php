<?php
//MARCO ANTONIO VILLEGAS GOMEZ 9"J"
    require_once "lib/nusoap.php";
    function getPaises($datos){
        if ($datos == "Paises"){
            return join(",", array(
                "Mexico",
                "Estados Unidos",
                "Canada",
                "Colombia",
                "Costa Rica"));
        }
        else{
            return "No hay paises";
        }
    }
    $server = new soap_server();
    $server->register("getPaises");
    if(!isset($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA =file_get_contents('php://input');
        $server->service($HTTP_RAW_POST_DATA);
?>