<?php
session_start();

// Función para verificar el código en función de la habitación
function verificarCodigo($codigo, $habitacionActual) {
    switch ($habitacionActual) {
        case 0:
            return ($codigo === 'luna' || $codigo === 'LUNA'); // Código para la habitación 0.
        case 1:
            return ($codigo === 'agua' || $codigo === 'AGUA'); // Código para la habitación 1.
        case 2:
            return ($codigo === 'reflejo' || $codigo === 'REFLEJO'); // Código para la habitación 2.
        case 3:
            return ($codigo === 'tiempo' || $codigo === 'TIEMPO'); // Código para la habitación 3.
        case 4:
            return ($codigo === 'sonrisa' || $codigo === 'SONRISA'); // Código para la habitación 4.
        case 5:
            return ($codigo === 'silencio' || $codigo === 'SILENCIO'); // Código para la habitación 5.
        default:
            return false;
    }
}

if (!isset($_SESSION['habitacion_actual'])) {
    $_SESSION['habitacion_actual'] = 0;
    $_SESSION['intentos'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigo = strtolower($_POST['codigo']); // Convertir el código a minúsculas para hacer la comparación insensible a mayúsculas/minúsculas.
    $habitacionActual = $_SESSION['habitacion_actual'];

    if (verificarCodigo($codigo, $habitacionActual)) {
        $_SESSION['intentos'] = 0; // Reiniciar intentos al ingresar el código correcto.

        if ($_SESSION['habitacion_actual'] < 6) {
            $_SESSION['habitacion_actual']++; // Avanzar solo si no estamos en la habitación 6.
        } elseif ($_SESSION['habitacion_actual'] == 6) {
            // El jugador completó el juego.
            echo '<script>window.location.href = "index.php";</script>';
            exit();
        }
    } else {
        $_SESSION['intentos']++;

        if ($_SESSION['intentos'] >= 3) {
            $_SESSION['habitacion_actual'] = 0;
            $_SESSION['intentos'] = 0;
        }
    }

    // Agregar el código para recargar la página después de que se haya procesado el código ingresado.
    echo '<script>window.location.href = window.location.href;</script>';
    exit(); // Detiene el flujo de ejecución
}

include("habitaciones/habitacion" . $_SESSION['habitacion_actual'] . ".php");
?>
