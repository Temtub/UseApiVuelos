<?php

/**
 * Clase Vuelo
 * 
 * Esta clase representa un vuelo con sus propiedades asociadas.
 */
class Vuelo {
    /**
     * Propiedad identificador
     * 
     * Identificador único del vuelo.
     * 
     * @var mixed
     */
    private $identificador;

    /**
     * Propiedad aeropuertoorigen
     * 
     * Aeropuerto de origen del vuelo.
     * 
     * @var mixed
     */
    private $aeropuertoorigen;

    /**
     * Propiedad aeropuertodestino
     * 
     * Aeropuerto de destino del vuelo.
     * 
     * @var mixed
     */
    private $aeropuertodestino;

    /**
     * Propiedad tipovuelo
     * 
     * Tipo de vuelo, como internacional o nacional.
     * 
     * @var mixed
     */
    private $tipovuelo;

    /**
     * Propiedad fechavuelo
     * 
     * Fecha del vuelo.
     * 
     * @var mixed
     */
    private $fechavuelo;

    /**
     * Propiedad descuento
     * 
     * Descuento aplicado al vuelo.
     * 
     * @var mixed
     */
    private $descuento;

    /**
     * Constructor de la clase Vuelo
     */
    public function __construct($identificador, $aeropuertoorigen, $aeropuertodestino, $tipovuelo, $fechavuelo, $descuento) {
        $this->identificador = $identificador;
        $this->aeropuertoorigen = $aeropuertoorigen;
        $this->aeropuertodestino = $aeropuertodestino;
        $this->tipovuelo = $tipovuelo;
        $this->fechavuelo = $fechavuelo;
        $this->descuento = $descuento;
    }

    /**
     * Getter para obtener el identificador del vuelo
     * 
     * @return mixed
     */
    public function getIdentificador() {
        return $this->identificador;
    }

    /**
     * Setter para establecer el identificador del vuelo
     * 
     * @param mixed $identificador
     * @return void
     */
    public function setIdentificador($identificador) {
        $this->identificador = $identificador;
    }

    /**
     * Getter para obtener el aeropuerto de origen del vuelo
     * 
     * @return mixed
     */
    public function getAeropuertoOrigen() {
        return $this->aeropuertoorigen;
    }

    /**
     * Setter para establecer el aeropuerto de origen del vuelo
     * 
     * @param mixed $aeropuertoorigen
     * @return void
     */
    public function setAeropuertoOrigen($aeropuertoorigen) {
        $this->aeropuertoorigen = $aeropuertoorigen;
    }

    /**
     * Getter para obtener el aeropuerto de destino del vuelo
     * 
     * @return mixed
     */
    public function getAeropuertoDestino() {
        return $this->aeropuertodestino;
    }

    /**
     * Setter para establecer el aeropuerto de destino del vuelo
     * 
     * @param mixed $aeropuertodestino
     * @return void
     */
    public function setAeropuertoDestino($aeropuertodestino) {
        $this->aeropuertodestino = $aeropuertodestino;
    }

    /**
     * Getter para obtener el tipo de vuelo
     * 
     * @return mixed
     */
    public function getTipoVuelo() {
        return $this->tipovuelo;
    }

    /**
     * Setter para establecer el tipo de vuelo
     * 
     * @param mixed $tipovuelo
     * @return void
     */
    public function setTipoVuelo($tipovuelo) {
        $this->tipovuelo = $tipovuelo;
    }

    /**
     * Getter para obtener la fecha del vuelo
     * 
     * @return mixed
     */
    public function getFechaVuelo() {
        return $this->fechavuelo;
    }

    /**
     * Setter para establecer la fecha del vuelo
     * 
     * @param mixed $fechavuelo
     * @return void
     */
    public function setFechaVuelo($fechavuelo) {
        $this->fechavuelo = $fechavuelo;
    }

    /**
     * Getter para obtener el descuento aplicado al vuelo
     * 
     * @return mixed
     */
    public function getDescuento() {
        return $this->descuento;
    }

    /**
     * Setter para establecer el descuento aplicado al vuelo
     * 
     * @param mixed $descuento
     * @return void
     */
    public function setDescuento($descuento) {
        $this->descuento = $descuento;
    }
}
