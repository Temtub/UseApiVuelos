<?php

    class VuelosService{

        //GET
        function requestVuelos() {
            //Declare the url of the service
            $serviceUrl = "http://localhost/restfulVuelos/Vuelos.php";
            //Start the conexion
            $conexion = curl_init();

            //Set the options for the conexion, vamos a caputrar una url, el valor
            curl_setopt($conexion, CURLOPT_URL, $serviceUrl);

            //Type of petition
            curl_setopt($conexion, CURLOPT_HTTPGET, TRUE);

            //The content of the respond
            curl_setopt($conexion, CURLOPT_HTTPHEADER, array('Content-type: application/json'));

            //Configure the receiving
            curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);
            
            $res = curl_exec($conexion);

            if ($res) {
               // echo "<br>Salida request_curl<br>";
                //print_r($res);
                return json_decode($res);
            }
            curl_close($conexion);
        }
        
       

    }