<?php

 
if ($_REQUEST[ancho] > 0 && $_REQUEST[alto] > 0) {
    print "<p>Ancho: " . $_REQUEST[ancho] . "</p>\n";
    print "<p>Ancho: " . $_REQUEST[alto] . "</p>\n";
    for ($i = 1; $i <= $_REQUEST[alto]; $i++) {
        for ($j = 1; $j <= $_REQUEST[ancho]; $j++) {
            print "* ";
        }
        print " <br>\n";
    }
}



?>