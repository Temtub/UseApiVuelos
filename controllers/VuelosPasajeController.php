<?php

class VuelosPasajeController {

    // Obtiene una instancia del modelo y de la vista de tareas
    private $viewVuelosPasaje;
    private $viewVuelos;
    private $serviceVuelos;

    public function __construct() {
        $this->viewVuelosPasaje = new VuelosPasajeView();
        $this->viewVuelos = new VuelosView();

        $this->serviceVuelos= new VuelosService();
    }

    /**
     * Function to check if the user and password are correct
     */
    public function viewSelectIntro($dataChecker = false) {
        
        $vuelos = $this->serviceVuelos->requestVuelos();
        $selectVuelos = $this->viewVuelos->showSelectVuelos($vuelos);
        
        $this->viewVuelosPasaje->showIntro($selectVuelos, $dataChecker);
    }

    public function verPasajeData() {
        $this->viewSelectIntro();
        
        
    }
    
    public function verHotelData() {
        $this->viewSelectIntro();
        
        
    }
    public function formManager() {
        
        if($_SERVER['REQUEST_METHOD']){
            
            if(!isset($_POST['vuelo']) || empty($_POST['vuelo'])){
//                $this->viewSelectIntro(true);
                $this->viewVuelosPasaje->showError('Escoja un código');
            }
            
             if(isset($_POST['hotel']) ){
                $this->verHotelData();
                                

                exit();
            }
            
            if(isset($_POST['pasaje']) ){
                $this->verPasajeData();
                $vueloId = filter_input(INPUT_POST, "vuelo");
                print_r($vueloId);
                $vueloData = $this->serviceVuelos->requestOneVuelo(123);
//                print_r($vueloData);
                $this->viewVuelosPasaje->showVueloData($vueloData->identificador, $vueloData->aeropuertoorigen, $vueloData->aeropuertodestino, $vueloData->tipovuelo, $vueloData->fechavuelo, $vueloData->descuento);
                exit();
            }
            
           
        }
            
        
        
    }
    
}