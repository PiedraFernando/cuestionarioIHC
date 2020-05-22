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
        <h1>Cuestionario para IHC</h1>
    </div>
    <div class="preguntaContainer">
        <div class="pregunta">
            <span>Ingrese su nombre</span>
        </div>
        <input type="text" placeholder="Tu respuesta" require>
    </div>
    <div class="preguntaContainer">
        <div class="pregunta">
            <span>Ingrese su edad</span>
            <span class="requerido">*</span>
        </div>
        <input type="text" placeholder="Tu respuesta">
    </div>
    <div class="preguntaContainer">
        <div class="pregunta">
            <span>Ingrese su sexo</span>
            <span class="requerido">*</span>
        </div>
        <input type="text" placeholder="Tu respuesta">
    </div>
    <div class="preguntaContainer">
        <div class="pregunta">
            <span>Grado de estudios</span>
            <span class="requerido">*</span>
        </div>
        <input type="text" placeholder="Tu respuesta">
    </div>
    <div class="preguntaContainer">
        <div class="pregunta">
            <span>Como aprendio a utilizar la computadora</span>
            <span class="requerido">*</span>
        </div>
        <input type="text" placeholder="Tu respuesta">
    </div>

    <div class="preguntaContainer">
        <div class="pregunta">
            <span>¿Que boton usaria para minimisar una pestaña?</span>
            <span class="requerido">*</span>
        </div>
        <div class="radioContainer">
            <div>
                <input type="radio" name="grup1" value="minimizar" id="Minim">
                <label for="Minim">
                    <div for="Minim" style="background:#AC67E8" class="boton1" for='minimizar'>
                        m
                    </div>
                </label>
            </div>
            <div >
                <input type="radio" name="grup1" value="maximisar"  id="max">
                <label for="max">
                    <div style="background:#FE97FC" class="boton1" for='minimizar'>
                        M
                    </div>
                </label>
            </div>
            <div >
                <input type="radio" name="grup1" value="cerrar" id="cerrar">
                <label for="cerrar">
                    <div style="background:#4A4A4A" class="boton1" for='minimizar'>
                        c
                    </div>
                </label>
            </div>
        </div>
    </div>

    <div class="preguntaContainer">
        <div class="pregunta">
            <span>¿Que boton usaria para maximisar una pestaña?</span>
            <span class="requerido">*</span>
        </div>
        <div class="radioContainer">
            <div>
                <input type="radio" name="grup2" value="minimizar" id="Minim2">
                <label for="Minim2">
                    <div for="Minim" style="background:#AC67E8" class="boton1" for='minimizar'>
                        m
                    </div>
                </label>
            </div>
            <div >
                <input type="radio" name="grup2" value="maximisar"  id="max2">
                <label for="max2">
                    <div style="background:#FE97FC" class="boton1" for='minimizar'>
                        M
                    </div>
                </label>
            </div>
            <div >
                <input type="radio" name="grup2" value="cerrar" id="cerrar2">
                <label for="cerrar2">
                    <div style="background:#4A4A4A" class="boton1" for='minimizar'>
                        c
                    </div>
                </label>
            </div>
        </div>
    </div>

    <div class="preguntaContainer">
        <div class="pregunta">
            <span>¿Que boton usaria para cerrar una pestaña?</span>
            <span class="requerido">*</span>
        </div>
        <div class="radioContainer">
            <div>
                <input type="radio" name="grup3" value="minimizar" id="Minim3">
                <label for="Minim3">
                    <div for="Minim" style="background:#AC67E8" class="boton1" for='minimizar'>
                        m
                    </div>
                </label>
            </div>
            <div >
                <input type="radio" name="grup3" value="maximisar"  id="max3">
                <label for="max3">
                    <div style="background:#FE97FC" class="boton1" for='minimizar'>
                        M
                    </div>
                </label>
            </div>
            <div >
                <input type="radio" name="grup3" value="cerrar" id="cerrar3">
                <label for="cerrar3">
                    <div style="background:#4A4A4A" class="boton1" for='minimizar'>
                        c
                    </div>
                </label>
            </div>
        </div>
    </div>

    <div class="buttonContainer">
        <input type="submit" value="Enviar" class="boton">
    </div>
</body>
</html>