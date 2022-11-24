<html>
    <head>
    <meta charset="UTF-8">
        <title>Buscar usuario</title>
    </head>
    <body>
        <form action="buscar.php" method="post">
            <p>
                Nombre: <input type="text" name="nombre_buscar"> 
            <input type="submit" value="buscar" name="buscar">
            </p>
        </form>
        <a href="agenda.html">Volver a agenda</a><br>
    </body>
</html>
<?php
$nombre = $_REQUEST[nombre_buscar];

if ($nombre == "") {
    print "<p>Introduce un contacto para buscar<p>\n";
} else {
    $nombre_de_archivo = "contactos.txt";
    $archivo = fopen($nombre_de_archivo, "r");
    while(!feof($archivo)) {
        $line = fgets($archivo);
        $lista = explode(":",$line);
        if ($nombre == $lista[0]) {
            $datos = $lista[0] . " " . $lista[1] . " " . $lista[2] . " " . $lista[3];
            echo "Contacto: $datos";
            $contacto = true;
        }
    }
    if ($contacto == false) {
        echo "El cliente no existe";
    }
    fclose($nombre_de_archivo);
}

?>