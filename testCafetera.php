<?php
include 'cafetera.php';

$cafetera = new cafetera(1000,300);

echo "la capacidad de la cafetera es: " . $cafetera->getCapacidad() . "\n";
echo "la cantidad en la cafetera es: " . $cafetera->getCant() . "\n";

echo "Ingrese la cantidad de cafe que desea agregar: ";
$cant = trim(fgets(STDIN));


//$vacia = $cafetera->servirTaza($solicitado);
$rebalsar = $cafetera->agregarCafe($cant);
// if($vacia){
//     echo "se ha servido " . $cafetera->getUltimaCantidadServida() . " la cafetera a quedado vacia";
// }
// else{
//     echo "se ha servido " . $cafetera->getUltimaCantidadServida() . " a la cafetera le quedan " . $cafetera->getCant();
// }


if($rebalsar){
    echo "no se puede agregar esa cantidad de cafe, ya que la cafetera va a rebalsar. su capacidad es de 1000ml y la cafetera ya tiene " .$cafetera->getCant(); 
}
else {
    echo "se ha agregado el cafe correctamente, la cafetera tiene " .$cafetera->getCant();
}