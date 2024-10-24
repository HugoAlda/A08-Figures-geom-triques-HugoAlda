<?php

include_once './clases/Figura.php';
include_once './clases/Cuadrado.php';
include_once './clases/Rectangulo.php';
include_once './clases/Triangulo.php';
include_once './clases/Esfera.php';

// Verificar que se haya seleccionado una figura y que se haya enviado un formulario
if (isset($_SESSION['figura']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $figura = $_SESSION['figura'];

    switch ($figura) {
        case 'esfera':
            if (isset($_POST['radio-esfera'])) {
                $radio = $_POST['radio-esfera'];
                $esfera = new Esfera($figura, $radio);
                echo $esfera; // Aquí haces el cálculo
            } else {
                echo 'Error: No se ha proporcionado el radio de la esfera';
            }
            break;

        case 'triangulo':
            if (isset($_POST['base-triangulo']) && isset($_POST['altura-triangulo'])) {
                $base = $_POST['base-triangulo'];
                $altura = $_POST['altura-triangulo'];
                $triangulo = new Triangulo($figura, $base, $altura);
                echo $triangulo; // Aquí haces el cálculo
            } else {
                echo 'Error: No se han proporcionado la base y la altura del triángulo';
            }
            break;

        case 'cuadrado':
            if (isset($_POST['lado-cuadrado'])) {
                $lado = $_POST['lado-cuadrado'];
                $cuadrado = new Cuadrado($figura, $lado);
                echo $cuadrado; // Aquí haces el cálculo
            } else {
                echo 'Error: No se ha proporcionado el lado del cuadrado';
            }
            break;

        case 'rectangulo':
            if (isset($_POST['largo-rectangulo']) && isset($_POST['ancho-rectangulo'])) {
                $largo = $_POST['largo-rectangulo'];
                $ancho = $_POST['ancho-rectangulo'];
                $rectangulo = new Rectangulo($figura, $largo, $ancho);
                echo $rectangulo; // Aquí haces el cálculo
            } else {
                echo 'Error: No se han proporcionado el largo y el ancho del rectángulo';
            }
            break;

        default:
            echo 'Error: No se ha seleccionado una figura válida';
            break;
    }
} else {
    echo 'Error: No se ha seleccionado una figura.';
}

