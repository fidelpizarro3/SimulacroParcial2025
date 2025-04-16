<?php
include_once "cuota.php";
include_once "persona.php";
include_once "prestamo.php";
include_once "financiera.php";

$objFinanciera = new Financiera("money","Av Arg 1234");

$persona1 = new Persona("pepe","florez","11111111","Bs As 12", "dir@mail.com","299444567",4000);
$persona2 = new Persona("luis","suarez","22222222","Bs As 123", "dir@mail.com","2994455",4000);
$persona3 = new Persona("pepe","florez","33333333","Bs As 12", "dir@mail.com","299444567",4000);

$objPrestamo1 = new Prestamo(1,5000,5,0.1,$persona1);
$objPrestamo2 = new Prestamo(2,10000,4,0.1,$persona2);
$objPrestamo3 = new Prestamo(3,10000,2,0.1,$persona3);

$objFinanciera->incorporarPrestamo($objPrestamo1);
$objFinanciera->incorporarPrestamo($objPrestamo2);
$objFinanciera->incorporarPrestamo($objPrestamo3);

echo $objFinanciera;

$objFinanciera->otorgarPrestamoSiCalifica();

$objCuota = $objFinanciera->informarCuotaPagar(2);
if ($objCuota !== null) {
    echo $objCuota;
} else {
    echo " \n No hay cuotas disponibles para pagar o el préstamo no fue otorgado.\n";
}

echo $objCuota;

if ($objCuota !== null) {
    echo $objCuota->darMontoFinalCuota() . "\n";
} else {
    echo "No hay cuota pendiente o el préstamo no fue otorgado.\n";
}

$objCuota->setCancelada(true);
