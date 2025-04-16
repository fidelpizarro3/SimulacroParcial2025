<?php

include_once "cuota.php";
include_once "financiera.php";
include_once "persona.php";


class Prestamo{

    private $identificacion;
    private $fechaOtorgamiento;
    private $monto;
    private $cantidadCuotas;
    private $tazaInteres;
    private $coleccionCuotas = [];
    private $referenciaPersona;


    public function __construct($identificacion, $monto,$cantidadCuotas,$tazaInteres,$referenciaPersona)
    {
        $this->identificacion = $identificacion;
        $this->fechaOtorgamiento = date("Y-m-d");
        $this->monto = $monto;
        $this->cantidadCuotas = $cantidadCuotas;
        $this->tazaInteres = $tazaInteres;
        $this->referenciaPersona = $referenciaPersona;
        $this->coleccionCuotas = [];    
    }


    //GETTERS(METODOS DE ACCESO)
    public function getIdentificacion()
    {
        return $this->identificacion;
    }

    public function getFechaOtorgamiento()
    {
        return $this->fechaOtorgamiento;
    }

    public function getMonto()
    {
        return $this->monto;
    }

    public function getCantidadCuotas()
    {
        return $this->cantidadCuotas;
    }

    public function getTazaInteres()
    {
        return $this->tazaInteres;
    }

    public function getColeccionCuotas()
    {
        return $this->coleccionCuotas;
    }

    public function getReferenciaPersona()
    {
        return $this->referenciaPersona;
    }



    //SETTERS(METODOS DE MODIFICACION)
    public function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;

        return $this;
    }

    public function setFechaOtorgamiento($fechaOtorgamiento)
    {
        $this->fechaOtorgamiento = $fechaOtorgamiento;

        return $this;
    }
    
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    public function setCantidadCuotas($cantidadCuotas)
    {
        $this->cantidadCuotas = $cantidadCuotas;

        return $this;
    }

    public function setTazaInteres($tazaInteres)
    {
        $this->tazaInteres = $tazaInteres;

        return $this;
    }


    public function setColeccionCuotas($coleccionCuotas)
    {
        $this->coleccionCuotas = $coleccionCuotas;

        return $this;
    }


    public function setReferenciaPersona($referenciaPersona)
    {
        $this->referenciaPersona = $referenciaPersona;

        return $this;
    }

    public function __toString()
    {
        return 
        "identificacion: " . $this->getIdentificacion() . "\n" .
        " Monto: " . $this->getMonto() . "\n" . 
        " cantiad de cuotas: " . $this->getCantidadCuotas() . "\n" .
        " taza de interes: " . $this->getTazaInteres() . "\n" .
        " referencia: " . $this->getReferenciaPersona();
    }

    private function calcularInteresPrestamo($numCuota){

        $montoCuota = $this->getMonto() / $this->getCantidadCuotas();
        $saldoDeudor = $this->getMonto() - ($montoCuota * ($numCuota -1));
        return $saldoDeudor * $this->tazaInteres;
    }

    public function otorgarPrestamo(){
        $this->setFechaOtorgamiento(date("Y-m-d"));
        $montoCuota = $this->getMonto() / $this->getCantidadCuotas();
        for($i=1; $i<=$this->getCantidadCuotas();$i++) { 
            $interes = $this->calcularInteresPrestamo($i);
            $cuota = new Cuota($i,$montoCuota,$interes);
            $this->coleccionCuotas[] = $cuota;
        }
    }

    public function darSiguienteCuotaPagar(){
        $cuotaPagar = null;
        $arrayCuotas = $this->getColeccionCuotas();
        $i = 0;
        if(count($arrayCuotas)== 0){
            $cuotaPagar == null;
        }
        while($i < $this->getCantidadCuotas() && $cuotaPagar == null && count($arrayCuotas) > 0 ){
            $cuota = $arrayCuotas[$i];
            if(!$cuota->getCancelada()){
            $cuotaPagar = $cuota;
            }
        $i++;
    }
    return $cuotaPagar;
    }
}