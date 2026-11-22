<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de tu Compromiso</title>
    <link rel="stylesheet" href="r.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Regresar al inicio</a></li>
                <li><a href="formulario.html">Envíar Otra Respuesta</a></li>
            </ul>
        </nav>
    </header>

    <main class="resultado-container">
        <h1>¡Gracias por tu compromiso, Eco-Venado!</h1>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nombre = htmlspecialchars($_POST['nombre']);
            $edad = htmlspecialchars($_POST['edad']);
            $grupo = htmlspecialchars($_POST['grupo']);
            $residuo = htmlspecialchars($_POST['residuo_frecuente']);
            $separas = htmlspecialchars($_POST['separas']);
            $accion = htmlspecialchars($_POST['accion']);
            $comentario = htmlspecialchars($_POST['comentario']);

            echo "<div class='card-resultado'>";
            echo "<p><strong>Nombre:</strong> $nombre</p>";
            echo "<p><strong>Edad:</strong> $edad años</p>";
            echo "<p><strong>Grupo:</strong> $grupo </p>";
            echo "<p>El residuo que generas con mayor frecuencia es: <strong>$residuo</strong>.</p>";
            echo "<p>Respecto a separar tus residuos, respondiste: <strong>$separas</strong>.</p>";
            echo "<p>Tu acción principal elegida para cuidar el ambiente es: <strong>$accion</strong>.</p>";
            if (!empty($comentario)) {
                echo "<p><strong>Tu propuesta:</strong> \"$comentario\"</p>";
            }
            echo "<br><p class='destacado'>¡Felicidades! Has sumado tu granito de arena para mejorar los espacios escolares y proteger nuestro entorno.</p>";
            echo "</div>";
        } else {
            echo "<p>No se han recibido datos del formulario.</p>";
        }
        ?>
    </main>
</body>
</html>