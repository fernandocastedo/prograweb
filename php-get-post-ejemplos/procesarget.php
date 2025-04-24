<?php

    var_dump($GET);
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['nombre'], $_GET['telefono'])) {
        $nombre = $_GET["nombre"];
        $telefono = $_GET["telefono"];
        echo "NOMBRE: " .$nombre."<br>";
        echo "TELEFONO: " .$telefono;
    }

?>