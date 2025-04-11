<?php


class Moto {

    private $codigo;
    private $costo;
    private $anioFabricacion;
    private $descripcion;
    private $ptjeIncrementoAnual;
    private $activa;

    public function __construct($codigo,$costo,$anioFabricacion,$descripcion,$ptjeIncrementoAnual,$activa)
    {
        $this->codigo = $codigo;
        $this->costo = $costo;
        $this->anioFabricacion = $anioFabricacion;
        $this->descripcion = $descripcion;
        $this->ptjeIncrementoAnual = $ptjeIncrementoAnual;
        $this->activa = $activa;
    }

    //Getters

    public function getCodigo(){
        return $this->codigo;
    }
    public function getCosto(){
        return $this->costo;
    }
    public function getAnioFabricacion(){
        return $this->anioFabricacion;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getPtjeIncrementoAnual(){
        return $this->ptjeIncrementoAnual;
    }
    public function getActiva(){
        return $this->activa;
    }

    //Setters

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    public function setCosto($costo){
        $this->costo = $costo;
    }
    public function setAnioFabricacion($anioFabricacion){
        $this->anioFabricacion = $anioFabricacion;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    public function setPtjeIncrementoAnual($incrementoAnual){
        $this->ptjeIncrementoAnual = $incrementoAnual;
    }
    public function setActiva($estado){
        $this->activa = $estado;
    }

    
    
    
    public function __toString()
    {
        return "codigo: " . $this->getCodigo() . " costo: " . $this->getCosto() . " año fabricacion: " . $this->getAnioFabricacion() . " Descripcion: " . $this->getDescripcion() . " estado: " . $this->getActiva();
    }
    
    
    public function darPrecioVenta(){
        if($this->getActiva()){
            $precioVenta = $this->getCosto() + $this->getCosto() * ((date("Y") - $this->getAnioFabricacion())  * $this->getPtjeIncrementoAnual());
        }
        else {
            $precioVenta = -1;
        }
        return $precioVenta;
    }  
}
