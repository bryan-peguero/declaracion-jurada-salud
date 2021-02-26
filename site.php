<?php
    include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Declaración Jurada de Salud del Viajero</title>
    <link rel="icon" type="image/x-icon" href="sign-form.png" />
</head>
<body>
    <div class="body">
        <img style="float: left" src="https://www.paho.org/sites/default/files/dor-logo-msp-700x324.jpg" height="100px" width="300px">
        <img style="float: right" src="src/escudo.jpg" height="100px" width="150px"> 
        <div>
            <p align="center">
                <strong>República Dominicana</strong>
                <br><strong>Ministerio de Salud Pública</strong>
                <br>Declaración Jurada de Salud del Viajero
                <br>(MSP-DJSV-01)
            </p>
        </div>  
    </div>
    <form class="medio" method="post" action="insert.php">
        <ol>
            <div class="form-control">
                <li><strong>Identificación del viajero o tripulante</strong></li>
                <span>Nombres:</span>&nbsp;<input id="nombre" name="nombre" style="width: 40%;" type="text">
                <span>Apellidos:</span>&nbsp;<input id="apellido" name="apellido" style="width: 36%;" type="text">
                <span>Sexo:</span><input id="femenino" name="sex" value="Femenino" type="checkbox" >Femenino&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input id="masculino" name="sex" value="Masculino" type="checkbox" >Masculino&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha de Nacimiento:</span>&nbsp;<input id="fechaN" name="fechaN" type="date" required>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Día&nbsp;
                Mes&nbsp;
                Año
                <br>
                <span>Nacionalidad:</span>&nbsp;<input id="nacionalidad" name="nacionalidad" style="width: 25%;" type="text">
                <span>N° de Transporte:</span>&nbsp;<input id="numTrans" name="numTrans" style="width: 39%;" type="text">
                <br>Dirección de Residencia Permanente<br>
                <span>Calle y No.:</span>&nbsp;<input id="calle" name="calle" style="width: 84.7%;" type="text">
                <span>Ciudad/Sector/Barrio:</span>&nbsp;<input id="ciudad" name="ciudad" style="width: 74.8%;" type="text">
                <span>Provincia/Estado/Departamento:</span>&nbsp;<input id="provincia" name="provincia" style="width: 25%;" type="text">
                <span>País:</span>&nbsp;<input id="pais" name="pais" style="width: 32.5%;" type="text">
                <span>Teléfono(s) de contacto en lugar de residencia:</span>&nbsp;<input id="telefono" name="telefono" style="width: 49.8%;" type="text">
            </div>
            <br>
            <div class="form-control">
                <li><strong>Datos de viaje:</strong></li>
                <span>Medio de transporte:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="aereo" name="transporte" value="Aéreo" type="checkbox" >Aéreo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input id="maritimo" name="transporte" value="Marítimo" type="checkbox" >Marítimo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input id="terrestre" name="transporte" value="Terrestre" type="checkbox" >Terrestre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span>Nombre del lugar de entrada:</span><input id="lugarE" name="lugarE" style="width: 68%" type="text">
                <span>Fecha de llegada del país:</span>&nbsp;<input id="fechaInicio" name="fechaInicio" type="date">&nbsp;&nbsp;&nbsp;
                <span>Fecha de salida del país:</span>&nbsp;<input id="fechaSalida" name="fechaSalida" type="date">
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Día&nbsp;
                Mes&nbsp;
                Año
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Día&nbsp;
                Mes&nbsp;
                Año
                <span>Compañía de transporte:</span>&nbsp;<input id="companie" name="companie" style="width: 71.5%" type="text">
                <span>N° de vuelo/embarcación o placa del vehículo (carro o autobús):</span>&nbsp;<input id="vuelo" name="vuelo" style="width: 32.8%" type="text">
                <span>Primer país de embarque:</span>&nbsp;<input id="paisEm" name="paisEm" style="width: 70.5%" type="text">
                <span>Países de tránsito antes de llegar a República Dominicana:</span>
                <br><textarea id="paisTransito" name="paisTransito" style="width: 96%"></textarea>
                <span>Países visitados en los últimos 30 días:</span>
                <br><textarea id="paisVisita" name="paisVisita" style="width: 96%"></textarea>
            </div>
            <br>
            <div class="form-control">
                <li><strong>Declaración de signos y síntomas:</strong></li>
                <span>En las últimas 72 horas, ¿Usted ha presentado alguno de estos signos y síntomas?</span><br>
                <input id="fiebre" name="sintomas" value="Fiebre" type="checkbox" >Fiebre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input id="dificultad" name="sintomas" value="Dificultad Respiratoria" type="checkbox" >Dificultad respiratoria&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input id="tos" name="sintomas" value="Tos" type="checkbox" >Tos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input id="dolorCabeza" name="sintomas" value="Dolor de Cabeza" type="checkbox" >Dolor de Cabeza&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input id="dolorGarganta" name="sintomas" value="Dolor de Garganta" type="checkbox" >Dolor de garganta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input id="fatiga" name="sintomas" value="Fatiga" type="checkbox" >Fatiga&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input id="escalofrios" name="sintomas" value="Escalofríos" type="checkbox" >Escalofríos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input id="secrecion" name="sintomas" value="Secreción Nasal" type="checkbox" >Secreción nasal&nbsp;&nbsp;
                <input id="dolorMuscular" name="sintomas" value="Dolor Muscular" type="checkbox" >Dolor muscular&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input id="ninguno" name="sintomas" value="Ninguno" type="checkbox" >Ninguno&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span>Otros signos y síntomas (Especifique):</span>&nbsp;<input id="otroSignos" name="otroSignos" style="width: 58%" type="text">
                <span>Fecha de inicio de síntomas:</span>&nbsp;<input id="fechaSintomas" name="fechaSintomas" type="date">
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Día&nbsp;
                Mes&nbsp;
                Año
            </div>
            <br>
            <div class="form-control">
                <li><strong>Localización del pasajero:</strong></li>
                <span>Dirección completa de contacto durante su estadía en República Dominicana en los próximos 30 días:</span>
                <br><textarea id="localizacion" name="localizacion" style="width: 96%"></textarea>
            </div>        
        </ol>
        <p align="center"><strong>Nota importante</strong></p>
        <p align="justify" class="hbackground"><strong>Declaro que la información suministrada aquí es verdadera y acepto que la falsa declaración por mi se considera una violación a las normativas nacionales en salud.</strong></p>
        <div class="form-control">
            &nbsp;&nbsp;&nbsp;&nbsp;<input id="firma" name="firma" style="width: 35%;" type="text">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span>Fecha:</span>&nbsp;<input id="fechaFirma" name="fechaFirma" type="date">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Firma del Viajero
        </div>
        <br>
        <p align="center">
        <button type="submit">Enviar Formulario</button>
        </p>
    </form>
    
</body>
</html>
