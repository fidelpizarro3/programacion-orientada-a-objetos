<?php

include "cuentaBancaria.php";



echo "ingrese el numero de cuenta: ";
$nroCuentaIngresado = trim(fgets(STDIN));

echo "ingrese su dni: ";
$dniIngresado = trim(fgets(STDIN));

echo "ingrese el saldo actual: ";
$saldoActual = trim(fgets(STDIN));

echo "ingrese el interes anual: ";
$interesAnual = trim(fgets(STDIN));


$cuenta = new cuentaBancaria($nroCuentaIngresado, $dniIngresado, $saldoActual,$interesAnual);

$cuenta->actualizarSaldo();

echo $cuenta;

