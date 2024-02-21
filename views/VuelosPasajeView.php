<?php

class VuelosPasajeView{
    
    public function showIntro($selectVuelos, $dataChecker) {
        if($dataChecker){
            echo 'Escoja un vuelo.';
            
        }
        echo '<form method="POST" action="'. $_SERVER['PHP_SELF'] . '?controller=VuelosPasaje&action=formManager">
            '.$selectVuelos.' 
                <input type="submit" class="btn btn-primary" name="hotel" value="Ver hotel"/>
                <input type="submit" class="btn btn-primary" name="pasaje" value="Ver pasaje"/>

        </form>';
    }
    public function showVueloData($id, $origen, $destino, $tipo, $fecha, $descuento) {
        echo '<div>
            <h1>Título: '.$id.'</h1>
            <p>Orígen: '.$origen.'</p>
            <p>Destíno: '.$destino.'</p>
            <p>Tipo: '.$tipo. '</p>
            <p>Fecha: '.$fecha.'</p>
            <p>Descuento: '.$descuento.'</p>
        </div>';
    }
    public function showError($msg) {
        echo $msg;
    }
}