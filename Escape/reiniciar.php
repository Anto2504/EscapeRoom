<?php
session_start();

// Reinicia el juego
$_SESSION['habitacion_actual'] = 0;
$_SESSION['intentos'] = 0;

// Redirige de nuevo al index.php o al inicio del juego
header('Location: index.php');
exit();
?>
