<?php

class VuelosPasajerosPasajeController {

    // Obtiene una instancia del modelo y de la vista de tareas
    private $view;
    private $vuelosView;
    private $pasajeroView;
    
    private $vuelosService;
    private $pasajesService;
    private $pasajeroService;
    
    
    public function __construct() {
        $this->view = new VuelosPasajerosView();
        $this->vuelosView = new VuelosView();
        $this->pasajeroView = new PasajerosView();
        
        $this->vuelosService= new VuelosService();
        $this->pasajesService = new PasajeService();
        $this->pasajeroService = new PasajerosService();
    }

    public function showInsertarPasajeForm(){
        $allPasajeros = $this->vuelosService->requestPasajeros();
        $allVuelos = $this->vuelosService->requestVuelos();
        
        //print_r($allVuelos);
        //var_dump($allVuelos);
        $selectOfPasajeros = $this->pasajeroView->createSelectPasajeros($allPasajeros);
        $selectOfVuelos = $this->vuelosView->showSelectVuelos($allVuelos);
        
        $this->view->showFormInsertVuelo($selectOfPasajeros, $selectOfVuelos);
    }
    
    
    
}
