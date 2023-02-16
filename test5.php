<?php

//metodos estaticos

class Humano{

    public static $nombre = 'santiago tintilay';

    public function __construct(public $apellido,public $dni ){} //definir constructor optimo

    static public function saludar(){ //con "static" definimos el metodo como estatoco
        echo "holaaaaaa"."\n";
    }

    public function saludoFormal(){
        echo "Buen dia ".self::$nombre . "\n"; // indicamos con "self" que hablamos de una propiedad estatica de esta clase
    }

}

Humano::saludar();

$humano = new Humano(dni:8487,apellido:"Carlos"); //pasar datos al constructor en distinto orden

$humano->saludoFormal();

class Argentino extends Humano {
    static function saludoArg(){
        echo "hola desde Arg " . parent::$nombre; // usar la propiedad estatica de esta clase padre
    }
}

Argentino::saludoArg();

