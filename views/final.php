<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Congratulations!</title>
</head>
<body>
    <div class="container">
        <?php
        session_start();
        if (!isset($_SESSION['reto_ktm'])) {
            header('Location: index.html');
            exit();
        }
        ?>
        <h2>Congratulations!</h2>
        <a href="index.html"><button>Volver al inicio</button></a>
        <?php
        session_destroy();
        ?>
    </div>
</body>
</html>
