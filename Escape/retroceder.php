<?php
session_start();

// Obtén la habitación actual
$habitacionActual = $_SESSION['habitacion_actual'];

// Retrocede a la habitación anterior, a menos que ya estemos en la habitación 0
if ($habitacionActual > 0) {
    $_SESSION['habitacion_actual']--;
}

// Redirige de nuevo al index.php o al inicio del juego
header('Location: index.php');
exit();
?>