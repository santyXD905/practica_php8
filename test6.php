<?php

// expresiones regulares

$cadena = "Av. Lima 123";

//  /^ / principio de la cadena

//  / /i insensible a mayus y minus

// / $/ al final de la cadena

// /[]/ caracteres especificos

// /[^]/negar caracteres especificos

$expresion = "/^av/i";

if(preg_match($expresion,$cadena)){
    echo "la cadena cumple la condicion";
}else echo "no cumple";