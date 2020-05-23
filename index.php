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
    <form action="solicitud.php" method="post" style="width: 100%; height: 100%;">
        <div class="bienvenida">
            <div>
                <div class="cortina"></div>
                <h1>Cuestionario para IHC</h1>
            </div>
        </div>
        <div class="preguntaContainer" style="background:#CB4335">
            <div>
                <div class="pregunta">
                    <span>Ingrese su nombre</span>
                </div>
                <input name="nombre" type="text" placeholder="Tu respuesta">
            </div>
        </div>
        <div class="preguntaContainer" style="background:#8E44AD">
            <div>
                <div class="pregunta">
                    <span>Ingrese su edad</span>
                    <span class="requerido">*</span>
                </div>
                <input name="edad" type="text" placeholder="Tu respuesta" required>
            </div>
        </div>
        <div class="preguntaContainer" style="background:#2471A3">
            <div>
                <div class="pregunta">
                    <span>Ingrese su sexo</span>
                    <span class="requerido">*</span>
                </div>
                <input name="sexo" type="text" placeholder="Tu respuesta" required>
            </div>
        </div>
        <div class="preguntaContainer" style="background:#17A589">
            <div>
                <div class="pregunta">
                    <span>Grado de estudios</span>
                    <span class="requerido">*</span>
                </div>
                <input name="estudios" type="text" placeholder="Tu respuesta" required>
            </div>
        </div>
        <div class="preguntaContainer" style="background:#229954">
            <div>
                <div class="pregunta">
                    <span>Como aprendio a utilizar la computadora</span>
                    <span class="requerido">*</span>
                </div>
                <input name="aprendisaje" type="text" placeholder="Tu respuesta" required>
            </div>
        </div>

        <div class="preguntaContainer" style="background:#CA6F1E">
            <div>
                <div class="pregunta">
                    <span>¿Que boton usaria para minimisar una pestaña?</span>
                    <span class="requerido">*</span>
                </div>
                <div class="radioContainer">
                    <div>
                        <input type="radio" name="grup1" value="1" id="Minim">
                        <label for="Minim">
                            <img src="img/botonCerrar.png"    alt="">
                        </label>
                    </div>
                    <div >
                        <input type="radio" name="grup1" value="2"  id="max">
                        <label for="max">
                            <img src="img/botonMaximisar.png" alt="">
                        </label>
                    </div>
                    <div >
                        <input type="radio" name="grup1" value="3" id="cerrar">
                        <label for="cerrar">
                            <img src="img/botonMinimizar.png" alt="">
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="preguntaContainer" style="background:#717D7E">
            <div>
                <div class="pregunta">
                    <span>¿Que boton usaria para maximisar una pestaña?</span>
                    <span class="requerido">*</span>
                </div>
                <div class="radioContainer">
                    <div>
                        <input type="radio" name="grup2" value="1" id="Minim2">
                        <label for="Minim2">
                            <img src="img/botonCerrar.png"    alt="">
                        </label>
                    </div>
                    <div >
                        <input type="radio" name="grup2" value="2"  id="max2">
                        <label for="max2">
                            <img src="img/botonMaximisar.png" alt="">
                        </label>
                    </div>
                    <div >
                        <input type="radio" name="grup2" value="3" id="cerrar2">
                        <label for="cerrar2">
                            <img src="img/botonMinimizar.png" alt="">
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="preguntaContainer" style="background:#2C3E50">
            <div>
                <div class="pregunta">
                    <span>¿Que boton usaria para cerrar una pestaña?</span>
                    <span class="requerido">*</span>
                </div>
                <div class="radioContainer">
                    <div>
                        <input type="radio" name="grup3" value="1" id="Minim3">
                        <label for="Minim3">
                            <img src="img/botonCerrar.png"    alt="">
                        </label>
                    </div>
                    <div >
                        <input type="radio" name="grup3" value="2"  id="max3">
                        <label for="max3">
                            <img src="img/botonMaximisar.png" alt="">
                        </label>
                    </div>
                    <div >
                        <input type="radio" name="grup3" value="3" id="cerrar3">
                        <label for="cerrar3">
                            <img src="img/botonMinimizar.png" alt="">
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="preguntaContainer" style="background:#5DADE2">
            <div class="buttonContainer">
                <input type="submit" value="Enviar" class="boton">
            </div>
        </div>
    </form>
</body>
</html>