<?php
  var_dump($_GET);
  $nombre  = $_GET['nombre']  ?? '';
  $telefono= $_GET['telefono']?? '';
  echo "Nombre: $nombre<br>";
  echo "Teléfono: $telefono<br>";
?>