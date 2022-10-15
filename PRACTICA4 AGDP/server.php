<?php
    require_once "lib/nusoap.php";
    function getMunicipioChis($datos) {
        if($datos == "Municipios") {
            return join(",", array(
                "Ocozocoautla",
                "<br>Berriozabal",
                "<br>Suchiapa",
                "<br>Chicoasén",
                "<br>San Fernando",
                "<br>Cintalapa"));
            }
            else{
                return "No encontramos municipio";
        }
    }
    $server = new soap_server();
    $server->register("getMunicipioChis");
    if( !isset($HTTP_RAW_POST_DATA))$HTTP_RAW_POST_DATA=file_get_contents('php://input');
        $server->service($HTTP_RAW_POST_DATA);

?>