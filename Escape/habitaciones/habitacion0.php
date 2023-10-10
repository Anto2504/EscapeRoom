<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitación 1</title>
    <style>
        body {
            background-image: url('https://escaperoomsabadell.es/wp-content/uploads/2018/02/fondo-mapa-vikingo.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
            color: white;
        }
        .centrado {
            text-align: center; 
            margin: 0 auto; 
            padding: 20px; 
        }
        h1 {
            color:white;
        }
        .boton-container {
         text-align: center; 
        }

        .boton-container form {
            display: inline-block; 
            margin-right: 10px; 
        }

    </style>
</head>
<body>
    <div class="centrado">
    <h1>Habitación 0</h1>
    <body>
    <p>Bienvenido al Escape Room. Encuentra pistas y códigos para escapar.</p>
    <p>Pista: "Observa el cielo nocturno desde la ventana y encuentra la respuesta en cuatro letras."</p>

        <img src="https://i.pinimg.com/564x/0f/64/5f/0f645f8f218d562cee5347293063ae87.jpg" alt="Pista">


        <form action="index.php" method="post">
            <label for="codigo">Ingresa el código:</label>
            <input type="text" id="codigo" name="codigo" required>
            <button type="submit">Enviar</button>
        </form>
        <br/>

        <div class="boton-container">
        <?php
        // Botón para volver a la habitación anterior
        if ($_SESSION['habitacion_actual'] > 0) {
            echo '<form action="retroceder.php" method="post">';
            echo '<button type="submit">Volver a la habitación anterior</button>';
            echo '</form>';
        }
        ?>

        <?php
        // Botón para reiniciar el escape room
        echo '<form action="reiniciar.php" method="post">';
        echo '<button type="submit">Reiniciar el Escape Room</button>';
        echo '</form>';
        ?>
        </div>

    </div>
</body>
</html>
