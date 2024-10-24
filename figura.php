<?php
    session_start(); // Inicia la sesión

    // Verificar si se ha enviado el formulario con la figura seleccionada
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['figura'])) {
        // Guardar la figura seleccionada en la sesión
        $_SESSION['figura'] = $_POST['figura'];
    }

    // Verificar si ya se ha seleccionado una figura en la sesión
    if (isset($_SESSION['figura'])) {
        $figura = $_SESSION['figura'];
    } else {
        $figura = null;
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Calcular figura</title>
</head>
<body>
    <div class="contenedor">
        <h1>Calcular el área i el perímetro</h1>
        <form action="calcular.php" method="POST">
            <!-- Mostrar los inputs basados en la figura seleccionada -->
            <?php if ($figura == 'esfera'): ?>
                <div class="input-group mb-3">
                    <span class="input-group-text">Radio:</span>
                    <input type="number" name="radio-esfera" class="form-control">
                </div>
            <?php elseif ($figura == 'triangulo'): ?>
                <div class="input-group mb-3">
                    <span class="input-group-text">Base:</span>
                    <input type="number" name="base-triangulo" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Altura:</span>
                    <input type="number" name="altura-triangulo" class="form-control">
                </div>
            <?php elseif ($figura == 'cuadrado'): ?>
                <div class="input-group mb-3">
                    <span class="input-group-text">Lado:</span>
                    <input type="number" name="lado-cuadrado" class="form-control">
                </div>
            <?php elseif ($figura == 'rectangulo'): ?>
                <div class="input-group mb-3">
                    <span class="input-group-text">Largo:</span>
                    <input type="number" name="largo-rectangulo" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Ancho:</span>
                    <input type="number" name="ancho-rectangulo" class="form-control">
                </div>
            <?php endif; ?>
            
            <input type="submit" class="btn btn-primary" value="Calcular">
            <a href="index.php" class="btn btn-secondary">Volver</a>
        </form>
    </div>
</body>
</html>