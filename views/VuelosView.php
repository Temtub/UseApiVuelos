<?php

class VuelosView{
    // Muestra la lista de tareas
    public function showAllVuelos($allVuelos) {
                //print_r($allVuelos);
        echo '<table class="table table-striped custom-table">
        <thead>
            <tr>
                <th scope="col">Identificador</th>
                <th scope="col">Aeropuerto de orígen</th>
                <th scope="col">Aeropuerto de destíno</th>
                <th scope="col">Tipo</th>
                <th scope="col">Fecha</th>
                <th scope="col">Pais origen</th>
                <th scope="col">Pais destino</th>
                <th scope="col">Nº Pasajéros</th>
            </tr>
        </thead>
        <tbody>';
        
        foreach ($allVuelos as $vuelo){
            
            echo '<tr>
                <td scope="col">'.$vuelo->identificador.'</td>
                <td scope="col">'.$vuelo->aeropuertoorigen.' - '. $vuelo->nombreaeropuertoorigen.'</td>
                <td scope="col">'.$vuelo->aeropuertodestino.' - '. $vuelo->nombreaeropuertodestino.'</td>
                <td scope="col">'.$vuelo->tipovuelo.'</td>
                <td scope="col">'.$vuelo->fechavuelo.'</td>
                <td scope="col">'.$vuelo->paisorigen.'</td>
                <td scope="col">'.$vuelo->paisdestino.'</td>
                <td scope="col">'.($vuelo->numeropasajeros === 0 ? "Vacío" : $vuelo->numeropasajeros).'</td>
            </tr>';
        }   
        
        echo '</tbody></table>';
        
        
    }

    public function showSelectVuelos($allVuelos) {
        
        $html = '<select>';
        $html .= '<option disabled selected value="">Seleccione un código</option>';
        foreach($allVuelos as $vuelo){
            $html .= '<option value="'.$vuelo->identificador.'">'. $vuelo->identificador .' - '. $vuelo->aeropuertoorigen. ' - '. $vuelo->aeropuertodestino.'</option>';
        }
        $html .= '</select>';
        
        return $html;
    }

    public function showMessage($errorMsg, $type="normal", $img=null) {
        
        echo '<div class="message '.$type.'">'.$errorMsg.'</div>';
        echo `<img src="\Reservas-Hotel\views\assets\images\`.$img"/>`; 
    }
    
}

