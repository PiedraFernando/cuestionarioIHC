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
    
    $sql = "SELECT count(sexo) as hombres FROM respuestas where sexo='Hombre'";
    $resultado = $mysqli->query($sql);
    $hombres = $resultado->fetch_assoc();
    $sql = "SELECT count(sexo) as mujeres FROM respuestas where sexo='Mujer'";
    $resultado = $mysqli->query($sql);
    $mujer = $resultado->fetch_assoc();
    $sql = "SELECT count(sexo) as otros FROM respuestas where sexo!='Mujer' and sexo!='Hombre'";
    $resultado = $mysqli->query($sql);
    $otros = $resultado->fetch_assoc();
    
    $sql = "SELECT count(estudios) as estudios FROM respuestas where estudios='Ninguno'";
    $resultado = $mysqli->query($sql);
    $Ninguno = $resultado->fetch_assoc();
    $sql = "SELECT count(estudios) as estudios FROM respuestas where estudios='Preescolar'";
    $resultado = $mysqli->query($sql);
    $Preescolar = $resultado->fetch_assoc();
    $sql = "SELECT count(estudios) as estudios FROM respuestas where estudios='Primaria'";
    $resultado = $mysqli->query($sql);
    $Primaria = $resultado->fetch_assoc();
    $sql = "SELECT count(estudios) as estudios FROM respuestas where estudios='Secundaria'";
    $resultado = $mysqli->query($sql);
    $Secundaria = $resultado->fetch_assoc();
    $sql = "SELECT count(estudios) as estudios FROM respuestas where estudios='Media superior'";
    $resultado = $mysqli->query($sql);
    $MedioSuperior = $resultado->fetch_assoc();
    $sql = "SELECT count(estudios) as estudios FROM respuestas where estudios='Superior'";
    $resultado = $mysqli->query($sql);
    $Superior = $resultado->fetch_assoc();

    $mysqli->close();
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var genero = new google.visualization.DataTable();
        genero.addColumn('string', 'Topping');
        genero.addColumn('number', 'Slices');
        genero.addRows([
          ['Hombre', <?php echo $hombres['hombres']; ?>],
          ['Mujeres', <?php echo $mujer['mujeres']; ?>],
          ['No definido', <?php echo $otros['otros'] ?>],
        ]);
        var generoOptions = {
                       'width':400,
                       'height':300};

        // Create the data table.
        var estudios = new google.visualization.DataTable();
        estudios.addColumn('string', 'Topping');
        estudios.addColumn('number', 'Slices');
        estudios.addRows([
          ['Ninguno', <?php echo $Ninguno['estudios']; ?>],
          ['Preescolar', <?php echo $Preescolar['estudios']; ?>],
          ['Primaria', <?php echo $Primaria['estudios'] ?>],
          ['Secundaria', <?php echo $Secundaria['estudios'] ?>],
          ['Medio Superior', <?php echo $MedioSuperior['estudios'] ?>],
          ['Superior', <?php echo $Superior['estudios'] ?>],
        ]);
        var estudiosOptions = {
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(genero, generoOptions);

        var chart1 = new google.visualization.PieChart(document.getElementById('chart_div1'));
        chart1.draw(estudios, estudiosOptions);
      }
    </script>

</head>
<body>
    <div class="preguntaContainer" style="background:#CB4335">
        <div>
            <H2 class="subTitulo">Relacion de generos</H2>
            <div id="chart_div"></div>
        </div>
    </div>
    <div class="preguntaContainer" style="background:#CB1035">
        <div>
            <H2 class="subTitulo">Relacion de grados de estudios</H2>
            <div id="chart_div1"></div>
        </div>
    </div>
</body>
</html>