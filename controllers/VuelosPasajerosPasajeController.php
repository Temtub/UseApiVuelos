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
        $this->view = new VuelosPasajerosPasajeView();
        $this->vuelosView = new VuelosView();
        $this->pasajeroView = new PasajerosView();
        
        $this->vuelosService= new VuelosService();
        $this->pasajesService = new PasajeService();
        $this->pasajeroService = new PasajerosService();
    }

    public function showInsertarPasajeForm(){
        
        $checkFill = false;
        
        if(isset($_GET['fill']) ){
            $checkFill = true;
        }
        
        $allPasajeros = $this->pasajeroService->requestPasajeros();
        $allVuelos = $this->vuelosService->requestVuelos();
        
        //print_r($allVuelos);
        //var_dump($allVuelos);
        $selectOfPasajeros = $this->pasajeroView->createSelectPasajeros($allPasajeros);
        $selectOfVuelos = $this->vuelosView->showSelectVuelos($allVuelos);
        
        $this->view->showFormInsertVuelo($selectOfPasajeros, $selectOfVuelos, $checkFill);
    }
    
    public function submitPasaje(){
        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
            if(empty($_POST['pasajero']) || empty($_POST['vuelo']) || empty($_POST['asiento']) || empty($_POST['clase']) || empty($_POST['pvp']) ){
                header('Location: '.$_SERVER['PHP_SELF'] . '?controller=VuelosPasajerosPasaje&action=showInsertarPasajeForm&fill');
            }
            
            $data = array(
                'pasajerocod' => filter_input(INPUT_POST, 'pasajero'),
                'identificador' => filter_input(INPUT_POST, 'vuelo'),
                'numasiento' => filter_input(INPUT_POST, 'asiento'),
                'clase' => filter_input(INPUT_POST, 'clase'),
                'pvp' => filter_input(INPUT_POST, 'pvp'),
            );
            $json_data = json_encode($data);
            // URL de la API            
            $curl = curl_init('http://localhost/restfulVuelos/Pasajes.php');
            
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $json_data);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            // Ejecuta la solicitud y obtiene la respuesta
            $response = curl_exec($curl);
            
            // Cierra la conexión cURL
            curl_close($curl);
            
            echo $response;
        }
        
    }
    
}
