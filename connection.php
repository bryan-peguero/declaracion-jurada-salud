<?php
    $dbnombre = "Database.db";
    $db = new SQLite3($dbnombre);

    if(!$db){
        die("Base de Datos no creada");
    }
    else{
        echo "<script>
            console.log('Base de Datos creada');
        </script>";
    }

    $sql = "CREATE TABLE IF NOT EXISTS Personas(ID integer not null primary key, Nombre text, Apellido text, Sexo text, fechaNacimiento date, Nacionalidad text, numTransporte text, Calle text, Ciudad text, Provincia text, Pais text, Telefono text, Transporte text, Lugar text, fechaInicio date, fechaSalida date, Companie text, Vuelo text, paisEmbarque text, paisTransito text, paisVisita text, Sintomas text, otroSintomas text, fechaSintomas date, Localizacion text, Firma text, fechaFirma date);";

    $db->exec($sql);
?>