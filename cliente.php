<?php


class Cliente{

    private $nombre;
    private $apellido;
    private $estado;
    private $tipoDocumento;
    private $nroDocumento;


    public function __construct($nombre,$apellido,$estado,$tipoDocumento,$NroDocumento)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->estado = $estado;
        $this->tipoDocumento = $tipoDocumento;
        $this->nroDocumento = $NroDocumento;
    }

    //getters 

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function getTipoDocumento(){
        return $this->tipoDocumento;
    }
    public function getNroDocumento(){
        return $this->nroDocumento;
    }
    //setters
    public function setNombre($nombreSeteado){
        $this->nombre = $nombreSeteado;
    }
    public function setApellido($apellidoSeteado){
        $this->apellido = $apellidoSeteado;
    }
    public function setEstado($valor){
        $this->estado = $valor;
    }
    public function setTipoDocumento($tipoDoc){
        $this->tipoDocumento = $tipoDoc;
    }
    public function setNroDocumento($nroDoc){
        $this->nroDocumento = $nroDoc;
    }
    

    public function __toString()
    {
        return "Nombre: " . $this->getNombre() . " Apellido: " . $this->getApellido() . " Estado: " . $this->getEstado() . " Tipo Documento: " . $this->getTipoDocumento() . " Numero de documento: " . $this->getNroDocumento();
    }
}