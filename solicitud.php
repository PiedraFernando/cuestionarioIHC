<?php
    $mysqli = new mysqli("localhost", "root", "", "ihccuestionario");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    if($_POST){
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $sexo = $_POST["sexo"];
        $estudios = $_POST["estudios"];
        $aprendisaje = $_POST["aprendisaje"];
        $grup1 = $_POST["grup1"];
        $grup2 = $_POST["grup2"];
        $grup3 = $_POST["grup3"];
        if($nombre==""){
            $nombre='Anonimo';
        }

        $sql = "INSERT INTO respuestas(nombre, edad, sexo, estudios, aprendisaje, minimizar,maximisar,cerrar) VALUES ('$nombre', $edad, '$sexo', '$estudios', '$aprendisaje', $grup1, $grup2, $grup3)";
        mysqli_query($mysqli, $sql);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario IHC</title>
    <link rel="shortcut icon" href="img/title_icon.png">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="bienvenida">
        <div>
            <div class="cortina"></div>
            <h1>Muchas gracias por sus respuesta. ya puede cerrar la pagina</h1>
        </div>
    </div>
</body>
</html>