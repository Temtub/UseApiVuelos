<?php

class VuelosPasajerosController {

    // Obtiene una instancia del modelo y de la vista de tareas
    private $view;
    private $serviceVuelos;

    public function __construct() {
        $this->view = new VuelosPasajerosView();
        $this->serviceVuelos= new VuelosService();

    }

    public function showInsertarPasajeForm(){
        $allPasajeros = $this->serviceVuelos->requestPasajeros();
        $allVuelos = $this->serviceVuelos->requestVuelos();
        
        $this->view->showFormInsertVuelo($allVuelos, $allPasajeros);
    }
}
