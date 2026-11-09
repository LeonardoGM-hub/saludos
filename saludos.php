<?php
$idioma = "";
$saludo = "";


if (isset($_POST["idioma"])) {


    $idioma = $_POST["idioma"];


    if ($idioma == "espanol") {
        $saludo = "¡Hola! ¿Cómo estás?";
    }
    elseif ($idioma == "ingles") {
        $saludo = "Hello! How are you?";
    }
    elseif ($idioma == "frances") {
        $saludo = "Bonjour! Comment ça va?";
    }
    elseif ($idioma == "italiano") {
        $saludo = "Ciao! Come stai?";
    }
    elseif ($idioma == "aleman") {
        $saludo = "Hallo! Wie geht's?";
    }
    elseif ($idioma == "japones") {
        $saludo = "こんにちは (Konnichiwa)";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" tipe="text/css">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenidos <samp> CBTis217 </samp></h1>
    <h2>Saludos en distintos idiomas</h2>
    <p>Selecciona un idioma</p>
    <div class="contenedor">
    <form method="POST">

     <select name="idioma" required>
            <option value="">Selecciona...</option>
            <option value="espanol">Español</option>
            <option value="ingles">Inglés</option>
            <option value="frances">Francés</option>
            <option value="italiano">Italiano</option>
            <option value="aleman">Alemán</option>
            <option value="japones">Japonés</option>
        </select>
        <br><br>

        <button type="submit">Mostrar saludo</button>
    </form>
       <?php
    if ($saludo != "") {
        echo "<div class='resultado'><h3>$saludo</h3></div>";
    }
    ?>
    <nav>
    <a href="bienvenida.php">Inicio</a><br>
    </nav>

</body>
</html>