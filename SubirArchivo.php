<?php

include("Insertar.php");
$fichero= $_FILES["file"];

// Abriendo el archivo
$archivo = fopen($fichero["tmp_name"], "r");
$estado = true;
$usuarios = [];
// Recorremos todas las lineas del archivo
while(!feof($archivo)){
    // Leyendo una linea
    $lineas = fgets($archivo);
    $arreglo = explode(",",$lineas);
    // Imprimiendo una linea
    var_dump($arreglo);
    echo nl2br("\n");
    if(is_null($arreglo[3]) || $arreglo[3]>=4 || $arreglo[3]<0){
        echo "Archivo no tiene el formato correcto";
        $estado = false;
    }
    array_push($usuarios,$arreglo);
    
}

if ($estado) {
             
    insertar($usuarios);
    header('Location: Usuario.php');
    
}else{
    echo nl2br("\n");
    header('Location: index.php?ok=1');
}
// Cerrando el archivo
fclose($archivo);

?>


