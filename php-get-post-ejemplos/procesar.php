<?php
    //procesar informacion
    var_dump($_POST);
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];

    echo "Nombre" , $nombre,  "<br>";
    echo "Telefono" , $telefono,  "<br>";
?>