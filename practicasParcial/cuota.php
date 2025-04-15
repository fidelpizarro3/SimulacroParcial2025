<?php

class Cuota{
    private $numero;
    private $montoCuota;
    private $montoInteres;
    private $cancelada;

    public function __construct($numero,$montoCuota,$montoInteres,)
    {
        $this->numero = $numero;
        $this->montoCuota = $montoCuota;
        $this->montoInteres = $montoInteres;
        $this->cancelada = false;   
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getMontoCuota()
    {
        return $this->montoCuota;
    }

    public function getMontoInteres()
    {
        return $this->montoInteres;
    }

    public function getCancelada()
    {
        return $this->cancelada;
    }


    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }


    public function setMontoCuota($montoCuota)
    {
        $this->montoCuota = $montoCuota;

        return $this;
    }
    public function setMontoInteres($montoInteres)
    {
        $this->montoInteres = $montoInteres;

        return $this;
    }
    public function setCancelada($cancelada)
    {
        $this->cancelada = $cancelada;

        return $this;
    }    

    public function __toString()
    {
        return 
        "Numero de Cuota: " . $this->getNumero() . "\n" .
        " monto de cuota: " . $this->getMontoCuota() . "\n" . 
        " monto de interes: " . $this->getMontoInteres() . "\n" .
        " cancelada: " . ($this->getCancelada() ? "Si" : "No");
    }


    public function darMontoFinalCuota(){

        $montoFinal = $this->getMontoCuota() + $this->getMontoInteres();
        return $montoFinal;
    }
}