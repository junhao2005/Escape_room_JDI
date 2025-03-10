<?php
session_start();
$moto = $_POST['moto'];

if (empty($moto)) {
    $_SESSION['error_mensaje'] = "El campo es obligatorio. Por favor, inténtelo de nuevo.";
    header('Location: ktm.php');
    exit();
} elseif (strtolower($moto) == 'ktm 300 tpi') {
    $_SESSION['reto_ktm'] = true;
    header('Location: suzuki.php'); // Cambiar la redirección a la pregunta de Suzuki
    exit();
} else {
    $_SESSION['error_mensaje'] = "Datos incorrectos. Pista: asegúrate de que la moto es una KTM con sistema de inyección directa de combustible.";
    header('Location: ktm.php');
    exit();
}
?>
