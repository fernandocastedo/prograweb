<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>      
    <h1>Envio de datos en PHP</h1>
    <form action="index.php" method="POST">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <input type="text" name="telefono" id="telefono" placeholder="Telefono">
        <input type="submit" value="Enviar datos">
    </form>
    
    <?php
        echo"texto desde php";
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
        }
        var_dump($_POST);
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
    ?>
    <h2>Envío vía GET</h2>
    <form action="procesarget.php" method="GET">
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="text" name="telefono" placeholder="Teléfono">
    <input type="submit" value="Enviar datos (GET)">
    </form>
</body>
</html>