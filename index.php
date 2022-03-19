<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <title>Gema SAS</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    
</head>
<body>
    <div class="header">
            <h1>GEMA SAS</h1>
    </div> 
    <h2>Formulario de carga de información</h2>
    
    <form action="SubirArchivo.php" method="POST" enctype="multipart/form-data">
        <input type="file"  name="file">
  
        <br>
        <br>
        <button  type="submit" >Enviar formulario</button>
    </form>
    <?php
    if(isset($_GET['ok']) && $_GET['ok'] == 1){ 
        echo "<div class=\"alert alert-success\" role=\"alert\">¡Archivo no tiene el formato correcto!</div>";
    }
    ?>

</body>
</html>