<?php 
    include("Conexion.php");
    $con=conectar();

    $sql1="SELECT u.Email, u.Nombre, u.Apellido , r.apellido FROM usuarios u INNER JOIN revisores r ON u.Revisor = r.id WHERE Codigo = 1 ORDER BY r.apellido" ;
    $query1=mysqli_query($con,$sql1);

    $sql2="SELECT u.Email, u.Nombre, u.Apellido , r.apellido FROM usuarios u INNER JOIN revisores r ON u.Revisor = r.id WHERE Codigo = 1 ORDER BY r.apellido" ;
    $query2=mysqli_query($con,$sql2);
    
    $sql3="SELECT u.Email, u.Nombre, u.Apellido , r.apellido FROM usuarios u INNER JOIN revisores r ON u.Revisor = r.id WHERE Codigo = 1 ORDER BY r.apellido" ;
    $query3=mysqli_query($con,$sql3);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <title>Gema SAS</title>

    
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div class="header">
        <h1>GEMA SAS</h1>
 </div> 
    <a href="index.php"><i class="fa fa-angle-double-left"></i> Volver</a>

<body>
    
    <h2>USUARIOS ACTIVOS</h2>
    <table class="table" >
        <thead class="table-success table-striped" >
            <tr>
                <th style="text-align: center">Email</th>
                <th style="text-align: center">Nombre</th>
                <th style="text-align: center">Apellido</th>
                <th style="text-align: center">Revisor</th>
                </tr>
            </thead>

        <tbody>
            <?php
                while($row=mysqli_fetch_array($query1)){
            ?>
            <tr>
                <th><?php  echo $row['Email']?></th>
                <th><?php  echo $row['Nombre']?></th>
                <th><?php  echo $row['Apellido']?></th>
                <th><?php  echo $row['apellido']?></th>                                       
                </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>

    <h2>USUARIOS INACTIVOS</h2>
    <table class="table" >
        <thead class="table-success table-striped" >
            <tr>
                <th style="text-align: center">Email</th>
                <th style="text-align: center">Nombre</th>
                <th style="text-align: center">Apellido</th>
                <th style="text-align: center">Revisor</th>
                </tr>
            </thead>

        <tbody>
            <?php
                while($row=mysqli_fetch_array($query2)){
            ?>
            <tr>
                <th><?php  echo $row['Email']?></th>
                <th><?php  echo $row['Nombre']?></th>
                <th><?php  echo $row['Apellido']?></th> 
                <th><?php  echo $row['apellido']?></th>                                       
                </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>

    <h2>USUARIOS EN ESPERA</h2>
    <table class="table" >
        <thead class="table-success table-striped" >
            <tr>
                <th style="text-align: center">Email</th>
                <th style="text-align: center">Nombre</th>
                <th style="text-align: center">Apellido</th>
                <th style="text-align: center">Revisor</th>
                </tr>
            </thead>

        <tbody>
            <?php
                while($row=mysqli_fetch_array($query3)){
            ?>
            <tr>
                <th><?php  echo $row['Email']?></th>
                <th><?php  echo $row['Nombre']?></th>
                <th><?php  echo $row['Apellido']?></th>  
                <th><?php  echo $row['apellido']?></th>                                      
                </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
</body>
</html>
