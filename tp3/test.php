<?php


include_once "persona.php";
include_once "cuenta.php";
include_once "cuentaCorriente.php";
include_once "cajaAhorro.php";


$persona1 = new persona("juan","perez","dni","23333212");

$cajaAhorro = new cajaAhorro(2,1000,$persona1);

$cuentaCorriente = new CuentaCorriente(2,500,$persona1,200);

//echo "=== Caja de Ahorro ===\n";
//echo $cajaAhorro;


echo "\nIntentando extraer $1200...\n";

if($cajaAhorro->extraer(1200)){
    echo "Extraccion exitosa.\n";
}
else {echo "fondos insuficientes \n";
}

echo "saldo Actual: " . $cajaAhorro->getSaldo() . "\n";


echo "==== Cuenta corriente ==== \n";
echo $cuentaCorriente;

echo "\n intentando extraer 1200... \n";

if($cuentaCorriente->extraer(800)){
    echo "extraccion exitosa \n";    
}
else{
    echo "fondos insuficientes o supera el limite de descubierto \n";
}


echo "\n saldo actual: " . $cuentaCorriente->getSaldo();