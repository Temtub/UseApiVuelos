<?php

class PasajerosView{
    // Muestra la lista de tareas
    public function createSelectPasajeros($allPasajeros) {
        
        $cont = 0;
        $html = '<select name="pasajero">';
        $html .= '<option disabled selected value="">Seleccione el pasajero.</option>';
        foreach($allPasajeros as $pasajero){
            $html .= '<option value="'.$pasajero->pasajerocod.'">' .$cont . ' - ' .$pasajero->nombre.'</option>';
            $cont++;
        }
        $html .= '</select>';
        
        return $html;
    
    }
}