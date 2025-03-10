<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Reto Moto</title>
</head>
<body>
    <div class="container">
        <h2>Reto Moto</h2>
        <p>Pista: Esta moto es famosa por ser una de las más rápidas del mundo, con un motor de 1340cc y velocidad máxima superior a 300 km/h. ¿Cuál es?</p>
        <form method="post" action="validacion_suzuki.php">
            <input type="text" name="moto" placeholder="Ingresa el nombre de la moto" required>
            <button type="submit">Enviar</button>
        </form>
        <p id="message"></p>
        <?php
        session_start();
        if (isset($_SESSION['error_mensaje'])) {
            echo '<p>' . $_SESSION['error_mensaje'] . '</p>';
            echo '<a href="suzuki.html"><button>Volver a Intentar</button></a>';
            unset($_SESSION['error_mensaje']);
        }
        ?>
    </div>
</body>
</html>
