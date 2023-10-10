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
        <h1>Habitación 1</h1>
        <p>Esta es la habitación 1. Encuentra pistas para descifrar el código.</p>
        <p>Pista: "Navega por las páginas de un libro viejo en la estantería y busca una palabra relacionada con la naturaleza."</p>

        <img src="https://i.pinimg.com/564x/eb/57/28/eb57282de54d5dccc46bc781a1b69235.jpg" alt="Pista">


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
