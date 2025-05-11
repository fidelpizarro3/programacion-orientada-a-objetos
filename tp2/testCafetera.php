<?php
include 'cafetera.php';

$cafetera = new cafetera(1000,300);

echo "la capacidad de la cafetera es: " . $cafetera->getCapacidad() . "\n";
echo "la cantidad en la cafetera es: " . $cafetera->getCant() . "\n";

// echo "Ingrese la cantidad de cafe que desea agregar: ";
// $cant = trim(fgets(STDIN));

echo "que tarea desea realizar? 1)-Llenar cafetera   2)Servir taza   3)vaciar cafetera  4)agregar cafe 0)SALIR. ";
$eleccionUsuario = trim(fgets(STDIN));

switch ($eleccionUsuario) {
    case "1": 
        $cafetera->llenarCafetera();
        echo "cafetera llena. ahora tiene: " . $cafetera->getCant() . "\n";
        break;

    case "2";
        echo "indique cuanto cafe desea servirse: " . "\n";
        $cantPorServir = trim(fgets(STDIN));
        $cafetera->servirTaza($cantPorServir);    
        $vacia = $cafetera->servirTaza($cantPorServir);
        if($vacia){
            echo "se ha servido " . $cafetera->getUltimaCantidadServida() . " la cafetera a quedado vacia";
        }
        else{
            echo "se ha servido " . $cafetera->getUltimaCantidadServida() . " a la cafetera le quedan " . $cafetera->getCant();
        }        break;
    
    case "3": $cafetera->vaciarCafetera();
        echo "la cafetera fue vaciada ";
        break;    
    
    case "4":
        echo "indique cuanto cafe desea agregar: ";
        $agregar = trim(fgets(STDIN));
        $rebalsar = $cafetera->agregarCafe($agregar);
        if($rebalsar){
            echo "no se puede agregar esa cantidad de cafe, ya que la cafetera va a rebalsar. su capacidad es de 1000ml y la cafetera ya tiene " .$cafetera->getCant(); 
        }
        else {
            echo "se ha agregado el cafe correctamente, la cafetera tiene " .$cafetera->getCant();
        }
        break;

    }
