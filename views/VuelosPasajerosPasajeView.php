<?php

class VuelosPasajerosPasajeView{
    // Muestra la lista de tareas
    public function showFormInsertVuelo($selectAllPasajeros, $selectAllVuelos, $checkFill) {
        echo '<h1>Inserta un pasaje</h1>';
        
        if($checkFill){
            echo 'Rellene todos los datos';
        }
        
        echo '<form method="POST" action="'. $_SERVER['PHP_SELF'] . '?controller=VuelosPasajerosPasaje&action=submitPasaje" class="d-flex flex-column align-items-center justify-content-center">
            
            <label>Seleccion el pasajero:</label>
            '. $selectAllVuelos .'
                
            <label>Selecciona identificador de vuelo:</label>
            '. $selectAllPasajeros .' 
                
            <label>Número de asiento:</label>
            <input type="number" name="asiento">
            
            <label>Marca la clase:</label>
            <div>
                <input type="radio" id="Turista" name="clase" value="Turista"  />
                <label for="Turista">Turista</label>
                
                <input type="radio" id="Primera" name="clase" value="Primera"  />
                <label for="Primera">Primera</label>
                
                <input type="radio" id="Bussines" name="clase" value="Bussines"  />
                <label for="Bussines">Bussines</label>

            </div>
            
            <label>PVP:</label>
            <input type="number" name="pvp">
            
            <input type="submit">
        </form>';
        
    }
    
}