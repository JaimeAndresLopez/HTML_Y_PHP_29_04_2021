<?php

    // header("content-type: aplication/jdon");
    echo <<<NOMBRE
    Me llamo $_REQUEST[Nombres] $_REQUEST[Apellido] <br>
NOMBRE;
    echo <<<EDAD
    Tengo $_REQUEST[edad] años<br>
EDAD; 
    echo <<<GENERO
     $_REQUEST[opcion] <br>
GENERO;
echo <<<GENERO
     $_REQUEST[opcion] <br>
GENERO;
print_r( join(",", $_REQUEST["lengua"]));

?>