<?php
include_once "persona.php";







function mostrarMenu() {
    echo "\n---------------- MENÚ ----------------\n";
    echo "1) Ingresar nuevos datos de persona\n";
    echo "2) Mostrar datos\n";
    echo "0) SALIR\n";
    echo "Seleccione una opción: ";
}

function ingresarDatos(){
    echo "ingrese su nombre ";
    $nombreIngresado = trim(fgets(STDIN));
    echo "ingrese su apellido ";
    $apellidoIngresado = trim(fgets(STDIN));
    echo "ingrese el tipo de documento(cuit/cuil/dni) ";
    $tipoDocIngresado = trim(fgets(STDIN));
    echo "ingrese el numero de documento(sin puntos ni espacios) ";
    $nroDocumentoIngresado = trim(fgets(STDIN));
    
    $persona = new persona($nombreIngresado,$apellidoIngresado,$tipoDocIngresado,$nroDocumentoIngresado);

    return $persona;
}


$persona = null;

do {mostrarMenu();
    $opcion = trim(fgets(STDIN));

    switch($opcion) {
        case 1:$persona = ingresarDatos();
        break;
        
        case 2: if($persona != null){
         echo $persona;
        }
        else {echo  "no se ingresaron personas";}    
        break;

        case 0: echo "saliendo del programa";
        break;

        default:
            echo "OPCION INVALIDA";
            break;
    }

}while($opcion != 0);

