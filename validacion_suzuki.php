<?php
session_start();
$moto = $_POST['moto'];

if (empty($moto)) {
    $_SESSION['error_mensaje'] = "El campo es obligatorio. Por favor, inténtelo de nuevo.";
    header('Location: suzuki.php');
    exit();
} elseif (strtolower($moto) == 'suzuki hayabusa') {
    $_SESSION['reto_suzuki'] = true;
    header('Location: final.php');
    exit();
} else {
    $_SESSION['error_mensaje'] = "Datos incorrectos. Pista: asegúrate de que la moto es una Suzuki con un motor de 1340cc y velocidad máxima superior a 300 km/h.";
    header('Location: suzuki.php');
    exit();
}
?>