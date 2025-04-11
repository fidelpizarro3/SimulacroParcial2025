<?php

include_once "moto.php";

class Venta{

    private $numero;
    private $fecha;
    private $cliente; //objeto cliente
    private $coleccionMotos = [];
    private $precioFinal;

    public function __construct($numero,$fecha,$objCliente)
    {
        $this->numero = $numero;
        $this->fecha = $fecha;
        $this->cliente = $objCliente;
        $this->coleccionMotos = [];
        $this->precioFinal = 0;
    }
    //getters
    public function getNumero(){
        return $this->numero;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getCliente(){
    return $this->cliente;
    }  
    public function getPrecioFinal()
    {
        return $this->precioFinal;
    }
    public function getColeccionMotos()
    {
        return $this->coleccionMotos;   
    }


    //setters

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    } 
    public function setPrecioFinal($precioFinal)
    {
        $this->precioFinal = $precioFinal;
        
        return $this;
    }
    public function setColeccionMotos($coleccionMotos)
    {
        $this->coleccionMotos = $coleccionMotos;
    
        return $this;
    }

    
    public function __toString()
    {
        return "Numero: " . $this->getNumero() . " Fecha: " . $this->getFecha() . " Cliente: " . $this->getCliente() . " Precio final: " . $this->getPrecioFinal();
    }

    public function incorporarMoto($objMoto){

    }
}