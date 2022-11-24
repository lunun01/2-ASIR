<?php
$nombre = $_REQUEST[nombre];
$telf = $_REQUEST[telefono];
$matriculado = $_REQUEST[matriculado];
$ensenanza = $_REQUEST[ensenanza];
$mostrar = $_REQUEST[mostrar];


if ($mostrar == "Por pantalla" && $matriculado == "matriculado") {
    print "<p>El alumno <b>" . $nombre . "</b> con telefono <b>" . $telf . ", <b>está " . $matriculado . " en un " . $ensenanza . "</b></p>";
    
} if ($mostrar == "Por pantalla" && $matriculado == "") {
    print "<p>El alumno <b>" . $nombre . "</b> con telefono <b>" . $telf . ", <b> no está matriculado</b></p>";

} if ($mostrar == "En Archivos datos.txt" && $matriculado == "matriculado") {
    $nombre_de_archivo = "datos.txt";
    $archivo = fopen($nombre_de_archivo, "a");
    fwrite($archivo, "El alumno " . $nombre . " con telefono " . $telf . ", esta " . $matriculado . " en un " . $ensenanza ."\r\n");
    fclose($nombre_de_archivo);
    print "<a href=\"datos.txt\">Mostrar archivo</a>";
} if ($mostrar == "En Archivos datos.txt" && $matriculado == "") {
    $nombre_de_archivo = "datos.txt";
    $archivo = fopen($nombre_de_archivo, "a");
    fwrite($archivo, "El alumno " . $nombre . " con telefono " . $telf . ", no esta matriculado\r\n");
    fclose($nombre_de_archivo);
    print "<a href=\"datos.txt\">Mostrar archivo</a>";
}
?>
