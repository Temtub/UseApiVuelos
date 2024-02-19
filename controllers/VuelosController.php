<?php

class VuelosController {

    // Obtiene una instancia del modelo y de la vista de tareas
    private $view;
    private $service;

    public function __construct() {
        $this->view = new VuelosView();
        $this->service= new VuelosService();
    }

    /**
     * Function to check if the user and password are correct
     */
    public function viewAllVuelos() {
        
        //Get all the values from the service
        $allVuelos = json_decode($this->service->requestVuelos(), false );
        
        //echo "<br>Salida request_curl<br>";
        //print_r($allVuelos);
        //$vuelosClass = $this->tranformVueloToClass($allVuelos);
        
        $this->view->showAllVuelos($allVuelos);
    }

    public function viewListaVuelos() {
        
        //Get all the values from the service
        $allVuelos = json_decode($this->service->requestVuelos(), false );
        
        //echo "<br>Salida request_curl<br>";
        //print_r($allVuelos);
        //$vuelosClass = $this->tranformVueloToClass($allVuelos);
        
        $this->view->showSelectVuelos($allVuelos);
    }
    
    /**
     * Function to tranform an arrya of vuelos into an array of class vuelos
     * 
     * @param type $allVuelos
     * @return array
     */
//    public function tranformVueloToClass($allVuelos) {
//        
//        $returnVuelos = [];
//        
//        foreach ($allVuelos as $vuelo) {
//            $identificador = $vuelo["identificador"];
//            $aeropuertoOrigen = $vuelo["aeropuertoorigen"];
//            $nombreOrigen = $vuelo["nombreaeropuertoorigen"];
//            $paisOrigen = $vuelo["paisorigen"];
//            $aeropuertoDestino = $vuelo["aeropuertodestino"];
//            $nombreDestino = $vuelo["nombreaeropuertodestino"];
//            $paisDestino = $vuelo["paisdestino"];
//            $tipoVuelo = $vuelo["tipovuelo"];
//            $fechaVuelo = $vuelo["fechavuelo"];
//            $numPasajeros = $vuelo["numeropasajeros"];
//
//            $newFly = new Vuelo($identificador, $aeropuertoOrigen, $nombreOrigen, $paisOrigen, $aeropuertoDestino, $nombreDestino, $paisDestino, $tipoVuelo, $fechaVuelo, $numPasajeros);
//
//            array_push($returnVuelos, $newFly);
//        }
//        
//        return $returnVuelos;
//    }
}
