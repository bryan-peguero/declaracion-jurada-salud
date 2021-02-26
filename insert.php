<?php 
    include('connection.php');
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $sexo = $_POST['sex'];
    $fechaN = $_POST['fechaN'];
    $nacionalidad = $_POST['nacionalidad'];
    $numTrans = $_POST['numTrans'];
    $calle = $_POST['calle'];
    $ciudad = $_POST['ciudad'];
    $provincia = $_POST['provincia'];
    $pais = $_POST['pais'];
    $telefono = $_POST['telefono'];
    $transporte = $_POST['transporte'];
    $lugarE = $_POST['lugarE'];
    $fechaInicio = $_POST['fechaInicio'];
    $fechaSalida = $_POST['fechaSalida'];
    $companie = $_POST['companie'];
    $vuelo = $_POST['vuelo'];
    $paisEm = $_POST['paisEm'];
    $paisTransito = $_POST['paisTransito'];
    $paisVisita = $_POST['paisVisita'];
    $sintomas = $_POST['sintomas'];
    $otroSignos = $_POST['otroSignos'];
    $fechaSintomas = $_POST['fechaSintomas'];
    $localizacion = $_POST['localizacion'];
    $firma = $_POST['firma'];
    $fechaFirma = $_POST['fechaFirma'];

    $sql = "INSERT INTO Personas(Nombre, Apellido, Sexo, fechaNacimiento, Nacionalidad, numTransporte, Calle, Ciudad, Provincia, Pais, Telefono, Transporte, Lugar, fechaInicio, fechaSalida, Companie, Vuelo, paisEmbarque, paisTransito, paisVisita, Sintomas, otroSintomas, fechaSintomas, Localizacion, Firma, fechaFirma) VALUES('$nombre', '$apellido', '$sexo', '$fechaN', '$nacionalidad', '$numTrans', '$calle', '$ciudad', '$provincia', '$pais', '$telefono', '$transporte', '$lugarE','$fechaInicio', '$fechaSalida', '$companie', '$vuelo', '$paisEm', '$paisTransito', '$paisVisita', '$sintomas', '$otroSignos', '$fechaSintomas', '$localizacion', '$firma', '$fechaFirma');";
    if($db->exec($sql)){
        echo "
            <script>
            var aleatorio = Math.round(Math.random()*9999);
            alert('#'+aleatorio+' sus datos han sido guardados correctamente');
            window.location.replace('site.php'); 
            </script></a>
            ";
    }
    else{
        echo "
            <script>
            alert('Ha ocurrido un error al intentar guardar los datos');
            </script>
            ";
    }
?>