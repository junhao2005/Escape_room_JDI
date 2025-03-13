<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Reto Moto</title>
</head>
<body class="fondo">
    <div id="container">
        <h2 class="titu">Reto KTM</h2>
        <p class="hint">Pista: Esta moto es una máquina potente y ligera diseñada para el enduro, con un sistema de inyección directa de combustible. ¿Cuál es?</p>

        <form method="post" action="validacion_ktm.php">
            <input type="text" name="moto" placeholder="Ingresa el nombre de la moto" required class="campo placeholder-text">
            <button type="submit" class="btn">Enviar</button>
        </form>

        <p id="message"></p>

        <?php
        session_start();
        if (isset($_SESSION['error_mensaje'])) {
            echo '<div class="error-msg">' . $_SESSION['error_mensaje'] . '</div>';
            unset($_SESSION['error_mensaje']); // Se borra después de mostrarlo
        }
        ?>

        <img src="./img/moto_gif.gif" alt="Moto en acción" class="gif-moto">
    </div>
</body>
</html>
