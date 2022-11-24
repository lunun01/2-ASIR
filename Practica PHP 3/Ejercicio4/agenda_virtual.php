
<?php
$nombre    = $_REQUEST[nombre];
$trabajo   = $_REQUEST[trabajo];
$telefono  = $_REQUEST[telefono];
$direccion = $_REQUEST[direccion];
$otras     = $_REQUEST[otras];

$nombre_de_archivo = "contactos.txt";
$archivo = fopen($nombre_de_archivo, "a");
$lista = "$nombre:$trabajo:$telefono:$direccion:$otras";
fwrite($archivo, "$lista\r\n");
fclose($nombre_de_archivo);

print "<a href=\"contactos.txt\">Mostrar Agenda</a>";
print "<br>";
print "<a href=\"agenda.html\">Volver a agenda</a>";
print "<br>";
print "<a href=\"buscar.php\">Buscar usuario</a>";











?>