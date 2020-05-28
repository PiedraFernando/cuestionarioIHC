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
        <div class="bienvenida" id="bienvenida">
            <div>
                <div class="cortina"></div>
                <h1>Cuestionario para la interacción humano-computadora</h1>
                <a class="boton_siguiente" href="#nombre" >¡Comencemos!</a>
            </div>
        </div>

        <!-- SECCION DE NOMBRE -->
        <div class="preguntaContainer" style="background:#CB4335" id="nombre">
            <div>
                <div class="pregunta">
                    <span>Ingrese su nombre</span>
                </div>
                <input name="nombre" type="text" placeholder="Tu respuesta" min="0" max="120" 
                style="width:100%; border:2px solid #aaa; border-radius:4px;box-sizing:border-box;">
                <a class="boton_siguiente" href="#edad">Siguiente pregunta</a>
            </div>
        </div>

        <!-- SECCION DE EDAD -->
        <div class="preguntaContainer" style="background:#8E44AD" id="edad" style="border: 1px solid black;">
            <div>
                <a class="boton_anterior" href="#nombre">Pregunta anterior</a>
                <div class="pregunta">
                    <span>Ingrese su edad</span>
                    <span class="requerido">*</span>
                </div>
                <input name="edad" type="number" placeholder="Tu respuesta" required
                style="width:100%; border:2px solid #aaa; border-radius:4px;box-sizing:border-box;">
                <a class="boton_siguiente" href="#genero">Siguiente pregunta</a>
            </div>
        </div>

        <!-- SECCION DE GENERO -->
        <div class="preguntaContainer" style="background:#2471A3" id="genero">
            <div>
                <a class="boton_anterior" href="#edad">Pregunta anterior</a>
                <div class="pregunta" required>
                    <span>Ingrese su género</span>
                    <span class="requerido">*</span>
                </div>
                <select style="width: 100%; padding: 8px;" name="sexo">
                    <option disabled selected>Selecciona una opción</option>
                    <option>Hombre</option>
                    <option>Mujer</option>
                    <option>Otro</option>
                    <option>Prefiero no responder</option>
                </select>
                <a class="boton_siguiente" href="#estudios">Siguiente pregunta</a>
            </div>
        </div>

        <!-- SECCION DE ESTUDIOS -->
        <div class="preguntaContainer" style="background:#17A589" id="estudios">
            <div>
                <a class="boton_anterior" href="#genero">Pregunta anterior</a>
                <div class="pregunta">
                    <span>Grado de estudios alcanzados</span>
                    <span class="requerido">*</span>
                </div>
                <select style="width: 100%; padding: 8px;" name="estudios" required>
                    <option disabled selected>Selecciona una opción</option>
                    <option>Ninguno</option>
                    <option>Preescolar</option>
                    <option>Primaria</option>
                    <option>Secundaria</option>
                    <option>Media superior</option>
                    <option>Superior</option>
                </select>
                <a class="boton_siguiente" href="#aprender">Siguiente pregunta</a>
            </div>
        </div>

        <!-- SECCION DE APRENDIZAJE -->
        <div class="preguntaContainer" style="background:#229954" id="aprender">
            <div>
                <a class="boton_anterior" href="#estudios">Pregunta anterior</a>
                <div class="pregunta">
                    <span>¿Cómo aprendió a utilizar la computadora?</span>
                    <span class="requerido">*</span>
                </div>
                <select style="width: 100%; padding: 8px;" name="sexo">
                    <option disabled selected>Selecciona una opción</option>
                    <option>Siendo autodidacta (Videos, artículos, etc)</option>
                    <option>Curso intensivo</option>
                    <option>Con ayuda de un tutor/asesor</option>
                    <option>Curiosidad</option>
                    <option>Otra</option>
                </select>
                <a class="boton_siguiente" href="#minimizar" >Siguiente pregunta</a>
            </div>
        </div>

        <!-- SECCION DE MINIMIZAR -->
        <div class="preguntaContainer" style="background:#CA6F1E" id="minimizar">
            <div>
                <a class="boton_anterior" href="#aprender">Pregunta anterior</a>
                <div class="pregunta">
                    <span>¿Qué botón usaría para minimizar una pestaña?</span>
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
                <a class="boton_siguiente" href="#maximizar" >Siguiente pregunta</a>
            </div>
        </div>

        <!-- SECCION DE MAXIMIZAR -->
        <div class="preguntaContainer" style="background:#717D7E" id="maximizar">
            <div>
                <a class="boton_anterior" href="#minimizar">Pregunta anterior</a>
                <div class="pregunta">
                    <span>¿Qué botón usaría para maximizar una pestaña?</span>
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
                <a class="boton_siguiente" href="#cerrar" >Siguiente pregunta</a>
            </div>
        </div>

        <!-- SECCION DE CERRAR -->
        <div class="preguntaContainer" style="background:#2C3E50" id="cerrar">
            <div>
                <a class="boton_anterior" href="#maximizar">Pregunta anterior</a>
                <div class="pregunta">
                    <span>¿Qué botón usaría para cerrar una pestaña?</span>
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
                <button type="submit" class="boton">Enviar</button>
            </div>
        </div>
    </form>
</body>
</html>



