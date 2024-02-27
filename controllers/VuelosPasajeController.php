<?php

class VuelosPasajeController {

    // Obtiene una instancia del modelo y de la vista de tareas
    private $viewVuelosPasaje;
    private $viewVuelos;
    private $serviceVuelos;
    private $servicePasajes;
    public function __construct() {
        $this->viewVuelosPasaje = new VuelosPasajeView();
        $this->viewVuelos = new VuelosView();

        $this->serviceVuelos= new VuelosService();
        $this->servicePasajes = new PasajeService();
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
    
    public function verVueloData() {
        $this->viewSelectIntro();
        
        
    }
    public function formManager() {
        
        if($_SERVER['REQUEST_METHOD']){
            
            if(!isset($_POST['vuelo']) || empty($_POST['vuelo'])){
//                $this->viewSelectIntro(true);
                $this->viewVuelosPasaje->showError('Escoja un código');
            }
            
            if(isset($_POST['verPasaje']) && isset($_POST['vuelo'])){
                $this->verVueloData();
                //Get the vuelo id
                $vueloId = filter_input(INPUT_POST, "vuelo");                
                
                $pasajes = $this->servicePasajes->requestePasajesOfVuelo($vueloId);
                
                $this->viewVuelosPasaje->showStartTable();
                
                if($pasajes === "false" || !$pasajes){
                    $this->viewVuelosPasaje->showError("No se han encontrado pasajes");
                    exit();
                }
                
                foreach ($pasajes->resultado as $pasaje){
                    $this->viewVuelosPasaje->showPasajes($pasaje->idpasaje, $pasaje->pasajerocod, $pasaje->numasiento, $pasaje->clase, $pasaje->pvp, $pasaje->nombre, $pasaje->pais);
                }
                    
                
                $this->viewVuelosPasaje->showEndTable();

                exit();
            }
            
            //Show the intro of page
            $this->verPasajeData();
            
            if( isset($_POST['verVuelo']) && isset($_POST['vuelo']) ){
                
                //Get the vuelo id
                $vueloId = filter_input(INPUT_POST, "vuelo");
                
                
                //Get the vuelo data from that id
                $vueloData = $this->serviceVuelos->requestOneVuelo($vueloId);
                
                //Show the data of the vuelo
                $this->viewVuelosPasaje->showVueloData($vueloData->identificador, $vueloData->aeropuertoorigen, $vueloData->aeropuertodestino, $vueloData->tipovuelo, $vueloData->fechavuelo, $vueloData->descuento);
                exit();
            }
            
           
        }
            
        
        
    }
    
}
