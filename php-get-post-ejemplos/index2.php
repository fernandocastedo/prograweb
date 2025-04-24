<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Envío de datos en PHP con GET</h1>
  <form action="procesar_get.php" method="GET">
    <input
      type="text"
      name="nombre"
      id="nombre"
      placeholder="Nombre"
    ><br>
    <input
      type="text"
      name="telefono"
      id="telefono"
      placeholder="Teléfono"
    ><br>
    <input
      type="submit"
      value="Enviar datos"
    >
  </form>    
</body>
</html>