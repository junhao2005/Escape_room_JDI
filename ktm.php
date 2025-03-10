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
        <p>Pista: Esta moto es una máquina potente y ligera diseñada para el enduro, con un sistema de inyección directa de combustible. ¿Cuál es?</p>
        <form method="post" action="validacion_ktm.php">
            <input type="text" name="moto" placeholder="Ingresa el nombre de la moto" required>
            <button type="submit">Enviar</button>
        </form>
        <p id="message"></p>
        <?php
        session_start();
        if (isset($_SESSION['error_mensaje'])) {
            echo '<p>' . $_SESSION['error_mensaje'] . '</p>';
            echo '<a href="ktm.html"><button>Volver a Intentar</button></a>';
            unset($_SESSION['error_mensaje']);
        }
        ?>
    </div>
</body>
</html>
