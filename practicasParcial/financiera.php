<?php
include_once "persona.php";
include_once "prestamo.php";
include_once "cuota.php";

    class Financiera{

        private $denominacion;
        private $direccion;
        private $ColeccionPrestamosOtorgados;

        public function __construct($denominacion,$direccion){

            $this->denominacion = $denominacion;
            $this->direccion = $direccion;
            $this->ColeccionPrestamosOtorgados = [];
            
        }


        //getters
        public function getDenominacion()
        {
                return $this->denominacion;
        }

        public function getDireccion()
        {
                return $this->direccion;
        }

        public function getColeccionPrestamosOtorgados()
        {
                return $this->ColeccionPrestamosOtorgados;
        }

        //setters

        public function setDenominacion($valor){
            return $this->denominacion = $valor;
        }
        public function setDireccion($valor){
            return $this->direccion = $valor;
        }
        public function setColeccionPrestamosOtorgados($valor){
            return $this->ColeccionPrestamosOtorgados = $valor;
        }

        public function __toString()
        {
            return "Denominacion: " . $this->getDenominacion() . "\n". 
            " direccion: " . $this->getDireccion() . "\n" . 
            " prestamos Otorgados: " . $this->getColeccionPrestamosOtorgados();
        }

        public function incorporarPrestamo($nuevoPrestamo){
            $this->ColeccionPrestamosOtorgados[] = $nuevoPrestamo;
        }

        public function otorgarPrestamoSiCalifica(){
            foreach($this->ColeccionPrestamosOtorgados as $prestamo){   
                if($prestamo->getColeccionCuotas() == []){
                    $calculo = $prestamo->getMonto() / $prestamo->getCantidadCuotas();
                    $persona = $prestamo->getReferenciaPersona();
                    $neto = $persona->getNetoPersona();
                    $netoPorcentaje = $neto * 0.4;
                    if($calculo < $netoPorcentaje){
                            $prestamo->otorgarPrestamo();
                    }
                }
            }
        }

        public function informarCuotaPagar($idPrestamo){
            $coleccionprestamo = $this->getColeccionPrestamosOtorgados(); 
            $largoArray = count($coleccionprestamo);
            $bandera = false;
            $cuotaApagar = null;
            $i = 0;
            while($i<$largoArray && $bandera == false ){
                if($idPrestamo == $coleccionprestamo[$i]){
                    $cuotaApagar = $coleccionprestamo[$i]->darSiguienteCuotaPagar();
                    $bandera = true;
                }
                $i++;
            }
            return $cuotaApagar;
        }
    }