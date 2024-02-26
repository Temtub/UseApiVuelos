<?php

class VuelosPasajeView{
    
    public function showIntro($selectVuelos, $dataChecker) {
        if($dataChecker){
            echo 'Escoja un vuelo.';
            
        }
        echo '<form method="POST" action="'. $_SERVER['PHP_SELF'] . '?controller=VuelosPasaje&action=formManager">
            '.$selectVuelos.' 
                <input type="submit" class="btn btn-primary" name="verVuelo" value="Ver vuelo"/>
                <input type="submit" class="btn btn-primary" name="verPasaje" value="Ver pasaje"/>

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
    
    public function showPasajes($idpasaje, $pasajeroCod, $numAsiento, $clase, $pvp, $nombre, $pais) {
        echo '<tr>
                <td scope="col">'.$idpasaje.'</td>
                <td scope="col">'.$pasajeroCod.'</td>
                <td scope="col">'.$nombre.'</td>   
                <td scope="col">'.$pais.'</td>
                <td scope="col">'.$numAsiento.'</td>
                <td scope="col">'.$clase.'</td>
                <td scope="col">'.$pvp.'€</td>
            </tr>';
    }
    
    public function showStartTable() {
        echo '<table class="table table-striped custom-table">
        <thead>
            <tr>
                <th scope="col">Identificador del pasaje</th>
                <th scope="col">Codigo de pasajero</th>
                <th scope="col">Nombre pasajero</th>
                <th scope="col">Pais del pasajero</th>
                <th scope="col">Numero de asiento</th>
                <th scope="col">Clase</th>
                <th scope="col">Precio</th>
            </tr>
        </thead>
        <tbody>';
    }
    
    public function showEndTable() {
      echo '</tbody></table>';  
    }
    public function showError($msg) {
        echo $msg;
    }
}