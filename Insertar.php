<?php
function insertar($usuario){
    echo "llegue";
    include("Conexion.php");
    $con=conectar();

    $tamanio = sizeof($usuario)-1;

    for($i=0;$i<=$tamanio;$i++){
        $email=$usuario[$i][0];
        $nombres=$usuario[$i][1];
        $apellidos=$usuario[$i][2];
        $Codigo=$usuario[$i][3];
        $sql="INSERT INTO usuarios VALUES('$email','$nombres','$apellidos','$Codigo')";
        $query= mysqli_query($con,$sql);
        if($query){
            echo "enviado";   
        }else {
            echo "Error al subir";
        }
    }  
    
}

?>