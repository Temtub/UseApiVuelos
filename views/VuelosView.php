<?php

class VuelosView{
    // Muestra la lista de tareas
    public function showAllVuelos($allVuelos) {
        
        foreach ($allVuelos as $vuelo){
            
            echo $vuelo->getIdentificador();
        }       
    }


    public function showMessage($errorMsg, $type="normal", $img=null) {
        
        echo '<div class="message '.$type.'">'.$errorMsg.'</div>';
        echo `<img src="\Reservas-Hotel\views\assets\images\`.$img"/>`; 
    }
    
}

