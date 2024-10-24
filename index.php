<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Selecciona una Figura</title>
</head>
<body>
    <div class="contenedor">
        <h1>Selecciona una Figura Geométrica</h1>
        <form action="figura.php" method="POST">
            <br>
            <select name="figura" id="figura" class="form-select" required>
                <option value="" selected disabled>Seleccione una figura</option>
                <option value="esfera">Esfera</option>
                <option value="triangulo">Triángulo</option>
                <option value="cuadrado">Cuadrado</option>
                <option value="rectangulo">Rectángulo</option>
            </select>
            <br>
            <input type="submit" class="btn btn-primary" value="Seleccionar">
        </form>
    </div>
</body>
</html>
