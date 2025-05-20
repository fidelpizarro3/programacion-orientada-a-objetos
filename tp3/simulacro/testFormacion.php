<?php

include_once "vagonCarga.php";
include_once "vagonPasajeros.php";
include_once "vagon.php";
include_once "locomotora.php";
include_once "formacion.php";

$locomotora = new Locomotora(188000,140);

$vagon1 = new VagonPasajeros(30,25,2015,20,8,15000);
$vagonCarga = new VagonCarga(80000,55000,2018,20,8,5000);
$vagon = new VagonPasajeros(50,50,2015,20,8,15000);

$formacion = new Formacion($locomotora,5);

$formacion->incorporarVagonFormacion($vagon1);
$formacion->incorporarVagonFormacion($vagonCarga);
$formacion->incorporarVagonFormacion($vagon);  // Faltaba agregar este vagón

$resultado = $formacion->incorporarPasajeroFormacion(4);

if($resultado){ 
    echo "Se agregaron 4 pasajeros\n";
}
else{
    echo "No se pudo agregar ya que los vagones están llenos\n";
}

echo "\n--- Estado vagones  ---\n";
print_r($vagon1);
print_r($vagonCarga);
print_r($vagon);

$resultado2 = $formacion->incorporarPasajeroFormacion(14);

if ($resultado2) {
    echo "Se agregaron 14 pasajeros\n";
} else {
    echo "No se pudieron agregar 14 pasajeros\n";
}

echo "\n--- Estado locomotora ---\n";
print_r($locomotora);

echo "\nPromedio pasajeros formación: " . $formacion->promedioPasajeroFormacion() . "\n";
echo "Peso total formación: " . $formacion->pesoFormacion() . "\n";

echo "\n--- Estado final de vagones ---\n";
print_r($vagon1);
print_r($vagonCarga);
print_r($vagon);
