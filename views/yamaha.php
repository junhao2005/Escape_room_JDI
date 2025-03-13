<?php
// Lista de motos con pistas y pruebas
$motos = [
    "Yamaha YZF-R1" => [
        "imagen" => "img/R1.png",
        "pistas" => [
            "Esta moto fue lanzada en 1998 y marcó un antes y un después en el mundo de las motos deportivas.",
            "Esta moto cuenta con un motor de 4 cilindros en línea de 998 cc, famoso por su rendimiento y suavidad.",
            "Esta moto cuenta con suspensión invertida, que mejora su estabilidad y manejo en curvas."
        ],
        "pruebas" => [
            "¿En qué año se lanzó una de las motos deportivas más icónicas de Japón, conocida por revolucionar el segmento de las superbikes?",
            "¿Qué tipo de motor utiliza una de las motos deportivas más famosas de Japón, conocida por su potencia y suavidad?",
            "¿Qué tipo de suspensión suelen llevar las motos deportivas de alta gama para mejorar el manejo en curvas y terrenos irregulares?"
        ]
    ]
];

//Respuesta de la primera preguntacorrecta: 1998

//Respuesta de la segunda pregunta correcta: 4 cilindros en línea

//Respuesta correcta: Suspensión invertida



$moto_secreta = array_rand($motos);
$datos_moto = $motos[$moto_secreta];
$imagen_moto = $datos_moto["imagen"];
$pistas = $datos_moto["pistas"];
$pruebas = $datos_moto["pruebas"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minijuego Interactivo: Adivina la Moto</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>YAMAHA</h1>
            <p>¡Resuelve las pruebas para desbloquear pistas y adivinar la moto!</p>
        </header>
        <section class="game">
            <div class="game-info">
                <p><strong>Tiempo restante:</strong> <span id="tiempo">120</span> segundos</p>
            </div>
            <div class="pruebas">
                <div class="prueba" id="prueba1">
                    <p><?php echo $pruebas[0]; ?></p>
                    <input type="text" id="respuesta1" placeholder="Tu respuesta">
                    <button onclick="verificarPrueba(1)">Responder</button>
                </div>
                <div class="prueba" id="prueba2">
                    <p><?php echo $pruebas[1]; ?></p>
                    <input type="text" id="respuesta2" placeholder="Tu respuesta">
                    <button onclick="verificarPrueba(2)">Responder</button>
                </div>
                <div class="prueba" id="prueba3">
                    <p><?php echo $pruebas[2]; ?></p>
                    <input type="text" id="respuesta3" placeholder="Tu respuesta">
                    <button onclick="verificarPrueba(3)">Responder</button>
                </div>
            </div>
            <div class="pistas">
                <p id="pista1" class="pista-oculta"><?php echo $pistas[0]; ?></p>
                <p id="pista2" class="pista-oculta"><?php echo $pistas[1]; ?></p>
                <p id="pista3" class="pista-oculta"><?php echo $pistas[2]; ?></p>
            </div>
            <form id="form-respuesta">
                <label for="respuesta">Introduce el modelo de la moto:</label>
                <input type="text" id="respuesta" name="respuesta" required>
                <button type="submit">Adivinar</button>
            </form>
            <p id="mensaje" class="mensaje"></p>
        </section>
        <footer>
            <p>&copy; 2025 Escape Room de Motos. Jung Hao, Izan Izquierdo, David Vazquez.</p>
        </footer>
    </div>
    <script>
        // Datos de la moto secreta
        const motoSecreta = "<?php echo $moto_secreta; ?>";
        const respuestasCorrectas = [
            "<?php echo explode("(", $pruebas[0])[1]; ?>",
            "<?php echo explode("(", $pruebas[1])[1]; ?>",
            "<?php echo explode("(", $pruebas[2])[1]; ?>"
        ];
    </script>
    <script>
        let tiempoRestante = 120;

        // Función para actualizar el tiempo
        function actualizarTiempo() {
            const tiempoElement = document.getElementById("tiempo");
            tiempoElement.textContent = tiempoRestante;

            if (tiempoRestante === 0) {
                clearInterval(intervaloTiempo);
                alert(`¡Tiempo agotado!`);
                window.location.href = "perdida.php"; // Redirigir al inicio
            }
            tiempoRestante--;
        }
        // Iniciar el temporizador
        const intervaloTiempo = setInterval(actualizarTiempo, 1000);

        // Evento para el formulario
        document.getElementById("form-respuesta").addEventListener("submit", verificarRespuesta);
    </script>
</body>
</html>