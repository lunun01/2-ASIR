<?php
//Dados jugador 1
$dado1a = rand(1, 6);
$dado1b = rand(1, 6);
$dado1c = rand(1, 6);
$dado1d = rand(1, 6);
$dado1e = rand(1, 6);
//Dados jugador 2
$dado2a = rand(1, 6);
$dado2b = rand(1, 6);
$dado2c = rand(1, 6);
$dado2d = rand(1, 6);
$dado2e = rand(1, 6);

//Suma de tiradas

$total1 = $dado1a + $dado1b + $dado1c + $dado1d + $dado1e;

$total2 = $dado2a + $dado2b + $dado2c + $dado2d + $dado2e;


//Tiradas jugador 1
print "          <h1>Jugador 1</h1>";
print "          <img src=\"img/$dado1a.jpg\" width=\"140\" height=\"140\">\n";
print "          <img src=\"img/$dado1b.jpg\" width=\"140\" height=\"140\">\n";
print "          <img src=\"img/$dado1c.jpg\" width=\"140\" height=\"140\">\n";
print "          <img src=\"img/$dado1d.jpg\" width=\"140\" height=\"140\">\n";
print "          <img src=\"img/$dado1e.jpg\" width=\"140\" height=\"140\">\n";
print "          <p>$total_jugador1</p>";
//Tiradas jugador 2
print "          <h1>Jugador 2</h1>";
print "          <img src=\"img/$dado2a.jpg\" width=\"140\" height=\"140\">\n";
print "          <img src=\"img/$dado2b.jpg\" width=\"140\" height=\"140\">\n";
print "          <img src=\"img/$dado2c.jpg\" width=\"140\" height=\"140\">\n";
print "          <img src=\"img/$dado2d.jpg\" width=\"140\" height=\"140\">\n";
print "          <img src=\"img/$dado2e.jpg\" width=\"140\" height=\"140\">\n";
print "          <p>$total_jugador2</p>";

//Comprobacion

if ($total_jugador1 > $total_jugador2) {
    print "<p>Ha ganado el jugador 1 </p>";
} elseif ($total_jugador2 > $total_jugador1) {
    print "<p>Ha ganado el jugador 2 </p>";
} elseif ($total_jugador1 == $total_jugador2) {
    print "<p>Los jugadores han empatado </p>";
}

?>