<?php

    //php es sensible a mayusculas y minusculas
    $hola = 'Hola mundo';

    $HOla = "hola todos";

    $identidad= 'soy santy';


    //concatenacion
    echo $hola. " " . $identidad;

    print "\n$HOla soy jose\n";

    //solo funciona con comillas dobles

    print '\n $HOla soy luis';

    //constantes 

    define ('curso', 'Mayko');

    echo "\n" . curso;

    //constantes con arreglos

    define ('animales', ['perro','gato','raton']);

    echo "\n" . animales[1];

    //comprobar constantes

    if(defined('curso2')){
        echo "\n si se definio";
    }else{
        echo "\n no se definio";
    }

    //usar caracteres especiales en cadenas

    $cadena = "hola mundo mi nombre e\$ 'victor' y tengo \"29\"" ;
    echo "\n".$cadena;

    //boleanos
    $b1 = -1; //true
    $b2 = 0; //false

    $b3 = "hola"; //true
    $b4 = ""; //false

    //operadores ternarios
    $a = 5;
    $b = 5;

    $valor = $a < $b ? $a : ( $a > $b ? $b: "igual");
    echo "\n". $valor;

    //SELECCION MULTIPLE

    echo match($a){
        1 => "1",
        2 => "2",
        3 => "3",
        4 => "4",
        5 => "\nsiuuu \n",
        6 => "6",
        7 => "7",
        default => "defecto",
    };

    //foreach

    $nombres = ["santy","jose","luis"];

    foreach( $nombres as $indice => $nombre){
        echo $indice. " ". $nombre . "\n";
    }

    //break y continue

    for($i=0 ; $i <10 ; $i++){
        if($i < 5 && $i > 3){
            continue;
        }
        echo $i. "\n";
        if($i == 8) break;
    }

    //exit() o die() terminan el programa

    //funciones

    function factorial($n){
        $res=1;
        for($i=1; $i<$n ; $i++){
        $res*=$i;
        }
    
        return $res;
    }
  
    echo factorial(10) ."\n";

    //variables globales

    $var = 5;

    function test(){
        
        global $var; //declaracion obligatoria para usar variables globales

        $var = 7;
    
        echo $var."\n";
    }
    echo $var."\n :(";

    test();

    //variables por valor y por referencia

    function test2($a,&$b){
        
        $a+=10;
        $b+=10;
    }

    test2($a,$b);

    echo $a . " " . $b . "\n";

    //concatenar con arreglos 

    function concat(...$palabras){
        $res = "";

        foreach($palabras as $palabra){
            $res.= $palabra. " ";
        }

        return $res;
    }

    echo concat("hola", " soy ", "german" )."\n";

    $cadena2 = "buenos d??as como esta el mundo";

    echo strlen($cadena2)."\n"; // cantidad de  bits de la cadena
    echo mb_strlen($cadena2)."\n"; // cantidad de caracteres de la cadena
    echo strpos($cadena2,'d')."\n"; //primera coincidencia de izquierda a derecha
    echo strrpos($cadena2,'d')."\n"; //primera concidencia de derecha a izquierda
    echo str_contains($cadena,'mundo')."\n"; //1 si esta la sub cadena 0 si no esta

    //comparar dos cadenas 

    $cad1= "Prueba";
    $cad2= "prueba";

    if(strcmp($cad1,$cad2)==0) echo "iguales 1"."\n" ;//distingue mayusculas y minuscyulas

    if(strcasecmp($cad1,$cad2)==0) echo "iguales 2"."\n" ;// no distingue mayusculas y minusculas
    
    echo substr($cadena2, 0,6)."\n";

    echo str_replace("d??as","noches",$cadena2)."\n"; //reemplazar palabras en cadenas

    //arreglos 
    $array = [10,20,30,40,50];
    $array[]="santy";
    $array[]=true;
    $array[]=3;
    $array[]=4;

    echo $array[7]."\n";
    
    //permite arreglos con indicees especificos

    $datos = [
        'nombre' => "santy",
        'apellido' => "tinty",
        'numero' => 1212,

    ];

    echo $datos['numero']."\n";

    //funciones para arrays

    list(,,,,,,$a,$b,$c) = $array; //sacar variables a partir de elementos de un array
    echo $a."\n";
    echo $b."\n";
    
    $array2 = range(5,10); //llenar array con rango de valores
    var_dump($array2); 

    echo count($array2)."\n"; //contar elementos 

    unset($array2[2]); //borrar elemento de un array

    if(in_array(7,$array2)){ //preguntar si contiene el elemento
        echo "7 esta dentro del arreglo \n";

    }



?>