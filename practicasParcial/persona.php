<?php 

class Persona{
    private $nombrePersona;
    private $apellidoPersona;
    private $dniPersona;
    private $direccionPersona;
    private $mailPersona;
    private $telefonoPersona;
    private $netoPersona;

    public function __construct($nombre,$apellido,$dni,$direccion,$mail,$telefono,$neto)
    {
        $this->nombrePersona = $nombre;
        $this->apellidoPersona = $apellido;
        $this->dniPersona = $dni;
        $this->direccionPersona = $direccion;
        $this->mailPersona = $mail;
        $this->telefonoPersona = $telefono;
        $this->netoPersona = $neto;

        
    }

    /**
     * Getters (metodos de acceso)
     */ 
    public function getNombrePersona()
    {
        return $this->nombrePersona;
    }

    public function getApellidoPersona()
    {
        return $this->apellidoPersona;
    }

    public function getDniPersona()
    {
        return $this->dniPersona;
    }

    public function getDireccionPersona()
    {
        return $this->direccionPersona;
    }
    public function getMailPersona()
    {
        return $this->mailPersona;
    }

    public function getTelefonoPersona()
    {
        return $this->telefonoPersona;
    }

    public function getNetoPersona()
    {
        return $this->netoPersona;
    }



    public function setNombrePersona($nombrePersona)
    {
        $this->nombrePersona = $nombrePersona;

        return $this;
    }

    public function setApellidoPersona($apellidoPersona)
    {
        $this->apellidoPersona = $apellidoPersona;

        return $this;
    }


    public function setDniPersona($dniPersona)
    {
        $this->dniPersona = $dniPersona;

        return $this;
    }

    public function setDireccionPersona($direccionPersona)
    {
        $this->direccionPersona = $direccionPersona;

        return $this;
    }


    public function setMailPersona($mailPersona)
    {
        $this->mailPersona = $mailPersona;

        return $this;
    }

    public function setTelefonoPersona($telefonoPersona)
    {
        $this->telefonoPersona = $telefonoPersona;

        return $this;
    }

    public function setNetoPersona($netoPersona)
    {
        $this->netoPersona = $netoPersona;

        return $this;
    }


    public function __toString()
    {
        return 
        "Nombre: " . $this->getNombrePersona() . "\n" .
        " Apellido: " . $this->getApellidoPersona() . "\n" . 
        " dni: " . $this->getDniPersona() . "\n" .
        " direccion: " . $this->getDireccionPersona() . "\n" .
        " mail: " . $this->getMailPersona() . "\n" . 
        " telefono: " . $this->getTelefonoPersona() . "\n" .
        " neto: " . $this->getNetoPersona() . "\n";
    }
}