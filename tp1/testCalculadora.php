<?php
include 'Calculadora.php';


echo "ingrese el primer numero";
$primerNumeroIngresado = trim(fgets(STDIN));

echo "ingrese el segundo numero";
$segundoNumeroIngresado = trim(fgets(STDIN));


$calculadora = new Calculadora($primerNumeroIngresado, $segundoNumeroIngresado);

echo "que operacion desea realizar?(suma, resta, multiplicar, dividir)";
$eleccionUsuario = trim(fgets(STDIN));


switch($eleccionUsuario){

    case "suma":
        echo "Resultado " . $calculadora->sumar() . "\n";
        break;
        

    case "resta":
        echo "Resultado " . $calculadora->restar() . "\n";
        break;
        

    case "multiplicar":
        echo "Resultado " . $calculadora->multiplicar() . "\n";
        break;
        

    case "dividir":
        $resultado = $calculadora->dividir() ;
        if($resultado == -1){
            echo "No se pudo realizar la division";
        }
        else {
            echo "dividir " . $calculadora->dividir() . "\n";
            }
        break;
        
        default: echo "operacion no valida";
}