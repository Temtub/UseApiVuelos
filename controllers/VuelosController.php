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
        
         
    }

}
